<style>

    th{
        border:1px solid black;
        text-align: center;
        background-color: gold;
    }

</style>
<div class="shopping_cart_area mt-32">
        <div class="container">
            <form action="#">
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
                                    <div class="cart_submit">
                                <button type="submit"><a href="../ClientController/ClientController.php?act=sanpham">Quay lại sản phẩm</a></button> 
                                   </div> <hr>
                                    <tbody>
                             
                                    <?php
                                    $tong=0;
                                    if((isset($_SESSION["cart"])) && (count($_SESSION['cart'])>0)){
                                    // $hinhSP = "../../../../public/assets/dist/img/admin/sanpham/".$img_sp;
                                   
                                       echo'  
                                       <tr>
                                       <th class="product_remove">Xoá</th>
                                       <th class="product_thumb">STT</th>
                                       <th class="product_thumb">Ảnh</th>
                                       <th class="product_name">Tên</th>
                                       <th class="product-price">Giá</th>
                                       <th type="number" class="product_quantity">Số Lượng</th>
                                       <th class="product_total">Thành Tiền</th>
                                    <th class="product_total">Thao Tác</th> 
                                   </tr>';
                                   $i=0;
                                   foreach ($_SESSION["cart"] as $item){
                                    $tt=$item[3] * $item[4];
                                    $tong+=$tt;
                                  echo'<tr>
                                       <td class="product_remove"><a href="../ClientController/ClientController.php?act=delcart&i='.$i.'"><i class="fa fa-trash-o"></i></a></td>
                                       <td>'.($i+1).' </td>
                                       <td class="product_thumb"><img src="'.$item[2].'" alt=""></td>
                                       <td class="product_name">'.$item[1].'</td>
                                       <td class="product-price">'.$item[3].'.VNĐ</td>
                                       <td class="product_quantity">'.$item[4].'</td>
                                       <td class="product_total">'.$tt.'.000.VNĐ</td>
                                       <td class="product_total"><a href="../ClientController/ClientController.php?act=thanhtoan">Thanh Toán</a></td>

                                   </tr>
                                   ';
                                   $i++;
                                   }
                                   echo '
                                   <tr>
                                   <td></td>
                                   <td colspan="4"><strong>Tổng Tiền</strong></td>
                                   <td ></td>
                                   <td><strong>'.$tong.'.000.VNĐ</strong></td>
                                  
                                   </tr>
                                   ';
                                   echo'
                                   <tr>
                                   <td colspan="6" class="product_total"><a href="../ClientController/ClientController.php?act=thanhtoan"><strong>Thanh Toán</strong></a></td>
                                   </tr>
                                   ';
                                }
                                    ?>
                                    
                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
           
                <!--coupon code area end-->
            </form>
        </div>
    </div>
<?php
include "../layout/body7.php";