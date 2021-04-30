<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php 
		$tipe='normal';
		include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php 
				$jenis='Normal'; 
                $page = "Siswa";
				include('sidebar.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
										<a href="students.php"><i class="icon-arrow-left icon-large"></i> Kembali</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
												<?php
						$query = mysqli_query($conn,"select * from students where student_id = '$get_id'")or die(mysqli_error());
						$row = mysqli_fetch_array($query);
						$cl = $row['class'];
						?>
						<div class="alert alert-success">DATA LENGKAP SISWA</div>
						<div class="span6">
						Nama : <strong><?php echo $row['name']; ?></strong><hr>
						Jenis Kelamin : <strong><?php echo $row['gender']; ?></strong><hr>
						Tempat Lahir : <strong><?php echo $row['pob']; ?></strong><hr>
						Tanggal Lahir : <strong><?php echo $row['dob']; ?></strong><hr>
						Alamat Domisili : <strong><?php echo $row['address']; ?></strong><hr>
						Status Pembayaran : <strong><?php echo $row['status']; ?></strong><hr>
						</div>
						<div class="span5">
						Kelas : <strong><?php echo $row['class']; ?></strong><hr>
						<?php 
						$query2 = mysqli_query($conn,"select * from class where class_name = '$cl'")or die(mysqli_error());
						while ($row1=mysqli_fetch_array($query2)){
						$category = $row1['category'];
						$fee = $row1['fee'];
						}?>
						Kategori Kelas : <strong><?php echo $category; ?></strong><hr>
						Biaya Kelas: <strong><?php echo $fee; ?></strong><hr>
						</div>
<div class="span12">
	<hr>
						<div class="alert alert-success">DATA LOENGKAP ORANGTUA/WALI</div>
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
		<thead>
			<tr>
				<th>Nama Ayah</th>
				<th>Nama Ibu</th>
				<th>Nama Wali</th>
				<th>No Telepon</th>
				<th class="empty"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $row['fathername']; ?></td> 
				<td><?php echo $row['mothername']; ?></td> 
				<td><?php echo $row['guardianname']; ?></td> 
				<td><?php echo $row['tel']; ?></td> 
			</tr>
   
	
		</tbody>
	</table>

</div>
							

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>