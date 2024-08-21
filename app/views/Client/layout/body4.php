<style>
    .owl-carousel .owl-item img{
        width: 250px;
        height: 250px;
    }
    .haha{
      padding-top: 15px;
    }
    .haha input{
        background-color: #FFCC66;
        border-radius: 8px;
    }
</style>
<section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Sản phẩm Hot</h2>
                    </div>
                    
                    <div class="product_carousel product_column4 owl-carousel">
                        <?php
                          $listall= ds_sanpham_inner();
                        foreach($listall as $listp){
                            extract($listp);
                            $linkct = "../ClientController/ClientController.php?act=chitietsp&id_sp=" . $id_sp;
                            $linkdanhmuc = "../ClientController/ClientController.php?act=sanpham&id_sp=" . $id_sp;
                            $hinhSP = "../../../../public/assets/dist/img/admin/sanpham/".$img_sp;
                            if($id_dm == 57){
                            echo'
                            <form action="../ClientController/ClientController.php?act=addcart" method="POST">
                            <div class="single_product">
                            <div class="product_name">
                           <a href="'.$linkct.'"> <span>'.$ten_sp.'</span> </a> 
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="'.$linkct.'"><img src="'.$hinhSP.'" alt=""></a>
                                <a class="secondary_img" href="'.$linkct.'"><img src="'.$hinhSP.'" alt=""></a>
                            </div>
                            <div class="product_content">
                              
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">'.$gia_sp.'.VNĐ</span>
                                    </div>
                                </div>
                                    <div> <p class="manufacture_product"><a href="#">'.$mota_sp.' </a></p></div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Ngày Nhập:<br> <span>'.$ngay_nhap.'</span></p> 
                                    <p class="product_available">Số Lượng: <span>'.$soluong_sp.'</span></p>
                                </div>
                                <div class="bar_percent">
                                </div>
                                <div class="haha">
                                <input type="submit" value="Thêm Vào Giỏ Hàng" name="addtocard">
                                 </div>
                                <input type="hidden" value="'.$id_sp.'" name="idsp">
                                <input type="hidden" value="'.$ten_sp.'" name="tensp">
                                <input type="hidden" value="'.$hinhSP.'" name="imgsp">
                                <input type="hidden" value="'.$gia_sp.'" name="giasp">
                                </div>
                            </form>
                        </div>';
                        }
                    }
                         ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
 
