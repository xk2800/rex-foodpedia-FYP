<html>
<head>
    <meta charset="utf-8">
    <title>Cloudinary - Basic PHP Sample</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <h1>Cloudinary - Basic PHP Sample</h1>
    
    <!-- follow action method for cloudinary, all php code is kept in upload.php file-->
    <form action="./upload.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="file" multiple>
        <br>
        <br>
        <button type="submit" class="btn btn-info">Submit</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>



