	<?php include('dbcon.php'); ?>
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Cetak Daftar</a> 
	</div>
	<br><br>
	<thead>
		<tr>
					<th>Nama Lengkap</th>
					<th>Kelas</th>
					<th>Uang Kegiatan</th>
					<th>Status</th>
					<th>Biaya yang Harus Dibayar</th>
					<!-- <th>Dibayar</th>
					<th>Kurang</th>	 -->													
		</tr>
		</thead>
		<tbody>
		
		<?php
		
		if($mycriteria=='paid'){
		$query2 = mysqli_query($conn,"select * from students,".$myperiod." where students.class ='$myclass' AND ".$myperiod.".student_id = students.student_id AND ".$myperiod.".fee != '0'")or die(mysqli_error());
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['name'];
		$stud_id =$row2['student_id'];
		$status =$row2['status']; 
		$myclass2 =$row2['class'];
		
		$query3 = mysqli_query($conn,"select * from class where class_name='$myclass2' ")or die(mysqli_error());
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
		
		}?>
		
		<tr>
		<td><?php echo $student_name;?></td> 
		<td><?php echo $myclass; ?></td> 
		<td><?php echo $fee; ?></td> 
		
		<td><?php echo $status; ?></td> 
		<td><?php echo $status_fee; ?></td> 
	

		</tr>
		<?php }?><?php 
		}else
		if($mycriteria=='not_paid'){
		$query2 = mysqli_query($conn,"select * from students,".$myperiod." where students.class ='$myclass' AND ".$myperiod.".student_id = students.student_id  AND ".$myperiod.".fee = '0'")or die(mysqli_error());
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['name'];
		$stud_id =$row2['student_id'];
		$status =$row2['status']; 
		$myclass2 =$row2['class'];
		
		$query3 = mysqli_query($conn,"select * from class where class_name='$myclass2' ")or die(mysqli_error());
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
		
		}?>
		
		<tr>
		<td><?php echo $student_name;?></td> 
		<td><?php echo $myclass; ?></td> 
		<td><?php echo $fee; ?></td> 
		
		<td><?php echo $status; ?></td> 
		<td><?php echo $status_fee; ?></td> 
	

		</tr>
		<?php }}?>
			
		
		
		
		
		
		</tbody>
	</table>
	</form>