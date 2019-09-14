<?php

$target_dir = "uploads/";

//this folder will contain uploaded files

$photo_name =  $_FILES['fileToUpload']['name'];

require "connection.php";

 session_start();
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }


    $usersname = $_SESSION["username"];

$update_photo = "update users set photo = 'uploads/$photo_name' where username = '$usersname'";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

//fileToUpload is the input name in the html form

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
        header("Location:oops.php");
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
     header("Location:oops.php");
}
// Check file size in bytes
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
     header("Location:oops.php");
}
// Allow certain file formats
if($imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
     header("Location:oops.php");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
     header("Location:oops.php");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $conn->query($update_photo);
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        header("Location:ManageAccount.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
         header("Location:oops.php");
    }
}



?> 