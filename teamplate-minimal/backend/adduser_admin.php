<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('h.php');?>
	<?php include('datatable.php');?>
	</head>	<?php include('navbar.php');?>
	<body><?php //include('menu.php');?>
	<div class="container">


				<?php include('m.php');?>
				<div class="row">

					<div class="col-md-12">
				<h3 align="center">  เพิ่ม ผู้ใช้งานระบบ </h3>
				<div class="btn" data-toggle="buttons">
					<label class="btn btn-warning">

						<a name="options" id="option1" autocomplete="off"  href="?superadmin"  class="btn btn-warning" > <font color="#FFFFFF"> เพิ่มผู้จัดการ</font> </a>
					</label>
					<label class="btn btn-primary">
						<a name="options" id="option2" autocomplete="off" href="?admin" class="btn btn-primary"><font color="#FFFFFF"> เพิ่มผู้ดูแลระบบ</font> </a>
					</label>
					<label class="btn btn-info">

						<a name="options" id="option3" autocomplete="off"  href="?add"  class="btn btn-info" > <font color="#FFFFFF"> เพิ่มพนักงานตรวจรับ</font> </a>
					</label>

					<label class="btn btn-success">

						<a name="options" id="option4" autocomplete="off"  href="?sale"  class="btn btn-success" > <font color="#FFFFFF"> เพิ่มพนักงานขาย</font> </a>
					</label>

					<label class="btn btn-danger">

						<a name="options" id="option5" autocomplete="off"  href="?confirm"  class="btn btn-danger" > <font color="#FFFFFF"> เพิ่มพนักงานจัดส่ง</font> </a>
					</label>

				</div>

				<?php if (isset($_GET['superadmin'])): ?>
					<h4>
						<il><p class="list-group-item">รายงานข้อมูลผู้ใช้ระบบ</p></il>
						<il><p class="list-group-item">รายงานข้อมูลลูกค้า</p></il>
						<il><p class="list-group-item">รายงานข้อมูลสินค้า</p></il>
						<il><p class="list-group-item">รายงานประเภทสินค้า</p></il>
						<il><p class="list-group-item">รายงานการสั่งซื้อ</p></il>
						<il><p class="list-group-item">รายงานการชำระเงิน</p></il>
						<il><p class="list-group-item">รายงานการจัดส่ง</p></il>

						<il><p class="list-group-item">รายงานข้อมูลธนาคาร</p></il> </h4>
						<br>
						<a href="add_admin.php?superadmin" class="btn btn-warning" color="#FFFFFF">เพิ่มผู้จัดการ</a>

					<?php endif ?>

					<?php if (isset($_GET['admin'])): ?>
						<h4> <il><p class="list-group-item" >จัดการผู้ดูแลระบบ</p></il>
							<il><p class="list-group-item">จัดการข้อมูลสมาชิก</p></il>
						</h4>
						<br>
						<a href="add_admin.php?admin" class="btn btn-primary">เพิ่มผู้ดูแลระบบ</a>

					<?php endif ?>
					<?php if (isset($_GET['add'])): ?>
						<h4>
							<il><p  class="list-group-item">จัดการการตรวจรับ</p></il>
							<il><p  class="list-group-item">จัดการประเภทสินค้า</p></il>
							<il><p  class="list-group-item">จัดการประเภทย่อยสินค้า</p></il>
							<il><p  class="list-group-item">จัดการสินค้า</p></il>
							<il><p  class="list-group-item">จัดการภาพหน้าปก โลโก้</p></il>
							<il><p  class="list-group-item">จัดการเกี่ยวกับ</p></il>
						  <il><p  class="list-group-item">จัดการข่าวสาร</p></il></h4>

							<br>
							<a href="add_admin.php?add" class="btn btn-info">เพิ่มพนักงานตรวจรับ</a>

						<?php endif ?>

						<?php if (isset($_GET['sale'])): ?>
							<h4>
								<il><p  class="list-group-item">จัดการรายการสั่งซื้อ</p></il>
								<il><p  class="list-group-item">ตรวจสอบการชำระเงิน</p></il>
								<il><p  class="list-group-item">จัดการข้อมูลธนาคาร</p></il>
								<il><p  class="list-group-item">จัดการภาพหน้าปก โลโก้</p></il>
							  <il><p  class="list-group-item">จัดการเกี่ยวกับ</p></il>
					    	<il><p  class="list-group-item">จัดการข่าวสาร</p></il></h4>
								<br>
								<a href="add_admin.php?sale" class="btn btn-success">เพิ่มพนักงานขาย</a>

							<?php endif ?>

							<?php if (isset($_GET['confirm'])): ?>
								<h4>
									<il><p  class="list-group-item">จัดการรายการสั่งซื้อ</p></il>
									<il><p  class="list-group-item">บันทึกเลขพัสดุ</p></il>


									<il><p  class="list-group-item">จัดการภาพหน้าปก โลโก้</p></il>
								  <il><p  class="list-group-item">จัดการเกี่ยวกับ</p></il>
						    	<il><p  class="list-group-item">จัดการข่าวสาร</p></il></h4>
									<br>
									<a href="add_admin.php?confirm" class="btn btn-danger">เพิ่มพนักงานจัดส่ง</a>

								<?php endif ?>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</body>
</html>
