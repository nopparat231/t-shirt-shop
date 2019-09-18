<?php


mysql_select_db($database_condb);
$query_ptypes = "SELECT * FROM tbl_type";
$ptypes = mysql_query($query_ptypes, $condb) or die(mysql_error());
$row_ptypes = mysql_fetch_assoc($ptypes);
$totalRows_ptypes = mysql_num_rows($ptypes);
?>
 <tr>

      <td colspan="2">
      <label for=""></label>
        <select name="t_id" id="t_id" required="required">
          <option value="">กรุณาเลือกประเภทหลัก</option>
          <?php
do {
?>
          <option value="<?php echo $row_ptypes['t_id']?>"><?php echo $row_ptypes['t_name']?></option>
          <?php
} while ($row_ptypes = mysql_fetch_assoc($ptypes));
  $rows = mysql_num_rows($ptypes);
  if($rows > 0) {
      mysql_data_seek($ptypes, 0);
	  $row_ptypes = mysql_fetch_assoc($ptypes);
  }
?>
        </select>
        </td>
    </tr>
