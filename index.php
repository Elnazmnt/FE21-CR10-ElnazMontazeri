<?php require_once "actions/db_connect.php";
$sql = "SELECT * FROM library";
$result = mysqli_query($connect, $sql);
$tbody = '';

if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "<tr>

       <td>" . $row['Id'] . "</td>
       <td>" . $row['type'] . "</td>
       <td>" . $row['title'] . "</td>
       <td><img class='img-thumbnail' src='pictures/" . $row['image'] . "'> </td>
       <td>" . $row['author_first_name'] . "</td>
       <td>" . $row['author_last_name'] . "</td>
       <td>" . $row['status'] . "</td>
       <td><a href='update.php?id=" . $row['Id'] . "'><button type='button' class='btn btn-outline'style='background-color:#02a0da'>Edit</button></a>
           <a href='delete.php?id=" . $row['Id'] . "'><button type='button' class='btn btn-outline'style='background-color:#a83b24'>Delete</button></a></td>
            </tr>";
    };
} else {
    $tbody =   "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Library web application</title>
    <?php require_once "components/boot.php";    ?>
</head>

<body style="background-image: url('photo.jpg');background-attachment: fixed; background-size: cover; " class="container">
    <div class="mt-4">
        <a href="create.php">
            <button type="button" class="btn btn-lg" style="background-color: #6e9a44;font-family: 'Dancing Script', cursive;">Add New Item</button>
        </a>
    </div>
    <!-- start table    -->

    <table class="table caption-top mt-2  text-dark bg-opacity-75" style="background-color:#fd9a7e ;opacity:0.8;" font-family: 'Dancing Script' , cursive;">
        <caption>
            <h2 style="color: black;font-family: 'Dancing Script', cursive;">List of Media<h2>
        </caption>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Type</th>
                <th scope="col">Title</th>
                <th scope="col" style="width: 90px;">Image</th>
                <th scope="col">Author Name</th>
                <th scope="col">Author Last Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?= $tbody; ?>

        </tbody>
    </table>
    <!-- end table    -->
</body>

</html>