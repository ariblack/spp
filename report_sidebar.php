		<div class="span3" id="sidebar">
			<img src="images/neg.png">
	<center>
		<img src="images/logo.png">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
						<li><a href="dashboard.php"><i class="icon-chevron-left icon-large"></i><i class="icon-home icon-large"></i>  Beranda</a></li>
						<li <?php if($page == "Siswa") echo "class='active'";?>><a href="student_report.php"><i class="icon-chevron-right icon-large"></i><i class="icon-group icon-large"></i>  Laporan  Siswa</a></li>
						<li <?php if($page == "Bayar") echo "class='active'";?>><a href="report_payment.php"><i class="icon-chevron-right icon-large"></i><i class="icon-money icon-large"></i>  Laporan  Bayar</a></li>
						<li <?php if($page == "Ringkasan") echo "class='active'";?>><a href="report_summary.php"><i class="icon-chevron-right icon-large"></i><i class="icon-table icon-large"></i>  Ringkasan Bayar</a></li>
						<li <?php if($page == "Log") echo "class='active'";?>><a href="activity_log.php"><i class="icon-chevron-right icon-large"></i><i class="icon-file icon-large"></i>  Log Aktivitas</a></li>
                    </ul>
	</center>
            </div>