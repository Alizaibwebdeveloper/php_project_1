<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="Sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="Sadress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="Sclass">
                <option value="" selected disabled>Select Class</option>
                
              <?php

$conn= mysqli_connect("localhost","root", "", "php_crud_project") or die("connection _failed");

$sql = " SELECT * FROM studentclass";

 $result =mysqli_query($conn, $sql) or die("query unsucessfull");
 while($row= mysqli_fetch_assoc($result)){
    
 
 ?>

<option <?php echo $row['Cid'] ?>><?php echo  $row['Cname'] ?></option>
<?php  } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="Sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
