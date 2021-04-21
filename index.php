<?php include('header.php'); ?>
  <body id="login">
    <div class="container">
	<?php 
		$tipe='index';
		include('navbar.php'); 
	?>
	<img src="images/ban.png" class="img-polaroid">
    <form id="login_form" class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Silahkan Masuk</h3>
        <input type="text" class="input-block-level" id="username" name="username" placeholder="Nama Pengguna" required>
        <table>
		<tr>
		<td>
		<input type="password" class="input-block-level" id="password" name="password" placeholder="Kata Sandi" required>
		</td>
		<td style="vertical-align:center">
		<!-- An element to toggle between password visibility -->
		<div id="tombol">
		<a href="#" id="tampil" name="tampil" onclick="myFunction()" class="icon-eye-open icon-large" style="cursor:pointer"></a>
		</div>
		
		<!-- <i></i></a> -->
		</td></tr>
		</table>
        <button data-placement="top" title="Click untuk Login" id="login1" name="login" class="btn btn-success" type="submit"><i class="icon-signin icon-large"></i> Masuk</button>
		                            <script type="text/javascript">
										$(document).ready(function(){
											$('#login1').tooltip('show');
											$('#login1').tooltip('hide');

										});

										function myFunction() {
  											var x = document.getElementById("password");
  											
											if (x.type === "password") {
    											x.type = "text";
												$("#tombol").html("<a href='#' id='tampil' name='tampil' onclick='myFunction()' class='icon-eye-close icon-large' style='cursor:pointer'></a>");
											} else {
    											x.type = "password";
												$("#tombol").html("<a href='#' id='tampil' name='tampil' onclick='myFunction()' class='icon-eye-open icon-large' style='cursor:pointer'></a>");
  											}
										}
									</script>
	</form>
									<script>
												jQuery(document).ready(function(){
												jQuery("#login_form").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "post",
															url: "login.php",
															data: formData,
															success: function(html){
															 if (html == 'true_admin'){
																$.jGrowl("Loading Mohon Tunggu......", { sticky: true });
																$.jGrowl("Selamat Datang di SISTEM PEMBAYARAN SPP & UK SMK PEMBANGUNAN SURABAYA", { header: 'Akses Diterima' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
															}else
															if (html == 'true_user'){
																$.jGrowl("Loading Mohon Tunggu......", { sticky: true });
																$.jGrowl("Selamat Datang di SISTEM PEMBAYARAN SPP & UK SMK PEMBANGUNAN SURABAYA", { header: 'Akses Diterima' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'normal/dashboard.php'  }, delay);  
															}else
															{
															$.jGrowl("Mohon diperiksa kembali Nama Pengguna dan Kata Sandi Anda", { header: 'Login Gagal' });
															}
															}
														});
														return false;
													});
									});
									</script>
<?php include('footer.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>