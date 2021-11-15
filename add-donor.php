<?php include 'blade/header.php'?>

    <div class="subtitle">
        <h2>Add Donor</h2> 
    </div>
    <form class="add-donor" action="action/save.php" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Blood donor name">
        </div>
        <div class="form-group">
            <label>Blood Group</label>
            <select name="groupname">
                <option selected disabled>Select Blood Group</option>
                <?php
                    include 'action/config.php';

                    $sql = "SELECT * FROM bloodgroup";
                    $result = mysqli_query($conn, $sql) or die("Connection Failed");
                    
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <option value="<?php echo $row['gid']; ?>"><?php echo $row['groupname']; ?></option>
                    <?php
                    }
                ?>
                <!-- <option vlaue="">A+</option>
                <option>A-</option>
                <option>B+</option> -->
            </select>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" placeholder="Address">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Phone Number">
        </div>
        <input type="submit" class=submit value="Save">
    </form>
    </div>
