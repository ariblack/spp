   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit User </div>
                            </div>
							<?php
							$query = mysqli_query($conn,"select * from users where user_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                      <div class="controls">
										  <label>Status</label>
										  <select name="status" placeholder = "Status">
												<option value ="Administrator" <?php if($row['status']=='Administrator') echo 'selected="selected"';?>>Administrator</option>
												<option value ="Normal" <?php if($row['status']=='Normal') echo 'selected="selected"';?>>Normal</option>
											</select>
                                            
                                          </div>
                                        </div>
								
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fname" value="<?php echo $row['firstname']; ?>" class="input focused" id="focusedInput" type="text" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="lname" value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" required>
                                          </div>
                                        </div>
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['update'])){
$status= $_POST['status'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $fname.'.'.$lname;

mysqli_query($conn,"update users set username = '$uname',firstname ='$fname', lastname='$lname',status='$status' where user_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "users.php";
</script>
<?php

}
?>