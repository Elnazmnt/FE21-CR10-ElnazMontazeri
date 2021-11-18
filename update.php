<?php
require_once "actions/db_connect.php";

if ($_GET["id"]) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM library WHERE Id = {$id}";
    $result = mysqli_query($connect, $sql);
    $statusArray = ["available", "reserved"];   
    $typeArray = ["Book","CD","DVD"];
    $media_status = "";
    $media_type ="";    
    
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);

        $type = $data['type'];
        $title = $data['title'];

        $image = $data['image'];

        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];

        $status = $data['status'];
        for ($i=0; $i < count($statusArray); $i++) { 
            if($status != $statusArray[$i]){
                $media_status .= "<option>$statusArray[$i]</option>"; 
            }else{
                $media_status .= "<option selected>$statusArray[$i]</option>";
            }
        }

        for ($j=0; $j < count($typeArray); $j++) { 
            if($type != $typeArray[$j]){
                $media_type .= "<option>$typeArray[$j]</option>"; 
            }else{
                $media_type .= "<option selected>$typeArray[$j]</option>";
            }
        }

        } else {
            header("location: error.php");
    }
    mysqli_close($connect);
     } else {
         header("location: error.php");
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Edit Item</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>

<body style="background-image: url('photo.jpg');background-attachment: fixed; background-size: cover; " class="container">


    <!-- start form -->
    <div class="mt-3  p-2 text-dark bg-opacity-50" style="background-color:#fd9a7e ;opacity:0.8;">
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <div class="col-md-4 ">
                <label for="validationCustom01" class="form-label mt-2 fs-3" >Please chocse type of Itam:</label>
                <!-- <input type="text" class="form-control" name="type" id="validationCustom01" value="<?php echo $data['type'] ?>"required> -->
                <select class="form-select" name="type" id="specificSizeSelect" value="<?php echo $data['type'] ?>" >
                
                    <!-- <option selected >Type..</option>
                    <option value="Book">Book</option>
                    <option value="CD">CD</option>
                    <option value="DVD">DVD</option> -->
                    <?php echo $media_type; ?>
                    
                </select>
            </div>
       


            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">Title</label>
                <input type="text" class="form-control" name="title" id="validationCustom01" value="<?php echo $data['title'] ?>"  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">choose Image</label>
                <input class="form-control" type="file" name="image" id="formFile" value="<?php echo $data['image'] ?>">
            </div>

        

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">Author First Name</label>
                <input type="text" class="form-control" name="author_first_name" id="validationCustom01" value="<?php echo $data['author_first_name'] ?>"required>

            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">author_last_name</label>
                <input type="text" class="form-control" name="author_last_name" id="validationCustom03" required value="<?php echo $author_last_name ?>" >
                <div class="valid-feedback">

                </div>
            </div>


            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">Please chocse Status of Itam:</label>
                <select class="form-select" name="status" id="specificSizeSelect" value="<?php echo $status ?>">
                    <!-- <option selected>Status...</option>
                    <option value="available">available</option>
                    <option value="reserved">reserved</option> -->
                    <?php echo $media_status;?>

                </select>
            </div>



            <button type="submit" class="btn btn-outline-dark mt-4" style="background-color:#025b0e;">Save Changes </button>
            <a href="index.php"> </a>
            <button type="button" class="btn btn-outline-dark mt-4" style="background-color:#fa448c;"><a href="index.php">Back to Home </a></button>
            <input type="hidden" name="Id" value="<?php echo $data['Id'] ?>" />
            <input type="hidden" name="image" value="<?php echo $data['image'] ?>" />

        </form>
    </div>
    <!-- end form -->


    
</body>

</html>