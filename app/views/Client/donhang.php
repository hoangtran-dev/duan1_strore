<style>
    .hvt input:hover{
        background-color: r;
    }
</style>
<?php
$vh=$_SESSION['ten_taikhoan'];
?>

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
                            <h3>Sản Phẩm Đã Chọn</h3>
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

                                   <!-- <h3>id donhang :<//?//=/*$iddh*///?//></h3>-->
                              
                                    <?php
                                    
                                    if((isset($_SESSION["cart"])) && (count($_SESSION['cart'])>0)){
                                    // $hinhSP = "../../../../public/assets/dist/img/admin/sanpham/".$img_sp;
                                   
                                       echo'  
                                       <tr>
                                      
                                       <th class="product_thumb">Ảnh</th>
                                       <th class="product_name">Tên</th>
                                       <th class="product-price">Giá</th>
                                       <th class="product_quantity">Số Lượng</th>
                                       <th class="product_total">Thành Tiền</th>
                                  
                                   </tr>';
                                   $tong=0;
                                   $i=0;
                                   foreach ($_SESSION["cart"] as $item){
                                
                                    $tt=$item[3] * $item[4] ;
                                    $tong+=$tt;
                                  echo'<tr>
                               
                                       <td class="product_thumb"><img src="'.$item[2].'" alt=""></td>
                                       <td class="product_name">'.$item[1].'</td>
                                       <td class="product-price">'.$item[3].'.VNĐ</td>
                                       <td class="product_quantity">'.$item[4].'</td>
                                       <td class="product_total">'.$tt.'.000.VNĐ</td>
                                      
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
                                    ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>

                
                       <a href="../ClientController/ClientController.php?act=addcart"><input class="hvt" type="submit" value="Quay Lại"  style="background-color:#FFCC66;"></a> 
            </div>
        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                    
                    <button style="margin-bottom: 30px;"><p class="thongbao" style="color: red; width: 400px ">
                    <?php 
                         if(isset($thongbao) && ($thongbao != "")) {
                         echo $thongbao;
                        }
                        ?>
                       </p></button>
                        
                    <form action="../ClientController/ClientController.php?act=thanhtoan" method="post">
                        
                            <h3>Thông Tin Người Đặt</h3>
                            <div class="row">
                            <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                                <div class="col-lg-6 mb-20">
                                    <label>Họ Tên <span>*</span></label>
                                    <input type="text" value="<?php echo $vh['ho_ten'] ?>" name="hoten">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Email<span>*</span></label>
                                    <input type="text"  value="<?php echo $vh['email'] ?>" name="email">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Địa Chỉ <span>*</span></label>
                                    <input  type="text" name="diachi" value="<?php  echo $vh['dia_chi'] ?>">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Phương thức Thanh Toán <span>*</span></label> <br>
                                    <input type="radio" name="pttt" value="Thanh Toán Khi Nhận Hàng"required style="width: 20px; height: 20px;" > Thanh Toán Khi Nhận hàng <br>
                                    <input type=""  style="width: 20px; height: 20px;"> Thanh Toán Online <span style="color: red;">(Tính Năng Chưa Cập Nhật) </span> <br>
                                    
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Số Điện Thoại<span>*</span></label>
                                    <input  type="text" name="sdt" value="<?php  echo $vh['sdt'] ?>">

                                </div>
                                <div class="col-12 mb-20">
                                </div>
                                <div class="col-12 mb-20">
                                </div>
                                <div class="payment_method">  
                                </div>
                                <div class="order_button">
                            <input class="hvt" type="submit" value="Thanh Toán" name="thanhtoan" style="background-color:#FFCC66;">
                        </div>
                        </div>

                        </div>
                   
                  </form>
                </div>
                    </div>
                        </div>
                            </div>
                                </div>
    <!--Checkout page section end-->
    <?php include '../layout/body7.php'; ?>