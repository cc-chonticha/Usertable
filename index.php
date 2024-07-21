<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>

        <div class="container">
            <h1 class="mt-5">Infomation Page</h1>

            <a href="insert.php" class="btn btn-success">Go to insert</a>
            <hr>
            <table id="mytable" class="table table-bordered table-striped">
                <thead>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Price</th>
                    <th>action</th>
                </thead>

                <tbody>
                    <?php
                include_once("functions.php");
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while ($row = mysqli_fetch_array($sql)) {
                    header("Location: home.php");
                ?>
                    <tr>
                        <td><?php echo $row['UserID']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Surname']; ?></td>
                        <td><?php echo $row['Username']; ?></td>
                        <td><a href="update.php?id=<?php echo $row['UserID']; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?del=<?php echo $row['UserID']; ?>" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                    <?php
                }
                ?>
                </tbody>

            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


    </body>

</html>