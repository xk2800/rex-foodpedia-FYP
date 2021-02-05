<?php

$ip=getenv('DBIP');
$use='root';
$pwd='';
$table='cloudinary_zombie_test';

//used for procedule php call
$connectss = mysqli_connect("localhost", $use, $pwd, $table);

//using PDO call
$mysqli = NEW MySQLi ("localhost", $use, $pwd, $table);

//actual db connection
@mysqli_connect("localhost", $use, $pwd, $table) || die('<p>Error: 500. <br> DB not connected</p>');

//include "./db-connect.php";

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileType = $_FILES['file']['type'];
$fileError = $_FILES['file']['error'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'svg');

if(in_array($fileActualExt, $allowed)){

    if($fileError === 0){

        $fileNameNew = uniqid('', true).".".$fileActualExt;

        echo $fileTmpName;

        echo "File uploaded";

    }else{

        echo "There was an error uploading your file";

    }

}else{

    echo "You cannot upload files of this type!";

}

if (is_file( __DIR__ .'../cloudinary/vendor/autoload.php') && is_readable( __DIR__ .'../cloudinary/vendor/autoload.php')) {
    require_once __DIR__ .'../cloudinary/vendor/autoload.php';
} else {
    // Fallback to legacy autoloader
    require_once '../cloudinary/vendor/autoload.php';
    require_once '../cloudinary/vendor/cloudinary/cloudinary_php/src/Helpers.php';
}

//api settings from cloudinary
\Cloudinary::config(array(
    'cloud_name' => 'rexfoodipediafyp',
    'api_key' => '692999355687826',
    'api_secret' => 'WIQ5w6E77zf2yOhmgGtr_6dE6AQ'
));


/*if (file_exists('../settings.php')) {
     include '../settings.php';
 }*/

$sample_paths = array(
    'pizza' => getcwd() . DIRECTORY_SEPARATOR . 'pizza.jpg',
    'lake' => getcwd() . DIRECTORY_SEPARATOR . 'lake.jpg',
    'couple' => $fileTmpName,
);


$default_upload_options = array('tags' => 'basic_sample');
$eager_params = array('width' => 200, 'height' => 150, 'crop' => 'scale');
$files = array();


    global $files, $sample_paths, $default_upload_options, $eager_params;



    echo "uploading";

    # In the two following examples, the file is fetched from a remote URL and stored in Cloudinary.
    # This allows you to apply the same transformations, and serve those using Cloudinary's CDN layer.
    $files['remote'] = \Cloudinary\Uploader::upload(
        $sample_paths['couple'],
        $default_upload_options
    );

    $url_cloud = cloudinary_url($files['remote']['public_id']);


    $sql = mysqli_query($connectss, "INSERT INTO cloudinary(cloudinary_link) VALUE ('$url_cloud')");

    if($sql){
        echo "works";
    }else{
        echo "failed";
    }

/* }  */

?>