<?php include 'blade/header.php'?>

    <div class="subtitle">
        <h2>Delete Donor</h2> 
    </div>
    <form class="donorID" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>ID</label>
            <input type="text" name="pid" class="form-group-input" placeholder="Blood donor ID">
        </div>
        <input type="submit" class="submit" name="showbtn" value="show">
    </form>
    <?php
        
    ?>
    <form class="donordetails">
        <div class="form-group">
            <label>Blood Group</label>
            <select value="">
                <option value="" selected disabled>Select Blood Group</option>
                <option vlaue="">A+</option>
                <option>A-</option>
                <option>B+</option>
            </select>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="" class="form-group-input" placeholder="Address">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="" name="" class="form-group-input" placeholder="Phone Number">
        </div>
        <input type="submit" class=submit value="Save">
    </form>
    </div>

