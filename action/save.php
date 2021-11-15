<?php
    $name = $_POST['name'];
    $groupname = $_POST['groupname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    include 'config.php';
    
    $sql = "INSERT INTO personinfo (name, groupid, address, phone) 
            VALUES ('$name', '$groupname', '$address', '$phone')";

    $result = mysqli_query($conn, $sql) or die("Connection Failed");

    header("Location: ../index.php");
    mysqli_close($conn);
    
?>