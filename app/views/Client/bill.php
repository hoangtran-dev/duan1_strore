
<style>
    .hvt input:hover{
        background-color: r;
    }
</style>
<?php
//$vh=$_SESSION['ten_taikhoan'];
?>
<form action="../ClientController/ClientController.php?act=showdonhang" method="post">
<div class="Checkout_section mt-32">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="user-actions">
                         <div id="checkout_login" class="collapse" data-parent="#accordion">
                       </div>    
                    </div>
                </div>
            </div>
            
        <div class="checkout_form">
                <div class="row">
                    
                <div class="col-lg-6 col-md-6">
                            <h3>Sản Phẩm Đã Mua</h3>

                            <div class="row">
                                <div class="col-12">
                                    <div class="table_desc">
                                        <div class="cart_page table-responsive">
                                            <table>
                                                <thead>
                                           <!-- <tr>
                                            <th class="product_remove">Xoá</th>
                                            <th class="product_thumb">Ảnh</th>
                                            <th class="product_name">Tên</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_quantity">Số Lượng</th>
                                            <th class="product_total">Thành Tiền</th>
                                         <th class="product_total">Thao Tác</th> 
                                        </tr> -->
                                    </thead>
                            
                                    <tbody>
                              


                                    <?php
                                     
                                    if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                                    $donhangct=getshowdonhangct($_SESSION['iddh']);
                                    if((isset( $donhangct)) && (count( $donhangct)>0)){
                                    // $hinhSP = "../../../../public/assets/dist/img/admin/sanpham/".$img_sp;
                                   
                                       echo'  
                                       <tr>
                                     
                                       <th class="product_thumb">Ảnh</th>
                                       <th class="product_name">Tên</th>
                                       <th class="product-price">Giá</th>
                                       <th class="product_quantity">Số Lượng</th>
                                       <th class="product_total">Thành Tiền</th>
                                  
                                   </tr>';
                                   $i=0;
                                   $tong=0;
                                   foreach ( $donhangct as $item){
                                    $tt=$item['soluongsp'] * $item['gia_sp'];
                                    $tong+=$tt;
                                  echo'<tr>
                                      
                                       <td class="product_thumb"><img src="'.$item['img_sp'].'" alt=""></td>
                                       <td class="product_name">'.$item['ten_sp'].'</td>
                                       <td class="product-price">'.$item['gia_sp'].'.VNĐ</td>
                                       <td class="product_quantity">'.$item['soluongsp'].'</td>
                                       <td class="product_total">'.$tt.'.VNĐ</td>
                                      
                                   </tr>
                                   ';
                                   $i++;
                                   }
                                   echo '
                                   <tr>
                                   <td colspan="2"><strong>Tổng Tiền</strong></td>
                                   <td><strong>'.$tong.'.000.VNĐ</strong></td>
                                   </tr>
                                   ';
                                }
                            }else{
                                echo 'giỏ hàng rỗng';
                            }
                                    ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                    <h3>Thông Tin Đơn Hàng</h3>
                    
                      <?php   if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){ 
                        $donhang=getshowdonhang($_SESSION['iddh']);
                        if(count($donhang)>0){
                        ?>
                            <h3>Mã Đơn Hàng: <br><?=$donhang[0]['madh'] ?> </h3>
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                  <tr>
                                    <td><strong>Tên Người Nhận:</strong><br><?=$donhang[0]['hoten'] ?></td> 
                                    </tr>
                                </div>
                                <div class="col-12 mb-20">
                                <tr>
                                    <td><strong>Email Người Nhận:</strong><br><?=$donhang[0]['email'] ?></td> 
                                    </tr>
                                </div>
                                <div class="col-12 mb-20">
                                <tr>
                                    <td><strong>Địa Chỉ Người Nhận:</strong><br><?=$donhang[0]['diachi'] ?></td> 
                                    </tr>
                                </div>
                                <div class="col-12 mb-20">
                                    <tr>
                                        <td><Strong>Phương Thức Thanh Toán:</Strong> <br><?=$donhang[0]['pttt'] ?>
                                    <?php 
                                    
                                  /*  switch($donhang[0]['pttt']){
                                        case '1':
                                            $tvhh="Thanh Toán Khi Nhận Hàng";
                                        
                                        }
                                        echo $tvhh;
                                  */
                                    ?>
                                    </td>
                               </tr>
                                </div>
                                <div class="col-lg-6 mb-20">
                                <tr>
                                    <td><strong>Số Điện Thoại:</strong><br><?=$donhang[0]['sdt'] ?></td> 
                                    </tr>

                                </div>
                                <div class="col-12 mb-20">
                                    <style>
                                        .dh{
                                            color: brown;
                                        }
                                    </style>
                                <tr>
                                    <td class="dh"><strong  class="dh">Trạng Thái Đơn Hàng:</strong><br><?=$donhang[0]['trangthai'] ?></td> 
                                    </tr>
                                </div>
                                <?php
                                if($donhang[0]['trangthai']=='Đang xử lý'  ){
                                        echo ' <button>Huỷ</button>';
                                }
                                ?>
                               
                         
                        </div>
                        </div>
                        </div>
                  </form>
                  <?php
                        }
                }
                ?>
                </div>
                    </div>
                        </div>
                            </div>
                                </div>
    <!--Checkout page section end-->
    <?php include '../layout/body7.php'; ?>




    

