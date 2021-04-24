
		<?php
		include('dbcon.php');
		include('session.php');
		
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
		
		mysqli_query($conn,"insert into students(name,gender,pob,dob,address,class,fathername,mothername,guardianname,tel,status)values ('$name','$gender','$pob','$dob','$address','$student_class','$gfname','$gmname','$glname','$tel','$status')")or die(mysqli_error());
		
		mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Tambah Siswa $name')")or die (mysqli_error());
		
		$result = mysqli_query($conn,"select * from students where name='$name'AND tel='$tel' ")or die(mysqli_error());
		while($row = mysqli_fetch_array($result)){
				$student_id = $row['student_id'];
		}
		$result1 = mysqli_query($conn,"select * from class where class_name='$student_class'  ")or die(mysqli_error());
		while($row1 = mysqli_fetch_array($result1)){
				$myfee = $row1['fee'];
		}
		
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
		
		mysqli_query($conn,"insert into janmar (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($conn,"insert into aprjun (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($conn,"insert into julsep (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($conn,"insert into octdec (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		?>