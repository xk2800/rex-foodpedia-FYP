<?php   
 //upload.php  
 //echo 'done';  
 $output = '';  
 $default_upload_options = array('tags' => 'basic_sample');
 $allowed = array('jpg', 'jpeg', 'png', 'svg');
 $eager_params = array('width' => 200, 'height' => 150, 'crop' => 'scale');

if (is_file(__DIR__ . '/../vendor/autoload.php') && is_readable(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__.'/../vendor/autoload.php';
} else {
    // Fallback to legacy autoloader
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../vendor/cloudinary/cloudinary_php/src/Helpers.php';
}

if (file_exists('settings.php')) {
    include './settings.php';
}

if(isset($_FILES['file']['name'][0])){  

    foreach($_FILES['file']['name'] as $keys => $values){  

        $fileName = $_FILES['file']['name'][$keys];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $fileSize = $_FILES['file']['size'][$keys];

        if(in_array($fileActualExt, $allowed)){

            if($fileSize <= 3000000){

                $files['remote'] = \Cloudinary\Uploader::upload(
                    $_FILES['file']['tmp_name'][$keys],
                    array_merge(
                        $default_upload_options,
                        array(
                            'width' => 500,
                            'height' => 500,
                            'crop' => 'fit',
                        )
                    )
                );
    
                $imgurl = cloudinary_url($files['remote']['public_id']);
    
                echo '<img src="'.$imgurl.'">';

            }else{

                echo ' '.$fileName.' (file size of '.$fileSize.' too big (Max 3MB), upload failed) ';

            }

        }else{

            echo ' '.$fileName.' (file type of '.$fileActualExt.' is not supported, upload failed) ';

        }

    }  

}  
?>  