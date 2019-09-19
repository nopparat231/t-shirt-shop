				<?php //include('mm.php');?>
				
				
				<div id="wrapper">
					<!-- Navigation -->
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height: 75px" >
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">
								<img src="../img/logo42.png" alt="LOGO" >
							</a>
						</div>

						<ul class="nav navbar-right top-nav" >
							<li>
								
							</li>
						</ul>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="#">  ชื่อ-สกุล : <?php echo $row_mm['admin_name'];?></a>
							</li>
						</ul>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="#">  ตำแหน่ง : </a>
							</li>
						</ul>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="#">  รหัสพนักงาน : </a>
							</li>
						</ul>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="#">  ชื่อผู้ใช้ : <?php echo $row_mm['admin_user'];?></a>
							</li>

						</ul>

						<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

						<!-- /.navbar-collapse -->
					</nav>

				</div>