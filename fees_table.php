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
					<th>Biaya</th>
					<th>Status</th>
					<th>Biaya Dibayar</th>
				
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query2 = mysqli_query($conn,"select * from students where status != 'Gratis' ")or die(mysqli_error());
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['name'];
		$stud_id = $row2['student_id'];
		$status = $row2['status']; 
		$myclass = $row2['class'];
		
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
		<td><?php echo $myclass ; ?></td> 
		<td><?php echo $fee; ?></td> 
		<td><?php echo $status; ?></td> 
		<td><?php echo $status_fee; ?></td> 
	
		<td class="empty" width="250">
		<a data-toggle="modal" href="#<?php echo $stud_id; ?>" id="#<?php echo $stud_id; ?>"class="btn btn-inverse" name=""><i class="icon-money icon-large"></i> Bayar</a>
		<?php include('modal_pay.php'); ?>
		<a data-placement="top" title="Click Untuk Melihat Secara Lengkap" id="view<?php echo $stud_id; ?>" href="view_pay.php<?php echo '?id='.$stud_id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> Lihat Pembayaran</a>
			
		</td>
		</tr>
	  <?php }?>  
	
		</tbody>
	</table>
	</form>