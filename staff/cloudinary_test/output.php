<?php
    include "../../db-connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        img{
            width: 10%;
        }
    </style>
</head>
<body>
    
<?php
    $query = mysqli_query($connect, "SELECT * FROM cloudinary_test");
    
    while($output = mysqli_fetch_assoc($query)){
        
        $pics = $output["cloudinary_link"];
        //echo $pics;
?>
        <img src="" alt="">
        <img src="<?php echo $pics ?>" alt="" class="images">
        <br><br>
        
<?php
    }


?>
</body>
</html>