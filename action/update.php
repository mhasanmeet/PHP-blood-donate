<?php
    
    // Get the data and assign in variable
    $pid = $_POST['pid']; //Get pid from edit donor from section
    $name = $_POST['name'];
    $groupid = $_POST['groupid'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    //Get database connection
    include 'config.php';

    //Write SQL Schema
    $sql = "UPDATE personinfo SET name='$name', groupid='$groupid', address='$address', 
            phone='$phone' WHERE pid='$pid'";

    //Write SQL query
    $result = mysqli_query($conn, $sql) or die("Connection Error:". mysqli_connect_error());

  
    //After Insertion move into index.php
    header("Location: ../index.php");
    
    // Close MYSQL connection
    mysqli_close($conn);
?>