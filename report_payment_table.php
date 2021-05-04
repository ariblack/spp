	<?php include('dbcon.php'); ?>
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Cetak Daftar</a> 
	 
	</div>
<br><br>
		<thead>
		<tr>
					<th>Nama Siswa</th>
					<th>Kelas</th>
					<th>Status</th>
					<th>Biaya yang Harus Dibayar</th>
					<th>Jan-Mar</th>
					<th>Apr-Jun</th>
					<th>Jul-Sep</th>
					<th>Okt-Des</th>
				
		</tr>
		</thead>
		<tbody>
		<?php
		$query2 = mysqli_query($conn,"select * from students,janmar,aprjun,julsep,octdec where students.status != 'exempted' AND students.student_id=janmar.student_id AND students.student_id=aprjun.student_id AND students.student_id=julsep.student_id AND students.student_id=octdec.student_id   ")or die(mysqli_error());
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['name'];
		$stud_id =$row2['student_id'];
		$status =$row2['status']; 
		$myclass =$row2['class'];
		
		
		$query4 = mysqli_query($conn,"select * from janmar where student_id='$stud_id'")or die(mysqli_error());
		$row4= mysqli_fetch_array($query4);
		$myjanmar=$row4['fee'];
		
		
		$query5 = mysqli_query($conn,"select * from aprjun where student_id='$stud_id'")or die(mysqli_error());
		$row5= mysqli_fetch_array($query5);
		$myaprjun=$row5['fee'];
		
		$query6 =mysqli_query($conn,"select * from julsep where student_id='$stud_id'")or die(mysqli_error());
		$row6= mysqli_fetch_array($query6);
		$myjulsep=$row6['fee'];
		
		$query7 =mysqli_query($conn,"select * from octdec where student_id='$stud_id'")or die(mysqli_error());
		$row7= mysqli_fetch_array($query7);
		$myoctdec=$row7['fee'];
		
		$query3 = mysqli_query($conn,"select * from class where class_name='$myclass' ")or die(mysqli_error());
		while($row3= mysqli_fetch_array($query3)){
		$fee = $row3['fee'];
		
		}		
		if($status=='Full'){
			$status_fee =$fee;
		}else
		if($status=='Gratis'){
			$status_fee =0;
		}else
		if($status=='Setengah'){
			$status_fee =$fee/2;
		}else
		if($status=='Seperempat'){
			$status_fee =$fee/4;
		}
		
		?>
		<tr>
		<td><?php echo $student_name; ?></td> 
		<td><?php echo $myclass; ?></td> 
		<td><?php echo $status; ?></td> 
		<td><?php echo $status_fee; ?></td> 
		<td><?php echo $myjanmar; ?></td> 
		<td><?php echo $myaprjun; ?></td> 
		<td><?php echo $myjulsep; ?></td> 
		<td><?php echo $myoctdec; ?></td> 
		</tr>
	  <?php }?>  
	
		</tbody>
	</table>
	</form>