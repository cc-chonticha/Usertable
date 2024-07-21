<?php
include_once("functions.php");
$insertdata = new DB_con();
if (isset($_POST['insert'])) {
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['surname'];
    $uname = $_POST['username'];
    $ps = $_POST['password'];
    $st = $_POST['status'];

    $sql = $insertdata->insert($id, $fname, $lname, $uname, $ps, $st);
    if ($sql) {
        echo "<script>alert('Record Inserted Successfully!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href='insert.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <a href="index.php" class="btn btn-primary mt-3">Go back</a>
            <hr>
            <h1 class="mt-5">Insert Page</h1>
            <hr>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id" class="form-label">Product ID</label>
                    <input type="text" class="form-control" name="id">

                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="firstname" required>
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Product Category</label>
                    <input type="text" class="form-control" name="surname" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Price</label>
                    <input type="text" class="form-control" name="username" required>
                </div>

        </div>
        <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </body>

</html>