<section class="featured_categories featured_c_four  mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Danh Mục</strong></span></h2>
                    </div>
                    <div class="product_carousel featured_four  product_column5 owl-carousel">
                    <?php
                    $listdanhmuc=loadall_danhmuc();
                    foreach($listdanhmuc as $dmsp){
                        extract($dmsp);
                        $linkdanhmuc1 = "../ClientController/ClientController.php?act=sanpham1&id_dm=" . $id_dm;
                        $linkdanhmuc2 = "../ClientController/ClientController.php?act=sanpham2&id_dm=" . $id_dm;
                        $linkdanhmuc3 = "../ClientController/ClientController.php?act=sanpham3&id_dm=" . $id_dm;
                        $linkdanhmuc4 = "../ClientController/ClientController.php?act=sanpham4&id_dm=" . $id_dm;
                        $linkdanhmuc5 = "../ClientController/ClientController.php?act=sanpham5&id_dm=" . $id_dm;
                        $hinhdm = "../../../../public/assets/dist/img/admin/danhmuc/".$img_dm;
                        ?>
                            <div class="single_featured">
                            <div class="featured_thumb">
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
                                <img src="<?php echo "$hinhdm" ?>" alt="">
                            
                                
                            </div>
                            <div class="featured_content">
                                <h3 class="product_name"><a href="
                                
                                "><?php echo "$ten_dm" ?></a>
                                </h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#"><?php echo "$mota" ?></a></li>
                                        <li><a href="#"><?php echo "$trang_thai" ?></a></li>
                                    </ul>
                                </div>
                                <a class="view_more" href="<?php  
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
                                 ?> ">Xem Danh Mục</a>
                            </div>
                        </div>
                        </a>
                        <?php } ?>
                            
                    </div>
                </div>
            </div>
        </div>
</section>
    <!--featured categories area end-->