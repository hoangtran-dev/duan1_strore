

<style>
    .hvt input:hover{
        background-color: r;
    }
</style>
<div class="card">
    <div class="card-header" style="background-color: #FFCC66;">
      <h3 class="card-title">Chi Tiết Đơn Hàng</h3>
    </div>
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
                                                <thead >
                                            <tr>
                                        
                                            <th class="product_thumb">Ảnh</th>
                                            <th class="product_quantity">Số Lượng</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_name">Tên</th>
                                            <th class="product_total">Phương Thức Thanh Toán</th>
                                        </tr> 
                                    </thead>
                            
                                    <tbody>
                                    <?php
                       $listdh=loadone_donhangchitiet($iddh);
                        foreach($listdh as $lst){
                            $hinh=$lst['img_sp'];
                       
                        ?> <tr>
                            <td><img src="<?= $hinh ?>" alt="" style="width:150px;height: 150px"></td>
                            <td><?php echo $lst['soluongsp'] ?></td>
                            <td><?php echo $lst['gia_sp'] ?></td>
                            <td><?php echo $lst['ten_sp'] ?></td>
                            <td><?php echo $lst['pttt'] ?></td>

                           
                    </tr>
            
                   <?php  
                        }
                    ?>
                     <tfoot>
        <tr>
        <th>Tổng Đơn Hàng</th>
        <th colspan="0"><td><?php echo $lst['tongdonhang'].'.000'.'VNĐ'?></td></th>
    
        </tr>
        </tfoot>
                               
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>


            <div class="col-lg-6 col-md-6">
                    <h3>Thông Tin Đơn Hàng</h3>
                    
                      <?php  
                       $vh=loadone_donhang($iddh);
                        ?>
                            <h3>Mã Đơn Hàng: <br><?php echo $vh['madh'] ?> </h3>
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                  <tr>
                                    <td><strong>Tên Người Nhận:</strong><br><?php echo $vh['hoten'] ?></td> 
                                    </tr>
                                </div>
                                <div class="col-12 mb-20">
                                <tr>
                                    <td><strong>Email Người Nhận:</strong><br><?php echo $vh['email'] ?></td> 
                                    </tr>
                                </div>
                                <div class="col-12 mb-20">
                                <tr>
                                    <td><strong>Địa Chỉ Người Nhận:</strong><br><?php echo $vh['diachi'] ?></td> 
                                    </tr>
                                </div>
                               
                                <div class="col-lg-6 mb-20">
                                <tr>
                                    <td><strong>Số Điện Thoại:</strong><br><?php echo $vh['sdt'] ?></td> 
                                    </tr>
                                </div>
                                <div class="col-12 mb-20">
                                <td><strong>Trạng Thái:</strong><br><?php echo $vh['trangthai'] ?></td> 
                                   </div>
                                   <?php
                                if( $vh['trangthai']=='Đang xử lý'  ){
                                        echo ' <button>Huỷ</button>';
                                }
                                ?>
                               
                        </div>
                         </div>
                           </div>
                  </form>
                  <?php
                        
                
                ?>
                </div>
                    </div>
                        </div>
                            </div>
                                </div>
                                <?php include '../layout/body7.php'; ?>