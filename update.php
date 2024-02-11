<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="Sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php if(isset($_POST['showbtn'])) {
        $conn = mysqli_connect("localhost", "root", "", "php_crud_project") or die("connection _failed");
        $stu_id = $_POST['Sid'];
        $sql = "SELECT * FROM student WHERE Sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("query unsucessfull");

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { ?>
                <form class="post-form" action="updatedata.php" method="post">
                    <div class="form-group">
                        <label for="Sname">Name</label>
                        <input type="hidden" name="Sid" value="<?php echo $row['Sid']; ?>" />
                        <input type="text" name="Sname" value="<?php echo $row['Sname']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="Sadress">Address</label>
                        <input type="text" name="Sadress" value="<?php echo $row['Sadress']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="Sclass">Class</label>
                        <?php
                        $sql1 = "SELECT * FROM studentclass";
                        $result1 = mysqli_query($conn, $sql1) or die("query unsucessfull");

                        if(mysqli_num_rows($result1) > 0) {
                            echo '<select name="Sclass">';
                            while($row1 = mysqli_fetch_assoc($result1)) {
                                $selected = ($row['Sclass'] == $row1['Cid']) ? "selected" : "";
                                echo "<option {$selected} value='{$row1['Cid']}'>{$row1['Cname']}</option>";
                            }
                            echo "</select>";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="Sphone">Phone</label>
                        <input type="text" name="Sphone" value="<?php echo $row['Sphone']; ?>" />
                    </div>
                    <input class="submit" type="submit" value="Update" />
                </form>
            <?php }
        }
        mysqli_close($conn);
    } ?>
</div>
</div>
</body>
</html>
