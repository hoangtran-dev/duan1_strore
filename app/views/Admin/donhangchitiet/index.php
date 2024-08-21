
<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Lịch Sử Chi Tiết Đơn hàng</h3>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID Đơn Hàng</th>
          <th>ID kh</th>
          <th>Mã Đơn Hàng</th>
          <th>Họ Tên</th>
          <th>Địa Chỉ</th>
          <th>Email</th>
          <th>Số Điện Thoại</th>
          <th>Trạng Thái</th>
         
        </tr>
        </thead>
        <tbody>
        <?php
                   $vh=loadone_donhang($iddh);
                        ?>
                            <td><?php echo $vh['iddh'] ?></td>
                            <td><?php echo $vh['id_kh'] ?></td>
                            <td><?php echo $vh['madh'] ?></td>
                            <td><?php echo $vh['hoten'] ?></td>
                            <td><?php echo $vh['diachi'] ?></td>
                            <td><?php echo $vh['email'] ?></td>
                            <td><?php echo $vh['sdt'] ?></td>
                            <td><?php echo $vh['trangthai'] ?></td>
                    
            
                   <?php  
                    ?>
        </tbody>
       
      </table>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Ảnh Sản Phẩm</th>
          <th>Số Lượng Sản phẩm</th>
          <th>Giá Sản Phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Phương Thức Thanh Toán</th>
         
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
        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>