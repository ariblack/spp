<?php include('header.php'); ?>
<?php include('session.php'); ?>
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
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Tambah Siswa</div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Kembali" href="students.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
						    </div>
                            <div class="block-content collapse in">						
						<form id="add_student" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4">
											<label>NAMA SISWA :</label>
											<input type="text" class="input-block-level" name="name" placeholder="Nama" required>
											<label>JENIS KELAMIN :</label>
											<select name="gender" class="input-block-level" required>
												<option value="" disabled selected hidden>Jenis Kelamin</option>
												<option>Laki-laki</option>
												<option>Perempuan</option>
											</select>

											<label>TEMPAT LAHIR :</label>
											<input type="text" class="input-block-level" name="pob" placeholder="Tempat Lahir" required>									
											<label>TANGGAL LAHIR :</label>
											<input type="date" class="input-block-level" name="dob" placeholder="Tanggal Lahir" required>
											<label>ALAMAT DOMISILI :</label>
											<textarea rows = "4" class="input-block-level" name = "address" placeholder="Alamat Domisili"></textarea>
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
										<div class="span4">																
											<label>NAMA AYAH :</label>
											<input type="text" class="input-block-level"  name="gfname" placeholder="Nama Ayah" required>
											<label>NAMA IBU :</label>
											<input type="text" class="input-block-level"  name="gmname" placeholder="Nama Ibu" required>
											<label>NAMA WALI :</label>
											<input type="text" class="input-block-level"  name="glname" placeholder="Nama Wali">
											<label>PHONE NUMBER:</label>
											<input type="text" class="input-block-level"  name="tel" placeholder="Nomor HP Aktif" onkeydown='return(event.which >= 48 && event.which <= 57)
											|| event.which ==8 || event.which == 46' maxlength ="16">																							
											<label>KELAS :</label>									
											<select name="student_class" class="input-block-level" required>
												<option value="" disabled selected hidden>Kelas</option>					
												<?php 
													$result = mysqli_query($conn,"select * from class ")or die(mysqli_error());
													while($row = mysqli_fetch_array($result)){
													$myclass = $row['class_name'];			
												?>
												<option value="<?php echo $myclass;?>"> <?php echo $myclass;?> </option>
												<?php }?>
											</select>
											<br>
											<br>
											<button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Simpan </button>			
										</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
										<div class="span4">			
											<label>POTONGAN SPP :</label>
											<select name="status" class="input-block-level" required>
												<option value="" disabled selected hidden>Potongan SPP</option>																
												<option value = "Full">Full</option>
												<option value = "Gratis">Gratis</option>
												<option value = "Setengah">Setengah</option>
												<option value = "Seperempat">Seperempat</option>
											</select>											
										</div>

										<div class="span4">			
											<label>POTONGAN UANG KEGIATAN :</label>
											<select name="status" class="input-block-level" required>
												<option value="" disabled selected hidden>Status Pembayaran</option>																
												<option value = "Full">Full</option>
												<option value = "Gratis">Gratis</option>
												<option value = "Setengah">Setengah</option>
												<option value = "Seperempat">Seperempat</option>

											</select>											
										</div>
						<!--end span 4 -->
						</form>						
			<script>
			jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_stud.php",
						data: formData,
						success: function(html){
							$.jGrowl("Siswa Berhasil Ditambahkan", { header: 'Tambah Siswa' });
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