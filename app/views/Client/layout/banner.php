<!--slider area start-->
<section class="slider_section slider_two mb-50">
<div class="slider_area owl-carousel">

            <?php
        
                        $listbn= loadall_banner();
                        foreach($listbn as $listb){
                            extract($listb);
                            $hinh= "../../../../public/assets/dist/img/admin/banner/".$listb['img'];
                            echo'  
                            <div class="single_slider d-flex align-items-center" data-bgimg="'.$hinh.'" width="1000px" alt="">
                            
                            
                    <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h2 style="color:while;">"'.$ten_banner.'" </h2>
                                <h1 style="color:red;">Get &250 In Total Discount On A New Set Of Tries</h1>
                                <a class="button" href="'.$link.'" >Xem Sản Phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>

          


                </div>';
                        }
         
            ?>
         
        </div>
    </section>
    <!--slider area end-->
     <!--banner area start-->
     <section class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_container">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="../ClientController/ClientController.php?act=sanpham"><img  src="../../../../public/assetclient/img/bg/hhh.jpg" alt=""></a>
                                
                            </div>
                        </div>
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="../ClientController/ClientController.php?act=sanpham"><img src="../../../../public/assetclient/img/bg/ngon 1.jpg" alt=""></a>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->