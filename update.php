<?php
include_once("functions.php");

$updatedata = new DB_con();

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['Name'];
    $lname = $_POST['Surname'];
    $uname = $_POST['Username'];
    $ps = $_POST['Password'];
    $st = $_POST['Status'];


    $sql = $updatedata->update($id, $fname, $lname, $uname, $ps, $st);
    if ($sql) {
        echo "<script>alert('Updated Successfully!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href='update.php?id=" . $updateid . "'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">

            <h1 class="mt-5">Update Page</h1>
            <hr>
            <?php
        $updateid = $_GET['id'];
        $updateuser = new DB_con();
        $sql = $updateuser->fetchonerecord($updateid);
        while ($row = mysqli_fetch_array($sql)) {
        ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="UserID" class="form-label">Id</label>
                    <input type="text" class="form-control" name="UserID" value="<?php echo $row['UserID']; ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Surname" class="form-label">SurName</label>
                    <input type="text" class="form-control" name="Surname" value="<?php echo $row['Surname']; ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="Username" class="form-label">UserName</label>
                    <input type="text" class="form-control" name="Username" value="<?php echo $row['Username']; ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="Password" value="<?php echo $row['Password']; ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="Status" class="form-label">Status</label>
                    <input type="text" class="form-control" name="Status" value="<?php echo $row['Status']; ?>"
                        required>
                </div>
                <button type="submit" name="update" class="btn btn-success">Update</button>
            </form>
            <?php } ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>