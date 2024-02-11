<?php
// Retrieving form data
$stu_name = isset($_POST['Sname']) ? $_POST['Sname'] : '';
$stu_address = isset($_POST['Sadress']) ? $_POST['Sadress'] : '';
$stu_class = isset($_POST['Sclass']) ? $_POST['Sclass'] : '';
$stu_phone = isset($_POST['Sphone']) ? $_POST['Sphone'] : '';

// Connecting to the database
$conn = mysqli_connect("localhost", "root", "", "php_crud_project") or die("Connection failed");

// Inserting data into the database
$sql = "INSERT INTO student (Sname, Sadress, Sclass, Sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");

// Redirecting to index.php after inserting data
header("Location : http://localhost/php_project_crud");
// Closing the database connection
mysqli_close($conn);
?>
