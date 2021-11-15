<?php include 'blade/header.php'?>

    <div class="subtitle">
        <h2>Edit Donor</h2> 
    </div>
    <?php

        //Incluse Databse connection
        include 'action/config.php';

        //Get ID and assign in variable from Index
        $pid = $_GET['id'];

        //Write SQL schema
        $sql = "SELECT * FROM personinfo WHERE pid = $pid";

        //Write MYSQL Query
        $result = mysqli_query($conn, $sql) or die("Connection Error:". mysqli_error());

        //If There have any data in database then show the table with result otherwise not
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="add-donor" action="action/update.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
            <input type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Blood donor name">
        </div>
        <div class="form-group">
            <label>Blood Group</label>
            <?php
                $sql_groupdata = "SELECT * FROM bloodgroup";
                $result_groupdata = mysqli_query($conn, $sql_groupdata) or die(mysqli_error());

                if(mysqli_num_rows($result_groupdata)>0){

                    echo '<select name="groupid">';
                    
                    while($row_groupdata = mysqli_fetch_assoc($result_groupdata)){
                        if($row['groupid'] == $row_groupdata['gid']){
                            $select = "selected";
                        }
                        else{
                            $select = "";
                        }

                        echo "<option {$select} value='{$row_groupdata['gid']}'>{$row_groupdata['groupname']}</option>";
                    }
                    echo '</select>';
                }
                
            ?>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" placeholder="Address" value="<?php echo $row['address']; ?>">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" placeholder="Phone Number">
        </div>
        <input type="submit" class=submit value="Save">
    </form>

    <?php 
            }
        }
    ?>

