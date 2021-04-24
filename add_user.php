   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Tambah Pengguna</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_user">
										<div class="control-group">
                                          <div class="controls">
										  <label>Status</label>
										  <select name="status" placeholder = "Status">
												<option></option>
												<option value ="Administrator">Administrator</option>
												<option value ="Normal">Normal</option>
											</select>
                                            
                                          </div>
                                        </div>
										 
										<div class="control-group">
                                          <div class="controls">
										  <label>Nama Awal</label>
                                           <input class="input focused"  name="fname" id="focusedInput" type="text" placeholder = "Nama Awal" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
										  <label>Nama Akhir</label>
                                            <input class="input focused"  name="lname" id="focusedInput" type="text" placeholder = "Nama Akhir" required>
                                          </div>
                                        </div>
										

											<div class="control-group">
                                          <div class="controls">
												<button  data-placement="right" title="Click untuk simpan" id="save" name="save" class="btn btn-inverse"><i class="icon-save icon-large"></i> Simpan</button>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#save').tooltip('show');
															$('#save').tooltip('hide');
														});
														</script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
		<script>
			jQuery(document).ready(function($){
				$("#add_user").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_user.php",
						data: formData,
						success: function(html){
							$.jGrowl("Pengguna berhasil Ditambahkan", { header: 'Pengguna ditambahkan' });
							window.location = 'users.php';  
						}
					});
				});
			});
			</script>
					