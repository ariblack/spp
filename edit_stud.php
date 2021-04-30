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
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Siswa</div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Kembali" href="students.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
						    </div>
                            <div class="block-content collapse in">
							<?php
								$query = mysqli_query($conn,"select * from students where student_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
							?>						
						<form id="update_student" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4">
											<input type="hidden" value="<?php echo $row['student_id']; ?>" class="input-block-level"  name="student_id" required>																
											<label>STATUS PEMBAYARAN :</label>
											<select name="status" class="span5" required>
													<option value = "Full" <?php if($row['status']=='Full') echo 'selected="selected"';?>>Full</option>
													<option value = "Gratis" <?php if($row['status']=='Gratis') echo 'selected="selected"';?>>Gratis</option>
													<option value = "Setengah" <?php if($row['status']=='Setengah') echo 'selected="selected"';?>>Setengah</option>
													<option value = "Seperempat" <?php if($row['status']=='Seperempat') echo 'selected="selected"';?>>Seperempat</option>
												</select>
											<label>NAMA :</label>
											<input type="text" value="<?php echo $row['name']; ?>" class="input-block-level" name="name" required>
											<label>JENIS KELAMIN :</label>
												<select name="gender" class="span5" required>
													<option value = "Laki-laki" <?php if($row['gender']=='Laki-laki') echo 'selected="selected"';?>>Laki-laki</option>
													<option value = "Perempuan" <?php if($row['gender']=='Perempuan') echo 'selected="selected"';?>>Perempuan</option>
												</select>
											<label>TEMPAT LAHIR :</label>
											<input type="text" class="input-block-level" name="pob" value="<?php echo $row['pob']; ?>" required>									
											<label>TANGGAL LAHIR :</label>
											<input type="date" class="input-block-level" name="dob" value="<?php echo $row['dob']; ?>" required>
											<label>ALAMAT DOMISILI :</label>
											<textarea rows = "4" class="input-block-level" name = "address"><?php echo $row['address']; ?></textarea>
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
										<div class="span4">																
											<label>NAMA AYAH :</label>
											<input type="text" class="input-block-level"  name="gfname" value="<?php echo $row['fathername']; ?>" required>
											<label>NAMA IBU :</label>
											<input type="text" class="input-block-level"  name="gmname" value="<?php echo $row['mothername']; ?>" required>
											<label>NAMA WALI :</label>
											<input type="text" class="input-block-level"  name="glname" value="<?php echo $row['guardianname']; ?>">
											<label>NOMOR HP :</label>
											<input type="text" class="input-block-level"  name="tel" value="<?php echo $row['tel']; ?>" onkeydown='return(event.which >= 48 && event.which <= 57)
											|| event.which ==8 || event.which == 46' maxlength ="16">																							
											<label>KELAS :</label>									
											<select name="student_class" class="span5" required>
												<?php 
													$result = mysqli_query($conn,"select * from class ")or die(mysqli_error());
													while($row1 = mysqli_fetch_array($result)){
													$myclass = $row1['class_name'];			
												?>
												<option value="<?php echo $myclass;?>" <?php if($row['class']==$myclass) echo 'selected="selected"';?>> <?php echo $myclass;?> </option>
												<?php }?>
											</select>
											<br>
											<br>
											<button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Simpan </button>			
										</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">			
																			
						</div>
						<!--end span 4 -->
						</form>						
			<script>
			jQuery(document).ready(function($){
				$("#update_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_student.php",
						data: formData,
						success: function(html){
							$.jGrowl("Siswa Berhasil Diedit "+html, { header: 'Edit Siswa' });
							window.location = 'students.php';  
						}
					});
				});
			});
			</script>
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