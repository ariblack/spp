   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Add Class</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_class1">

										<div class="control-group">
                                          <div class="controls">
										  <label>Nama Kelas</label>
                                           <input class="input focused"  name="class_name" id="focusedInput" type="text" placeholder = "Nama Kelas" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
										  <label>Uang Kegiatan</label>
                                            <input class="input focused"  name="fee" id="focusedInput" type="text" placeholder = "Uang Kegiatan" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
										  <label>Uang SPP</label>
                                            <input class="input focused"  name="spp" id="focusedInput" type="text" placeholder = "SPP" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
												<button  data-placement="right" title="Click to Simpan" id="save" name="save" class="btn btn-inverse"><i class="icon-save icon-large"></i> Simpan</button>
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
				$("#add_class1").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_class.php",
						data: formData,
						success: function(html){
							$.jGrowl("Kelas Berhail Ditambahkan", { header: 'Tambah Kelas' });
							window.location = 'add_class.php';  
						}
					});
				});
			});
			</script>
					