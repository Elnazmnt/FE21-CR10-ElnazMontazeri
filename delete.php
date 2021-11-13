<?php
require_once "actions/db_connect.php";

if ($_GET["Id"]) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM library WHERE Id = {$Id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);

        $type = $data['type'];
        $title = $data['title'];

        $image = $data['image'];

        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];

        $status = $data['status'];

        // } else {
        //     header("location: error.php");
    }
    //mysqli_close($connect);
    //  } else {
    //      header("location: error.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete Item</title>
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
        <!-- <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <div class="col-md-4 ">
                <label for="validationCustom01" class="form-label mt-2 fs-3">Please chocse type of Itam:</label>
                <select class="form-select" name="type" id="specificSizeSelect">
                    <option selected>Type..</option>
                    <option value="1">Book</option>
                    <option value="2">CD</option>
                    <option value="3">DVD</option>
                </select>
            </div>



            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">Title</label>
                <input type="text" class="form-control" name="title" id="validationCustom01" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">choose Image</label>
                <input class="form-control" type="file" name="image" id="formFile">
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">Author Name</label>
                <input type="text" class="form-control" name="author_first_name" id="validationCustom01" required>

            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">author_last_name</label>
                <input type="text" class="form-control" name="author_last_name" id="validationCustom03" required value="<?php echo $author_last_name ?>" >
                <div class="valid-feedback">

                </div>
            </div>


            <div class="col-md-4">
                <label for="validationCustom01" class="form-label mt-2 fs-3">Please chocse Status of Itam:</label>
                <select class="form-select" name="status" id="specificSizeSelect">
                    <option selected>Status...</option>
                    <option value="1">available</option>
                    <option value="2">reserved</option>

                </select>
            </div>



            <button type="submit" class="btn btn-outline-dark mt-4" style="background-color:#025b0e;">Save Changes </button>
            <a href="index.php">
                <button type="button" class="btn btn-outline-dark mt-4" style="background-color:#fa448c;">Back to Home</button>
            </a>
           

        </form> -->


        <fieldset>
            <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='image/<?php echo $image ?>' alt="<?php echo $image ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo "$title" ?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this product?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="Id" value="<?php echo $Id ?>" />
                <input type="hidden" name="image" value="<?php echo $image ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
            </form>
        </fieldset>


    </div>
    <!-- end form -->

</body>

</html>