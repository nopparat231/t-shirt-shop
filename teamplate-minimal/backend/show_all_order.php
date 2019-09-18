<?php
//include('h.php');
include 'report_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>รายการสั่งซื้อ</h2>
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#menu11">ทั้งหมด
						<span class="badge"><?php echo $totalRows_mycart; ?></span></a></li>
						<li><a data-toggle="tab" href="#menu1">รอชำระเงิน
							<span class="badge"><?php echo $totalRows_mycart1; ?></span></a></li>
							<li><a data-toggle="tab" href="#menu2">ชำระเงินแล้ว
								<span class="badge"><?php echo $totalRows_mycart2; ?></span></a></li>
								<li> <a data-toggle="tab" href="#menu3">ตรวจสอบการชำระแล้ว
									<span class="badge"><?php echo $totalRows_mycart5; ?></span></a></li>
									<li><a data-toggle="tab" href="#menu4">ส่งของแล้ว
										<span class="badge"><?php echo $totalRows_mycart3; ?></span></a></li>
										<li><a data-toggle="tab" href="#menu5">ยกเลิกคำสั่งซื้อ
											<span class="badge"><?php echo $totalRows_mycart4; ?></span></a></li>
										</ul>

										<div class="tab-content">

											<div id="menu11" class="tab-pane fade in active">
												<br>
												<table class="display table table-hover" id="myTable" cellspacing="0" border="1">
													<?php if ($totalRows_mycart > 0) {?>
														<thead >
															<tr class="info">
																<th>เลขที่ใบสั่งซื้อ</th>
																<th>วันที่สั่งซื้อ</th>
																<th>ยอดสุทธิ</th>
																<th>สถานะ</th>
																<th>รายละเอียด</th>
																<th>ยกเลิกคำสั่งซื้อ</th>
															</tr>
														</thead>



														<?php do { ?>
															<tr>
																<td align="center">
																	BK<?php echo $row_mycart['oid'];?>

																</td>
																<td align="center">
																	<?php echo $row_mycart['order_date'];?>
																</td>
																
																<td align="center">
																	<?php echo number_format($row_mycart['ctotal'],2);?> บาท
																</td>

																<td align="left">

																	<?php $status = $row_mycart['order_status'];
																	include('status.php');
																	?>

																</td>

																<td align="center">
																	<span id="hp">
																		<a href="index.php?order_id=<?php echo $row_mycart['oid'];?>&mem_id=<?php  echo $row_mycart['mem_id'];?>&act=show-order" class="btn-sm btn-info">
																			<span class="glyphicon glyphicon-zoom-in"></span>รายละเอียด

																		</a>
																	</span>

																</td>

																<td>
																	<?php if ($status == 3 | $status == 4 | $status == 5) { ?>
																		<center>
																			<a class="btn btn-danger btn-xs" disabled>
																			ยกเลิก </a>
																		</center>
																	<?php }else{ ?>
																		<center>
																			<a href="del_order.php?order_id=<?php echo $row_mycart['oid'];?>&order_status=4" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการยกเลิกคำสั่งซื้อ');">
																			ยกเลิก </a>
																		</center>

																	<?php } ?>


																</td>
															</tr>
														<?php } while ($row_mycart = mysql_fetch_assoc($mycart)); ?>
													<?php }else{ ?>
														<center><h4>ไม่มีรายการ</h4></center>
													<?php } ?>
												</table>

											</div>


											<div id="menu1" class="tab-pane fade">
												<br>
												<table class="display table table-hover" id="myTable1" cellspacing="0" border="1">
													<?php if ($totalRows_mycart1 > 0) {?>
														<thead >
															<tr class="info">
																<th>เลขที่ใบสั่งซื้อ</th>
																<th>วันที่สั่งซื้อ</th>
																<th>ยอดสุทธิ</th>
																<th>สถานะ</th>
																<th>รายละเอียด</th>
																<th>ยกเลิกคำสั่งซื้อ</th>
															</tr>
														</thead>



														<?php do { ?>
															<tr>
																<td align="center">
																	BK<?php echo $row_mycart1['oid'];?>

																</td>
																<td align="center">
																	<?php echo $row_mycart1['order_date'];?>
																</td>
															
															<td align="center">
																<?php echo number_format($row_mycart1['ctotal'],2);?> บาท
															</td>

															<td align="left">

																<?php $status = $row_mycart1['order_status'];
																include('status.php');
																?>

															</td>

															<td align="center">
																<span id="hp">
																	<a href="index.php?order_id=<?php echo $row_mycart1['oid'];?>&mem_id=<?php  echo $row_mycart1['mem_id'];?>&act=show-order" class="btn-sm btn-info">
																		<span class="glyphicon glyphicon-zoom-in"></span>รายละเอียด

																	</a>
																</span>

															</td>

															<td>
																<?php if ($status == 3 | $status == 4 | $status == 5) { ?>
																	<center>
																		<a class="btn btn-danger btn-xs" disabled>
																		ยกเลิก </a>
																	</center>
																<?php }else{ ?>
																	<center>
																		<a href="del_order.php?order_id=<?php echo $row_mycart1['oid'];?>&order_status=4" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการยกเลิกคำสั่งซื้อ');">
																		ยกเลิก </a>
																	</center>

																<?php } ?>


															</td>
														</tr>
													<?php } while ($row_mycart1 = mysql_fetch_assoc($mycart1)); ?>
												<?php }else{ ?>
													<center><h4>ไม่มีรายการ</h4></center>
												<?php } ?>
											</table>

										</div>

										<div id="menu2" class="tab-pane fade">
											<br>
											<table class="display table table-hover" id="myTable2" cellspacing="0" border="1">
												<?php if ($totalRows_mycart2 > 0) {?>
													<thead >
														<tr class="info">
															<th>เลขที่ใบสั่งซื้อ</th>
															<th>วันที่สั่งซื้อ</th>
															<th>ยอดสุทธิ</th>
															<th>สถานะ</th>
															<th>ธนาคาร</th>
															<th>รายละเอียด</th>
															<th>ยกเลิกคำสั่งซื้อ</th>
														</tr>
													</thead>

													<?php do { ?>
														<tr>
															<td align="center">
																BK<?php echo $row_mycart2['oid'];?>

															</td>
															<td align="center">
																<?php echo $row_mycart2['order_date'];?>
															</td>
																
															<td align="center">
																<?php echo number_format($row_mycart2['ctotal'],2);?> บาท
															</td>

															<td align="left">

																<?php $status = $row_mycart2['order_status'];
																include('status.php');
																?>

																<td align="center">
																	<b><?php echo $row_mycart2['b_name'];?></b>
																</td>

															</td>

															<td align="center">
																<span id="hp">
																	<a href="index.php?order_id=<?php echo $row_mycart2['oid'];?>&mem_id=<?php  echo $row_mycart2['mem_id'];?>&act=show-order" class="btn-sm btn-info">
																		<span class="glyphicon glyphicon-zoom-in"></span>รายละเอียด

																	</a>
																</span>

															</td>

															<td>
																<?php if ($status == 3 | $status == 4 | $status == 5) { ?>
																	<center>
																		<a class="btn btn-danger btn-xs" disabled>
																		ยกเลิก </a>
																	</center>
																<?php }else{ ?>
																	<center>
																		<a href="del_order.php?order_id=<?php echo $row_mycart2['oid'];?>&order_status=4" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการยกเลิกคำสั่งซื้อ');">
																		ยกเลิก </a>
																	</center>

																<?php } ?>


															</td>
														</tr>
													<?php } while ($row_mycart2 = mysql_fetch_assoc($mycart2)); ?>
												<?php }else{ ?>
													<center><h4>ไม่มีรายการ</h4></center>
												<?php } ?>
											</table>

										</div>
										<div id="menu3" class="tab-pane fade">
											<br>
											<table class="display table table-hover" id="myTable3" cellspacing="0" border="1">

												<?php if ($totalRows_mycart5 > 0) {?>
													<thead >
														<tr class="info">
															<th>เลขที่ใบสั่งซื้อ</th>
															<th>วันที่สั่งซื้อ</th>
															<th>ยอดสุทธิ</th>
															<th>สถานะ</th>
															<th>จัดส่ง</th>
															<th>รายละเอียด</th>
															<th>ยกเลิกคำสั่งซื้อ</th>
														</tr>
													</thead>



													<?php do { ?>
														<tr>
															<td align="center">
																BK<?php echo $row_mycart5['oid'];?>

															</td>
															<td align="center">
																<?php echo $row_mycart5['order_date'];?>
															</td>
																
															<td align="center">
																<?php echo number_format($row_mycart5['ctotal'],2);?> บาท
															</td>

															<td align="left">

																<?php $status = $row_mycart5['order_status'];
																include('status.php');
																?>
																<td align="center">
																	<b><?php echo ucfirst($row_mycart5['emss']);?></b>
																</td>

															</td>

															<td align="center">
																<span id="hp">
																	<a href="index.php?order_id=<?php echo $row_mycart5['oid'];?>&mem_id=<?php  echo $row_mycart5['mem_id'];?>&act=show-order" class="btn-sm btn-info">
																		<span class="glyphicon glyphicon-zoom-in"></span>รายละเอียด

																	</a>
																</span>

															</td>

															<td>
																<?php if ($status == 3 | $status == 4 | $status == 5) { ?>
																	<center>
																		<a class="btn btn-danger btn-xs" disabled>
																		ยกเลิก </a>
																	</center>
																<?php }else{ ?>
																	<center>
																		<a href="del_order.php?order_id=<?php echo $row_mycart5['oid'];?>&order_status=4" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการยกเลิกคำสั่งซื้อ');">
																		ยกเลิก </a>
																	</center>

																<?php } ?>


															</td>
														</tr>
													<?php } while ($row_mycart5 = mysql_fetch_assoc($mycart5)); ?>
												<?php }else{ ?>
													<center><h4>ไม่มีรายการ</h4></center>
												<?php } ?>
											</table>
										</div>
										<div id="menu4" class="tab-pane fade">
											<br>
											<table class="display table table-hover" id="myTable4" cellspacing="0" border="1">
												<?php if ($totalRows_mycart3 > 0) {?>
													<thead >
														<tr class="info">
															<th>เลขที่ใบสั่งซื้อ</th>
															<th>วันที่สั่งซื้อ</th>
															<th>ยอดสุทธิ</th>
															<th>สถานะ</th>
															<th>รายละเอียด</th>
															<th>ยกเลิกคำสั่งซื้อ</th>
														</tr>
													</thead>

													<?php do { ?>
														<tr>
															<td align="center">
																BK<?php echo $row_mycart3['oid'];?>

															</td>
															<td align="center">
																<?php echo $row_mycart3['order_date'];?>
															</td>

															<td align="center">
																<?php echo number_format($row_mycart3['ctotal'],2);?> บาท
															</td>

															<td align="left">

																<?php $status = $row_mycart3['order_status'];
																include('status.php');
																?>

															</td>

															<td align="center">
																<span id="hp">
																	<a href="index.php?order_id=<?php echo $row_mycart3['oid'];?>&mem_id=<?php  echo $row_mycart3['mem_id'];?>&act=show-order" class="btn-sm btn-info">
																		<span class="glyphicon glyphicon-zoom-in"></span>รายละเอียด

																	</a>
																</span>

															</td>

															<td>
																<?php if ($status == 3 | $status == 4 | $status == 5) { ?>
																	<center>
																		<a class="btn btn-danger btn-xs" disabled>
																		ยกเลิก </a>
																	</center>
																<?php }else{ ?>
																	<center>
																		<a href="del_order.php?order_id=<?php echo $row_mycart3['oid'];?>&order_status=4" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการยกเลิกคำสั่งซื้อ');">
																		ยกเลิก </a>
																	</center>

																<?php } ?>


															</td>
														</tr>
													<?php } while ($row_mycart3 = mysql_fetch_assoc($mycart3)); ?>
												<?php }else{ ?>
													<center><h4>ไม่มีรายการ</h4></center>
												<?php } ?>
											</table>
										</div>
										<div id="menu5" class="tab-pane fade">
											<br>
											<table class="display table table-hover" id="data" cellspacing="0" border="1">
												<?php if ($totalRows_mycart4 > 0) {?>
													<thead >
														<tr class="info">
															<th>เลขที่ใบสั่งซื้อ</th>
															<th>วันที่สั่งซื้อ</th>
															<th>ยอดสุทธิ</th>
															<th>สถานะ</th>
															<th>รายละเอียด</th>
															<th>ยกเลิกคำสั่งซื้อ</th>
														</tr>
													</thead>

													<?php do { ?>
														<tr>
															<td align="center">
																BK<?php echo $row_mycart4['oid'];?>

															</td>
															<td align="center">
																<?php echo $row_mycart4['order_date'];?>
															</td>

															<td align="center">
																<?php echo number_format($row_mycart4['ctotal'],2);?> บาท
															</td>

															<td align="left">

																<?php $status = $row_mycart4['order_status'];
																include('status.php');
																?>

															</td>

															<td align="center">
																<span id="hp">
																	<a href="index.php?order_id=<?php echo $row_mycart4['oid'];?>&mem_id=<?php  echo $row_mycart4['mem_id'];?>&act=show-order" class="btn-sm btn-info">
																		<span class="glyphicon glyphicon-zoom-in"></span>รายละเอียด

																	</a>
																</span>

															</td>

															<td>
																<?php if ($status == 3 | $status == 4 | $status == 5) { ?>
																	<center>
																		<a class="btn btn-danger btn-xs" disabled>
																		ยกเลิก </a>
																	</center>
																<?php }else{ ?>
																	<center>
																		<a href="del_order.php?order_id=<?php echo $row_mycart4['oid'];?>&order_status=4" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการยกเลิกคำสั่งซื้อ');">
																		ยกเลิก </a>
																	</center>

																<?php } ?>


															</td>
														</tr>
													<?php } while ($row_mycart4 = mysql_fetch_assoc($mycart4)); ?>
												<?php }else{ ?>
													<center><h4>ไม่มีรายการ</h4></center>
												<?php } ?>
											</table>
										</div>

									</div>

								</div>
							</div>
						</div>
					</body>
					</html>

					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
