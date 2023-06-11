<?php
// Include config file
require_once "../config.php";
// Prepare a select statement
$sql = "SELECT * FROM products WHERE id = '{$_GET["id"]}'";
// echo $sql;
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) == 0) {
    // URL doesn't contain valid id parameter. Redirect to error page
    header("location: ../error.php");
    exit();
}
/* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Record</title>
    <?php include('../layouts/products-style.php'); ?>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the products record.</p>
                    <form action="update.php" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $row["title"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"><?= $row["description"] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="<?= $row["price"] ?>">
                        </div>
                        <input type="hidden" name="id" value="<?= $row["id"] ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('../layouts/products-script.php'); ?>
</body>

</html>