<?php
$stu_id = $_POST['Sid'];
$stu_name = $_POST['Sname'];
$stu_address = $_POST['Sadress'];
$stu_class = $_POST['Sclass'];
$stu_phone = $_POST['Sphone'];

// Connecting to the database
$conn = mysqli_connect("localhost", "root", "", "php_crud_project") or die("Connection failed");

// Inserting data into the database
$sql = "UPDATE student SET Sname = '{$stu_name}', Sadress = '{$stu_address}', Sclass = '{$stu_class}', Sphone = '{$stu_phone}' WHERE Sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");

// Redirecting to index.php after inserting data
header("Location: http://localhost/php_project_crud/index.php");
exit(); // Ensure no further code execution after redirection

// Closing the database connection
mysqli_close($conn);
?>
