<?php
    $pid = $_GET['id'];

    include 'config.php';
    $sql = "DELETE FROM personinfo WHERE pid = $pid";
    $result = mysqli_query($conn, $sql) or die("Connection Failed");

    header("Location: ../index.php");
    mysqli_close($conn);
?>