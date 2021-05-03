   <div class="row-fluid">
   <a href="add_class.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Tambah Kelas</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Kelas</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($conn,"select * from class where class_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
								<form method="post" id="update_class1_form">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['class_id']; ?>" name="class_id" id="focusedInput" type="hidden"  required>
                                            <input class="input focused" value="<?php echo $row['class_name']; ?>" name="class_name" id="focusedInput" type="text" placeholder = "Nama Kelas" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['fee']; ?>"  name="fee" id="focusedInput" type="text" placeholder = "Uang Kegiatan" required>
                                          </div>
                                        </div>
									
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['spp']; ?>"  name="spp" id="focusedInput" type="text" placeholder = "Uang SPP" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i> Simpan</button>

                                          </div>
                                        </div>
                                </form>
								
													<script>
			jQuery(document).ready(function($){
				$("#update_class1_form").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_class.php",
						data: formData,
						success: function(html){
							$.jGrowl("Kelas Berhasil di Edit", { header: 'Edit Kelas' });
							window.location = 'add_class.php';  
						}
					});
				});
			});
			</script>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
		
					
		