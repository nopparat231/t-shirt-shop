				<?php include('mm.php');?>
				<div id="throbber" style="display:none; min-height:120px;"></div>
				<div id="noty-holder"></div>
				<div id="wrapper">
					<!-- Navigation -->
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">
								<img src="../img/logo42.png" alt="LOGO">
							</a>
						</div>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="../logout_admin.php" class="list-group-item list-group-item-danger">ออกจากระบบ</a>
							</li>
						</ul>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="#">  ชื่อ-สกุล : <?php echo $row_mm['admin_name'];?></a>
							</li>
						</ul>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="#">  ตำแหน่ง : <?php if($row_mm['status'] == 'staff'){
																					echo "พนักงาน";}
																					elseif($row_mm['status'] == 'admin'){
																					echo "ผู้ดูแลระบบ";}
																					elseif($row_mm['status'] == 'superadmin'){
																					echo "ผู้จัดการ";}
																					elseif($row_mm['status'] == 'add'){
																					echo "พนักงานตรวจรับ";}
																					elseif($row_mm['status'] == 'sale'){
																					echo "พนักงานขาย";}
																					elseif($row_mm['status'] == 'confirm'){
																					echo "พนักงานจัดส่ง";}
																					else {
																						echo "<font color = 'red';>ยกเลิกบัญชี</font>";
																					}
								?></a>
							</li>
						</ul>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="#">  รหัสพนักงาน : <?php if($row_mm['status'] == 'admin'){
									 																	echo "AD00";
									 																	echo $row_mm['admin_id'];}
																							elseif($row_mm['status'] == 'superadmin'){
																										echo "MA00";
																										echo $row_mm['admin_id'];}
																							elseif($row_mm['status'] == 'staff'){
																										echo "ST00";
																										echo $row_mm['admin_id'];}
																							elseif($row_mm['status'] == 'add'){
																										echo "SA00";
																										echo $row_mm['admin_id'];}
																							elseif($row_mm['status'] == 'sale'){
																										echo "SS00";
																										echo $row_mm['admin_id'];}
																							elseif($row_mm['status'] == 'confirm'){
																								echo "SC00";
																								echo $row_mm['admin_id'];}
																								else{
																									echo "EX00";
																									echo $row_mm['admin_id'];}



									?></a>
							</li>
						</ul>

						<ul class="nav navbar-right top-nav">
							<li>
								<a  href="#">  ชื่อผู้ใช้ : <?php echo $row_mm['admin_user'];?></a>
							</li>

						</ul>

						<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">

							<ul class="nav navbar-nav side-nav">


								<style type="text/css">
									.font{
										font-size: 20px;
									}
								</style>


								<li>
									<a href="index.php" class="font"><img src="../icon/admin/home.png" alt="หน้าหลัก">  หน้าหลัก</a>
								</li>
								<?php
								if ($row_mm['status'] == 'staff') { ?>
								<li>
									<a href="list_product_type.php?list"  class="font"><img src="../icon/staff/edittype.png" alt="จัดการประเภทหนังสือ">  จัดการประเภทหนังสือ</a>
								</li>
								<li>
									<a  href="list_product.php" class="font"><img src="../icon/staff/edb.png" alt="">  จัดการหนังสือ</a>
								</li>
								<li>
									<a href="list_sell.php" class="font"><img src="../icon/staff/addbook.png" alt="">  จัดการตรวจรับหนังสือ</a>
								</li>
								<li>
									<a href="list_bank.php" class="font"><img src="../icon/staff/bank.png" alt="">  จัดการข้อมูลธนาคาร</a>
								</li>
								<li>
									<a href="carousel.php" class="font"><img src="../icon/staff/logo.png" alt="">  จัดการโลโก้ หน้าปก</a>
								</li>
								<li>
									<a href="list_news.php" class="font"><img src="../icon/staff/news.png" alt="">  จัดการข่าวสาร</a>
								</li>
								<li>
									<a href="add_about.php" class="font"><img src="../icon/staff/info.png" alt="">  จัดการเกี่ยวกับ ติดต่อเรา</a>
								</li>

								<?php
								}elseif ($row_mm['status'] == 'add') { ?>
								<li>
									<a href="list_product_type.php?list"  class="font"><img src="../icon/staff/edittype.png" alt="จัดการประเภทหนังสือ">  จัดการประเภทหนังสือ</a>
								</li>
								<li>
									<a  href="list_product.php" class="font"><img src="../icon/staff/edb.png" alt="">  จัดการหนังสือ</a>
								</li>
								<li>
									<a href="list_sell.php" class="font"><img src="../icon/staff/addbook.png" alt="">  จัดการตรวจรับหนังสือ</a>
								</li>
								<li>
									<a href="carousel.php" class="font"><img src="../icon/staff/logo.png" alt="">  จัดการโลโก้ หน้าปก</a>
								</li>


								<?php
								}elseif ($row_mm['status'] == 'sale') { ?>

								<li>
									<a href="list_bank.php" class="font"><img src="../icon/staff/bank.png" alt="">  จัดการข้อมูลธนาคาร</a>
								</li>

								<li>
									<a href="list_news.php" class="font"><img src="../icon/staff/news.png" alt="">  จัดการข่าวสาร</a>
								</li>


								<?php
								}elseif ($row_mm['status'] == 'confirm') { ?>

								<li>
									<a href="add_about.php" class="font"><img src="../icon/staff/info.png" alt="">  จัดการเกี่ยวกับ ติดต่อเรา</a>
								</li>

								<?php } elseif($row_mm['status'] == 'superadmin') { ?>

									<li>
										<a href="list_admin.php" class="font"><img src="../icon/manager/admin.png" alt="">  รายงานผู้ใช้งานระบบ</a>
									</li>
									<li>
										<a href="list_member.php" class="font"><img src="../icon/manager/member.png" alt="">  รายงานข้อมูลลูกค้า</a>
									</li>
									<li>
										<a href="report_all_sell.php" class="font"><img src="../icon/manager/booksell.png" alt="">  รายงานตรวจรับหนังสือ</a>
									</li>
									<li>
										<a href="report_all_type.php" class="font"><img src="../icon/manager/type.png" alt="">  รายงานประเภทหนังสือ</a>
									</li>
									<li>
										<a href="report_all_prd.php" class="font"><img src="../icon/manager/book.png" alt="">  รายงานข้อมูลหนังสือ</a>
									</li>

									<li>
										<a href="report_order.php" class="font"><img src="../icon/manager/bookbuy.png" alt="">  รายงานการสั่งซื้อ</a>
									</li>
									<li>
										<a href="report_pay.php" class="font"><img src="../icon/manager/bookbuy.png" alt="">  รายงานการชำระเงิน</a>
									</li>
									<li>
										<a href="report_sent.php" class="font"><img src="../icon/manager/bookbuy.png" alt="">  รายงานการจัดส่งสินค้า</a>
									</li>
									<li>
										<a href="report_all_bank.php" class="font"><img src="../icon/manager/bank.png" alt="">  รายงานข้อมูลธนาคาร</a>
									</li>

								<?php }elseif($row_mm['status'] == 'admin') {	 ?>

									<li>
										<a href="adduser_admin.php" class="font"><img src="../icon/Admin/adduser.png" alt="">  เพิ่มผู้ใช้งานระบบ</a>
									</li>
									<li>
										<a href="list_admin.php" class="font"><img src="../icon/Admin/editadmin.png" alt="">  จัดการผู้ใช้งานระบบ</a>
									</li>
									<li>
										<a href="list_member.php" class="font"><img src="../icon/Admin/edituser.png" alt="">  จัดการลูกค้า</a>
									</li>
								<?php } ?>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</nav>

					<div id="page-wrapper">
						<div class="container-fluid">
							<!-- Page Heading -->
							<div class="row" id="main" >
								<div class="col-sm-12 col-md-12 well" id="content">
