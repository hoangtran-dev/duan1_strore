        <!--header bottom satrt-->
        <div class="header_bottom bottom_four sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="../ClientController/ClientController.php">Trang Chủ<i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="../ClientController/ClientController.php">Trang Chủ</a></li>
                                            <li><a href="../ClientController/ClientController.php?act=sanpham">Sản Phẩm</a></li>
                                            <li><a href="../ClientController/ClientController.php?act=sanpham">Danh Mục</a></li>
                                            <li><a href="index-4.html">Tin Tức</a></li>
                                            <li><a href="index-5.html">Liên hệ</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega_items"><a href="../ClientController/ClientController.php?act=sanpham">Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                        
                                         <!--<div class="mega_menu">
                                            <div class="banner_static_menu">
                                                <a href="shop.html"><img src="../../../../public/assetclient/img/slider/lv.jpg" alt=""></a>
                                            </div>
                                        </div>-->
                                    </li>
                                    
                                    <li><a href="../ClientController/ClientController.php?act=sanpham">Danh Mục<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                    <?php
                                foreach($listdanhmuc as $dm){
                                 extract($dm);

                                 $linkdanhmuc1 = "../ClientController/ClientController.php?act=sanpham1&id_dm=" . $id_dm;
                                 $linkdanhmuc2 = "../ClientController/ClientController.php?act=sanpham2&id_dm=" . $id_dm;
                                 $linkdanhmuc3 = "../ClientController/ClientController.php?act=sanpham3&id_dm=" . $id_dm;
                                 $linkdanhmuc4 = "../ClientController/ClientController.php?act=sanpham4&id_dm=" . $id_dm;
                                 $linkdanhmuc5 = "../ClientController/ClientController.php?act=sanpham5&id_dm=" . $id_dm;
                                  ?>
                                     <a href="<?php 
                                    if($id_dm == 58){
                                        echo "  $linkdanhmuc1";
                                    }
                                    if($id_dm == 57){
                                        echo "  $linkdanhmuc2";
                                    }     
                                    if($id_dm == 56){
                                        echo "  $linkdanhmuc5";
                                    }    
                                    if($id_dm == 55){
                                        echo "  $linkdanhmuc3";
                                    }
                                    if($id_dm == 54){
                                        echo "  $linkdanhmuc4";    
                                    }
                                     ?>">
                                        <li>
                                         <?php echo $ten_dm ?>
                                    </li>    
                                    </a>
                             <?php } ?>      
                             </ul>
                                    </li>
                                    <li><a href="../ClientController/ClientController.php?act=baiviet">Tin Tức</a></li>
                                    <li><a href="../ClientController/ClientController.php?act=lienhe"> Liên Hệ</a></li>
                                </ul>
                         
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>