	<?php include('dbcon.php'); ?>
	<form action="delete_stud.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Cetak Daftar</a> 
	
	</div>
	<br><br>
		<thead>
		<tr>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Kelas</th>
					<th>Uang Kegiatan</th>
					<th>Status</th>
					<th>No HP</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query = mysqli_query($conn,"select * from students ")or die(mysqli_error());
		while($row = mysqli_fetch_array($query)){
			
		$myclass=$row['class'];	
		$id = $row['student_id'];
		
		
		$query2=mysqli_query($conn,"select * from class where class_name='$myclass' ")or die(mysqli_error());
		while($row2 = mysqli_fetch_array($query2)){
		$class_fee =$row2['fee'];
		}	
		?>
		<tr>
		<td><?php echo $row['name'];?></td> 
		<td><?php echo $row['gender']; ?></td> 
		<td><?php echo $row['class']; ?></td> 
		<td><?php echo $class_fee; ?></td> 
		<td><?php echo $row['status']; ?></td>
		<td><?php echo $row['tel']; ?></td>
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>