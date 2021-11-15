<?php include 'blade/header.php';

    if(isset($_POST['deletebtn'])){
    include 'action/config.php';
    $pid = $_POST['pid'];

    $sql = "DELETE FROM personinfo WHERE pid = $pid";
    $result = mysqli_query($conn, $sql) or die("Connection Failed:");

    header("Location: ../index.php");
    mysqli_close($conn);

    }
        
?>

<div class="subtitle">
    <h2>Delete Donor</h2> 
</div>
<form class="donorID" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label>ID</label>
        <input type="text" name="pid" class="form-group-input" placeholder="Blood donor ID">
    </div>
    <input type="submit" class="submit" name="deletebtn" value="delete">
</form>

