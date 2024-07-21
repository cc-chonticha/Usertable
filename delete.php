<?php

include("functions.php");
if (isset($_GET['del'])) {
    $UserID = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->delete($UserID);
    if ($sql) {
        echo "<script>alert('Record Deleted Successfully!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}