<?php
require_once "db_connect.php";
require_once  "file_upload.php";

if ($_POST) { 
$type = $_POST['type'];
$title = $_POST['title'];
$image =file_upload($_FILES['image']);
$author_first_name = $_POST['author_first_name'];
$author_last_name = $_POST['author_last_name'];
$status = $_POST['status'];
$uploadError = '';
$sql="INSERT INTO library(type, title,image, author_first_name, author_last_name,status) VALUES
('$type', '$title','$image->fileName', '$author_first_name', '$author_last_name','$status')";


if (mysqli_query($connect, $sql)=== true){
    $class = "success";
    $message = "The entry below was successfully created <br>
        <table class='table w-50'>
        <tr>
       
        <th >Type</th>
        <th >Title</th> 
        <th >Author Name</th>
        <th >Author Last Name</th>
        <th >Status</th>
       

    </tr>
        <tr>
       
        <td> $type </td>
        <td> $title </td>
        <td> $author_first_name </td>
        <td> $author_last_name </td>
        <td> $status </td>
        </tr></table><hr>";

        
    $uploadError = ($image->error !=0)? $image ->ErrorMessage :'';

} else {
    $class = "danger";
    $message = "Error while creating record. Try again: <br>" . $connect->error;
    $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
}

mysqli_close($connect);
} else {
    header("location: ../error.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <?php require_once "../components/boot.php"?>
</head>
<body style="background-image: url('photo.jpg');background-attachment: fixed; background-size: cover; " class="container">
    

<div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>"  role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? '' ; ?></p>
                <a href='../index.php'><button class="btn btn-primary"  type='button'>Home</button></a>
            </div>
       </ div>


</body>
</html>