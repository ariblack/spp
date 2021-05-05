	<?php
include('dbcon.php');
include('session.php');
							
$st_id = $_POST['student_id'];
$st_fee = $_POST['status_fee'];
$st_period = $_POST['period'];
$st_receipt=$_POST['receipt'];

mysqli_query($conn,"update $st_period set fee='$st_fee' where student_id='$st_id'")or die(mysqli_error()); 
mysqli_query($conn,"insert into payment_made(student_id,period,amount,date_of_payment,receipt) values('$st_id','$st_period','$st_fee',NOW(),'$st_receipt')")or die(mysqli_error());

echo('student_id = '.$st_id);
echo('status_fee = '.$st_fee);
echo('period = '.$st_period);
echo('receipt = '.$st_receipt);
?>

<script>
window.location = "fees.php";
</script>  					
