<?php require_once "actions/db_connect.php";

if ($_GET["id"]) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM library WHERE Id = {$id}";
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

    <fieldset>
        <div class="mt-3  p-2 text-dark bg-opacity-50" style="background-color:#fd9a7e ;opacity:0.8;">
            <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $image ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td>
                        <h2>Item : <?php echo "$title" ?></h2>
                    </td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this product?</h3>
            <form action="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="image" value="<?php echo $image ?>" />
                <button class="btn btn-danger" type="submit">Yes, please delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back Home!</button></a>
            </form>
        </div>
    </fieldset>


    </div>
    <!-- end form -->

</body>

</html>