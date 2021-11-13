<?php include 'blade/header.php'?>

    <div class="subtitle">
        <h2>Add Donor</h2> 
    </div>
    <form class="add-donor" action="" method="">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="" placeholder="Blood donor name">
        </div>
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
            <input type="text" name="" placeholder="Address">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="" name="" placeholder="Phone Number">
        </div>
        <input type="submit" class=submit value="Save">
    </form>
    </div>

<?php include 'blade/footer.php'?>