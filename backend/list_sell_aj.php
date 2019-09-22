    <?php require_once('../Connections/condb.php'); ?>
    <?php
    $id_prd = $_POST['data1'];

    mysql_select_db($database_condb);
    $query_prd = "SELECT p_id,p_qty FROM tbl_product WHERE p_id = $id_prd";
    $prd = mysql_query($query_prd, $condb) or die(mysql_error());
    $row_prd = mysql_fetch_assoc($prd);
    $totalRows_prd = mysql_num_rows($prd);
    ?>

    <input type="number" name="s_old" id="s_old" class="form-control" style="text-align: center;"  placeholder="สินค้าที่มีอยู" required="required" value="<?php echo $row_prd['p_qty'] ?>" disabled>

      <input type="hidden" name="s_old" id="s_old" class="form-control" style="text-align: center;"  placeholder="สินค้าที่มีอยู" required="required" value="<?php echo $row_prd['p_qty'] ?>">
    <br>

    <input type="number" name="s_add" id="s_add" class="form-control" style="text-align: center;"  placeholder="เพิ่มสินค้า" required="required">
    <br>

    <input id="s_bill" type="file" name="s_bill" placeholder="Add profile picture" required="required" class="form-control"/>
    <label for="s_bill">ใส่รูปใบเสร็จ</label>