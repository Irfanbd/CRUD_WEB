<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];


include'config.php';
                $sql = "INSERT INTO student (sname,saddress,sclass,sphone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}'
                ,'{$stu_phone}') ";
                
               $result = mysqli_query($conn,$sql) or die("Unsuccessful Query");
header("Location: http://localhost/crud_html/CRUD_WEB/index.php");
mysqli_close($conn);

?>