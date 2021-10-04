<?php
$stu_id=$_GET['id'];

include'config.php';
$sql = "DELETE FROM student WHERE sid={$stu_id}";
$result = mysqli_query($conn, $sql) or die("Unsuccessful Query");

header("Location: http://localhost/crud_html/CRUD_WEB/index.php");
mysqli_close($conn);
?>