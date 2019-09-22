<?php
if (!isset($_SESSION)) {
    session_start();

}
?>
<header id="header" class="htc-header">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo/uniqlo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 d-none d-md-block">
                    <nav class="mainmenu__nav  d-none d-lg-block">
                        <ul class="main__menu">
                            <li class="drop"><a href="index.php">Home</a>
                            </li>
                            <li><a href="Tee-Designer/desing.php">Desing</a></li>
                            <li><a href="index.php?about">About</a></li>
                            
                            <li class="drop"><a href="index.php?Shop">Shop</a>
                            </li>
                            <li><a href="index.php?contact">contact</a></li>
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

                                <li class="drop">
                                    <a href="#"><?php echo $_SESSION['User']; ?></a>
                                    <ul class="dropdown">
                                        <li class="drop"><a href="index.php?my_order">My order</a></li>
                                        <li class="drop"><a href="index.php?my_profile">My Profile</a></li>
                                        <li class="drop"><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>

                                <?php else: ?>
                                  <li class="drop"><a href="index.php?login"><span class="ti-user"></span></a></li>
                              <?php endif ?>


                              <li id="shopping-cart-item" >
                                <a href="index.php?cart">
                                    
                                        <span class="ti-shopping-cart" id="cart-container">
                                            
                                            <?php 
                                            if(isset($_SESSION["products"])){
                                                echo count($_SESSION["products"]); 
                                            } else {
                                                echo 0; 
                                            }
                                            ?>
                                        </span>
                                    
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
