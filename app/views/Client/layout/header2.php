<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area header_padding">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Follow Us:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <?php
                                if(isset($_SESSION['ten_taikhoan'])){
                                extract($_SESSION['ten_taikhoan'])
                            ?>
                            <div class="top_right text-end"> 
                            <ul>
                            <li class="top_links"><a href="#"><i class="ion-android-person"></i>Xin chào <?php if(isset($_SESSION['tenng'])&&($_SESSION['tenng']!="")) echo $_SESSION['tenng']; ?> <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_links">
                                        <?php if($quyen_nd == 1){ ?>
                                            <li><a href="../../Admin/AdminController/AdminController.php">đăng nhập admin</a></li>
                                        <?php } ?>
                                            <li><a href="ClientController.php?act=suathongtin">Sửa thông tin</a></li>
                                            <li><a href="ClientController.php?act=dangnhap">đăng nhập</a></li>
                                            <li><a href="ClientController.php?act=dangxuat">Đăng xuất</a></li>
                                            
                                        </ul>
                            <?php }else{
                            ?>
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links"><a href="#"><i class="ion-android-person"></i>Tài Khoản<i class="ion-ios-arrow-down"></i></a>
                                    
                                        <ul class="dropdown_links">
                                            <li><a href="ClientController.php?act=dangnhap">Đăng nhập</a></li>
                                            <li><a href="ClientController.php?act=dangky">Đăng Ký</a></li>
                                            <!-- <li><a href="ClientController.php?act=dangnhap">Đăng nhập</a></li>
                                            <li><a href="ClientController.php?act=dangky">Đăng Ký</a></li> -->
                                            
                                        </ul>
                                    </li>
                   
                                </ul>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="index.html"><img styles ="" src="../../../../public/assetclient/img/logo/logo.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="middel_right">
                            <div class="search-container">
                                <form action="../ClientController/ClientController.php?act=sp" method="post">
                                    <div class="search_box">
                                        <input name="kyw" placeholder="Nhập tên sản phẩm..." type="text">
                                        <input type="submit" name="timkiem" value="Tìm kiếm"  style="background-color:#BDB76B ; color: #A52A2A;">
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">

                                <div class="donhang">
                                <style>
                                    .donhang{
                                        width: 35px;
                                        height: 33px;
                                        margin-right: 40px;
                                    }
                                </style>
                                    <a href="../ClientController/ClientController.php?act=showdh"><img styles ="" src="../../../../public/assets/dist/img/admin/donhang/icon-giao-hang.png" alt=""></a>
                                    
                                </div>
                                <div class="mini_cart_wrapper">
                                    <!--<a href="javascript:void(0)"><span class="lnr lnr-cart"></span>Giỏ Hàng </a>-->
                                    <a href="../ClientController/ClientController.php?act=addcart"><span class="lnr lnr-cart"></span>Giỏ Hàng </a>
                                  
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        
        <!--mini cart-->
        
        </div>
        <!--mini cart end-->
