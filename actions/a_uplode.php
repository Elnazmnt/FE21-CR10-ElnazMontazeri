<?php
require_once "db_connect.php";
require_once  "file_upload.php";

if ($_POST) { 
$id = $_POST['Id'];
$type = $_POST['type'];
$title = $_POST['title'];
$author_first_name = $_POST['author_first_name'];
$author_last_name = $_POST['author_last_name'];
$status = $_POST['status'];
$uploadError = '';
$image =file_upload($_FILES['image']);
if($image->error===0){
    ($_POST["image"]=="book.png")?: unlink("../pictures/$_POST[image]");           
    $sql = "UPDATE library SET type = '$type', title = '$title', image = '$image->fileName' ,author_first_name = '$author_first_name', author_last_name = '$author_last_name',status = '$status' WHERE Id = {$id}";
 

}else{
    $sql = "UPDATE library SET  type = '$type', title = '$title', author_first_name = '$author_first_name', author_last_name = '$author_last_name', status = '$status' WHERE Id = {$id}";

   


}    
if (mysqli_query($connect, $sql) === TRUE) {
    $class = "success";
    $message = "The record was successfully updated";
    $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
} else {
    $class = "danger";
    $message = "Error while updating record : <br>" . mysqli_connect_error();
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
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?Id=<?=$Id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>