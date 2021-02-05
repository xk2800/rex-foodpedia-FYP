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


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

    $sql = mysqli_query($connectss, "SELECT * FROM cloudinary");

    while($sql_output = mysqli_fetch_assoc($sql)){

        $img_out = $sql_output['cloudinary_link'];

        ?>
            <img src="<?php echo $img_out ?>" alt="img test">
            <br><b></b>
        <?php

    }


?>
</body>
</html>