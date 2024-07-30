<?php
include 'db_conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM `graduates` WHERE `id` = '$id'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed" . mysqli_error($conn));
    } else {
        header('location: home.php?delete_msg=The data has been deleted successfully.');
        exit();
    }
}
?>
