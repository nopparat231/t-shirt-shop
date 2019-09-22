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

		<div class="row">

			<div class="col-md-3">

</div>
    <div class="col-md-9">
				<h3 align="center">  เพิ่ม ผู้ใช้งานระบบ </h3>
				<div class="btn" data-toggle="buttons">
					<label class="btn btn-primary">
						<a name="options" id="option1" autocomplete="off" href="?admin" class="btn btn-primary"><font color="#FFFFFF"> เพิ่มผู้ดูแลระบบ</font> </a>
					</label>
					<label class="btn btn-info">

						<a name="options" id="option2" autocomplete="off"  href="?staff"  class="btn btn-info" > <font color="#FFFFFF"> เพิ่มพนักงาน</font> </a>
					</label>
					<label class="btn btn-warning">

						<a name="options" id="option2" autocomplete="off"  href="?superadmin"  class="btn btn-warning" > <font color="#FFFFFF"> เพิ่มผู้บริหาร</font> </a>
					</label>


				</div>

				<?php if (isset($_GET['superadmin'])): ?>
					<h4>
						<il><p class="list-group-item">รายงานข้อมูลสินค้า</p></il>
						<il><p class="list-group-item">รายงานการสั่งซื้อ</p></il>
						<il><p class="list-group-item">รายงานประเภทสินค้า</p></il>
						<il><p class="list-group-item">รายงานข้อมูลธนาคาร</p></il> </h4>
						<br>
						<a href="add_admin.php?superadmin" class="btn btn-warning">เพิ่มผู้บริหาร</a>

					<?php endif ?>

				<?php if (isset($_GET['admin'])): ?>
					<h4> <il><p class="list-group-item" >จัดการผู้ดูแลระบบ</p></il>
						<il><p class="list-group-item">จัดการข้อมูลสมาชิก</p></il>
						 </h4>
						<br>
						<a href="add_admin.php?admin" class="btn btn-warning">เพิ่มผู้ดูแลระบบ</a>

					<?php endif ?>
					<?php if (isset($_GET['staff'])): ?>
						<h4>
							<il><p  class="list-group-item">จัดการรายการสั่งซื้อ</p></il>
							<il><p  class="list-group-item">จัดการประเภทสินค้า</p></il>
							<il><p  class="list-group-item">จัดการสินค้า</p></il>
							<il><p  class="list-group-item">จัดการข้อมูลธนาคาร</p></il></h4>
							<br>
							<a href="add_admin.php?staff" class="btn btn-info">เพิ่มพนักงาน</a>

						<?php endif ?>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</body>
</html>
