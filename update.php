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
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
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
            <input type="hidden" name="Id" value="<?php echo $data['Id'] ?>" />
            <input type="hidden" name="image" value="<?php echo $data['image'] ?>" />

        </form>
    </div>
    <!-- end form -->


    <!-- <fieldset>
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table caption-top mt-2  text-dark bg-opacity-75" style="background-color:#fd9a7e ;opacity:0.8;" font-family: 'Dancing Script' , cursive;">
            <tr>
                    <th>Id</th>
                    <td><input class="form-control" type="number" name="Id" value="<?php echo '$Id' ?>"  /> </td>
                </tr>    
            <tr>
                    <th>Type</th>
                    <td><input class="form-control" type="text" name="type" value="<?php echo '$type' ?>"  /> </td>
                </tr>
                <tr>
                        <th>Name</th>
                        <td><input class="form-control" type="text"  name="name" placeholder ="Product Name" value="<?php echo $type ?>"  /></td>
                    </tr>

                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type= "number" name="price" step="any"  placeholder="Price" value ="<?php echo $price ?>" /></td>
                    </tr>

                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>

                    <tr>
                        <th>Name</th>
                        <td><input class="form-control" type="text"  name="name" placeholder ="Product Name" value="<?php echo $name ?>"  /></td>
                    </tr>


                <tr>
                    <th>Title</th>
                    <td><input class="form-control" type="text" name="title" "<?php echo '$title' ?>"></td>
                </tr>

                <tr>
                    <th>short description</th>
                    <td><input class="form-control" type="text" name="type" value="<?php echo $short_description ?>"> </td>
                </tr>

                <tr>
                    <th>Picture</th>
                    <td><input class="form-control" type="file" name="image" "<?php echo '$image' ?>"></td>
                </tr>
                <tr>



                <tr>
                    <th>ISBN code</th>
                    <td><input class="form-control" type="text" name="ISBN_code" "<?php echo '$ISBN_code' ?>"></td>
                </tr>

                <tr>
                    <th>Author First Name</th>
                    <td><input class="form-control" type="text" name="author_first_name" "<?php echo '$author_first_name' ?>"></td>
                </tr>

                <tr>
                    <th>Author Lirst Name</th>
                    <td><input class="form-control" type="text" name="author_last_name" "<?php echo '$author_last_name' ?>"></td>
                </tr>


                <tr>
                    <th>Publisher Name</th>
                    <td><input class="form-control" type="text" name="publisher_name" "<?php echo '$publisher_name' ?>"></td>
                </tr>

                <tr>
                    <th>Publisher Address</th>
                    <td><input class="form-control" type="text" name="publisher_address" "<?php echo '$publisher_address' ?>"></td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td><input class="form-control" type="text" name="status" "<?php echo '$status' ?>"></td>
                </tr>

           
                <input type="hidden" name="Id" value="<?php echo $data['Id'] ?>" />
                <input type="hidden" name="image" value="<?php echo $data['image'] ?>" />
                <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset> -->
</body>

</html>