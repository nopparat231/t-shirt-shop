        <!-- Start Header Style -->
        <?php  session_start(); ?>
        <header id="header" class="htc-header">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="https://scontent.fbkk4-1.fna.fbcdn.net/v/t1.15752-9/72839742_396255554655162_7405830469477990400_n.png?_nc_cat=111&_nc_eui2=AeEdX5cTf9jNd2gEptR_T7yDlZwadtO4rXO8qae72ZuKTyXuf99Ca6gppdJpGZ4oAftDdppTGUs5j4Mlga4rw-JyNNHDuCDYAryIuyr6P_gCZA&_nc_oc=AQkcnLFjjVeyInrhds_LdX54E7ngCQNFvFYddR0Iuvi3pXC-5B35H4-zkre_ZGPVLCo&_nc_ht=scontent.fbkk4-1.fna&oh=11bdb9f13ac1ece20e3a493c6dee60d2&oe=5DEF0605" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    <li class="drop"><a href="index.php">หน้าหลัก</a>
                                    </li>
                                    <!-- <li><a href="Tee-Designer/desing.php">Desing</a></li> -->
                                    <li><a href="index.php?about">เกี่ยวกับ</a></li>
                                    
                                    <li class="drop"><a href="index.php?Shop">สิ้นค้าทั้งหมด</a>

                                        <ul class="dropdown">
                                            <?php

                                            mysql_select_db($database_condb);
                                            $query_typedrop = "SELECT * FROM tbl_type";
                                            $typedrop = mysql_query($query_typedrop, $condb) or die(mysql_error());
                                            $row_typedrop = mysql_fetch_assoc($typedrop);
                                            $totalRows_typedrop = mysql_num_rows($typedrop);

                                            ?>
                                            <?php if ($totalRows_typedrop > 0) {?>
                                             <?php do { ?>

                                                <li><a href="index.php?Shop&t_id=<?php echo $row_typedrop['t_id'];?>" ><?php echo $row_typedrop['t_name']; ?></a></li>

                                            <?php } while ($row_typedrop = mysql_fetch_assoc($typedrop)); ?>
                                        <?php }
                                        mysql_free_result($typedrop);
                                        ?>
                                    </ul>

                                </li>



                               <!--  <li><a href="index.php?contact">contact</a></li> -->
                            </ul>
                        </nav>


                    </div>
                    <!-- End MAinmenu Ares -->
                    <div class="col-md-2 col-lg-2 col-6">  
                        <ul class="menu-extra">
    
                            <ul class="main__menu">
                                <!-- ค้นหา -->
                                <!--   <li class="search search__open d-none d-sm-block"><span class="ti-search"></span></li> -->

                                <?php if (isset($_SESSION['User'])): ?>

                                    <li class="drop"><a href="#"><?php echo $_SESSION['User']; ?></a>
                                        <ul class="dropdown">
                                          <li><a href="index.php?my_order">My order</a></li>
                                          <li><a href="index.php?my_profile">My Profile</a></li>
                                          <li><a href="logout.php">Logout</a></li>
                                      </ul>
                                  </li>

                                  <?php else: ?>
                                      <li class="drop"><a href="index.php?login"><span class="ti-user"></span></a></li>
                                  <?php endif ?>


                                  <li class="cart__menu">
                                    <a href="index.php?cart">
                                        <p class="badge badge-light">
                                            <span class="ti-shopping-cart" id="cart-container">
                                                <?php 
                                                if(isset($_SESSION["products"])){
                                                    echo count($_SESSION["products"]); 
                                                } else {
                                                    echo 0; 
                                                }
                                                ?>
                                            </span>
                                        </p>
                                    </a>

                                </li>

                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
        <!-- End Header Style -->