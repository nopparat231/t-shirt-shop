 
<?php 

if($_SESSION['MM_Username']!=''){

    $mem_user = $_SESSION['MM_Username'];

    mysql_select_db($database_condb);
    $query_buyer = "SELECT * FROM tbl_member WHERE mem_username = '$mem_user' ";
    $buyer = mysql_query($query_buyer, $condb) or die(mysql_error());
    $row_buyer = mysql_fetch_assoc($buyer);
    $totalRows_buyer = mysql_num_rows($buyer);
    ?>
    <!-- Start Our Store Area -->
    <form action="my_profile_db.php" method="POST" >
        <section class="htc__store__area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line">แก้ไขข้อมูล</h2>
                            <div class="review__box">


                                <div id="review-form">
                                    <div class="single-review-form">
                                        <div class="review-box name">

                                            <input type="hidden" name="text">
                                            <input type="hidden" name="mem_id" value="<?php echo $row_buyer['mem_id']; ?>">
                                            <input type="text" name="mem_fname" value="<?php echo $row_buyer['mem_fname']; ?>" placeholder="ชื่อ*" >
                                             <input type="text" name="mem_lname" value="<?php echo $row_buyer['mem_lname']; ?>" placeholder="นามสกุล*" >
                                        </div>

                                        <div class="review-box name">
                                          <input type="text" readonly name="mem_username" value="<?php echo $row_buyer['mem_username']; ?>" placeholder="Username*">
                                          <input type="password" name="mem_password" value="<?php echo $row_buyer['mem_password'] ?>" placeholder="Password*">
                                          
                                      </div>

                                      <div class="review-box name">

                                       <input type="email" name="mem_email" value="<?php echo $row_buyer['mem_email']; ?>" placeholder="Emil*">
                                       <input type="number" name="mem_tel" value="<?php echo $row_buyer['mem_tel'] ?>" placeholder="เบอร์โทร*">

                                   </div>

                               </div>
                               <div class="single-review-form">
                                <div class="review-box message">
                                <textarea name="mem_address" placeholder="ที่อยู่*"><?php echo $row_buyer['mem_address']; ?></textarea>
                            </div>
                        </div>
                    


                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-warning btn-lg" style="align-items: center;" >ยืนยัน</button>
            <a href="index.php" class="btn btn-danger btn-lg">ยกเลิก</a>
        </div>
    </div>
</div>
</section>
</form>
<!-- End Our Store Area -->
<?php } ?>