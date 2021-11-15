<?php include 'blade/header.php'?>
    
    <div class="subtitle">
        <h2>Edit and Update Donor</h2> 
    </div>
    <form class="donorID" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label>ID</label>
            <input type="text" name="pid" class="form-group-input" placeholder="Blood donor ID">
        </div>
        <input type="submit" class="submit" name="showbtn" value="show">
    </form>
    <?php
        if(isset($_POST['showbtn'])){
            include 'action/config.php';

            $pid = $_POST['pid'];
            $sql = "SELECT * FROM personinfo WHERE pid = $pid";
            $result = mysqli_query($conn, $sql) or die("Connection Error");
            
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){              
    ?>
    <form class="donordetails">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
            <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-group-input" placeholder="Name">
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
            
            <!-- <select value="">
                <option value="" selected disabled>Select Blood Group</option>
                <option vlaue="">A+</option>
                <option>A-</option>
                <option>B+</option>
            </select> -->
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-group-input" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-group-input" placeholder="Phone Number">
        </div>
        <input type="submit" class=submit value="Save">
    </form>

    <?php       
                 }
            }
        }
    ?>

    