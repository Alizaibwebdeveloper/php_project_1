<?php include 'header.php'; ?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "php_crud_project") or die("connection _failed");
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("query unsucessfull");
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table cellpadding="7px">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['Sid'] ?></td>
                        <td><?php echo  $row['Sname'] ?></td>
                        <td><?php echo $row['Sadress'] ?></td>
                        <td><?php echo $row['Cname'] ?></td>
                        <td><?php echo $row['Sphone'] ?></td>
                        <td>
                            <a href='edit.php?id=<?php echo $row['Sid'] ?>'>Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row['Sid'] ?>'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "<h2>No Record found!</h2>";
    }
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
