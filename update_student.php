<?php
		include('dbcon.php');
		include('session.php');
		
		$student_id = $_POST['student_id'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$pob = $_POST['pob'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$student_class = $_POST['student_class'];
		$gfname = $_POST['gfname'];
		$gmname = $_POST['gmname'];
		$glname = $_POST['glname'];
		$tel = $_POST['tel'];
		$status = $_POST['status'];
		
		mysqli_query($conn,"update students set name = '$name',
		gender ='$gender',
		pob='$pob',
		dob='$dob',
		address ='$address',
		class ='$student_class',
		fathername ='$gfname',
		mothername ='$gmname',
		guardianname ='$glname',
		tel ='$tel', status ='$status', 
		where student_id = '$student_id'
		")or die(mysqli_error());
		mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Edit Siswa $name')")or die (mysqli_error());
		
		$result1 = mysqli_query($conn,"select * from class where class_name='$student_class'  ")or die(mysqli_error());
		$row1 = mysqli_fetch_array($result1);
		$myfee = $row1['fee'];
		
		if($status=='Full'){
			$status_fee =$myfee;
		}else
		if($status=='Gratis'){
			$status_fee =0;
		}else
		if($status=='Setengah'){
			$status_fee =$myfee/2;
		}else
		if($status=='Seperempat'){
			$status_fee =$myfee/4;
		}
		mysqli_query($conn,"update janmar set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysqli_error());
		mysqli_query($conn,"update aprjun set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysqli_error());
		mysqli_query($conn,"update julsep set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysqli_error());
		mysqli_query($conn,"update octdec set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysqli_error());
		?>
		
		
		<!--
		
		