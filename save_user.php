<?php
include('dbcon.php');
include('session.php');
$status= $_POST['status'];
$fname = $_POST['name'];
$uname = $fname;

mysqli_query($conn,"insert into users (username,password,name,status) values('$uname','12345','$name','$status')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add User $uname')")or die(mysqli_error());
?>