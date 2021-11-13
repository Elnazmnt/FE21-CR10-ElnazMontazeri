<?php require_once "actions/db_connect.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
    <?php require_once "components/boot.php"; ?>
</head>

<body style="background-image: url('photo.jpg');background-attachment: fixed; background-size: cover; position: relative;" class="container ">
    
        <h2 style="color: black;font-family: 'Dancing Script', cursive;" class="mt-4">Add New Itam: <h2>
                <!-- start form -->
                <div class="mt-3  p-2 text-dark bg-opacity-50" style="background-color:#fd9a7e ;opacity:0.8;">
                <form action ="actions/a_create.php" method= "post"  enctype="multipart/form-data">
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
                        <label for="validationCustom01" class="form-label mt-2 fs-3">Author Last Name</label>
                        <input type="text" class="form-control" name="author_last_name"  id="validationCustom03" required>
                        <div class="valid-feedback">
                            Looks good!
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



                    <button type="submit" class="btn btn-outline-dark mt-4" style="background-color:#025b0e;">Insert Item </button>
                    <a href="index.php">
                    <button type="button" class="btn btn-outline-dark mt-4" style="background-color:#fa448c;">Home</button>
                    </a>
                </form>
</div>
                <!-- end form -->
   
</body>

</html>