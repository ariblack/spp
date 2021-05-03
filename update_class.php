<?php		
include('dbcon.php');
include('session.php');
$class_id = $_POST['class_id'];
$class_name = $_POST['class_name'];
$fee = $_POST['fee'];
$spp = $_POST['spp'];

mysqli_query($conn,"update class set class_name = '$class_name', fee = '$fee', spp = '$spp'  where class_id = '$class_id' ")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Kelas $class_name')")or die(mysqli_error());
?>

