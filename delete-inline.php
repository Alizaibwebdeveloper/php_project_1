<?php

 echo $stu_id = $_GET['id'];

 $conn = mysqli_connect("localhost", "root", "", "php_crud_project") or die("connection _failed");
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("query unsucessfull");


?>