<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



if (isset($_POST['submit'])) {

   if (!empty($_FILES['image'])) {
       
        $file = $_FILES['image'];
        $name = $file['name'];
        $tmp_name = $file['tmp_name'];
        $mime_types = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
        
        if (!in_array($file['type'], $mime_types)) {
            echo "file type not allowed";
        } else {
            if($file['size'] > 1000000) {
                echo "file is too big";
            } else {
                move_uploaded_file($tmp_name, "profile/$name");
                echo "file uploaded successfully";
            }
        }
       
    }else {
        
    }

}

// foreach($_FILES['image'] as $key => $value) {
//     echo $key . " => " . $value . "<br>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="submit">
    </form>
</body>
</html>