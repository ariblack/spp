<?php
	include('dbcon.php');
	include('session.php');
$class_name = $_POST['class_name'];
$fee = $_POST['fee'];
$spp = $_POST['spp'];

mysqli_query($conn,"insert into class (class_name,fee,spp) values('$class_name','$fee','$spp')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Tambah Kelas $class_name')")or die(mysqli_error());
?>