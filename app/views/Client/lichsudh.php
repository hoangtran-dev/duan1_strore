<div class="content-wrapper">

<div class="card" >
    <div class="card-header" style="background-color: #FFCC66;">
      <h3 class="card-title" >Lịch Sử Đơn Hàng</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped" >
        <thead style="background-color:#99FFCC">
        <tr>
          <th>ID Đơn Hàng</th>
          <th>Mã Đơn Hàng</th>
          <th>Phương Thức Thanh Toán</th>
          <th>Tổng Hoá Đơn</th>
          <th>Họ Tên</th>
          <th>Địa Chỉ</th>
          <th>Email</th>
          <th>Số Điện Thoại</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
    
                    foreach ($id_kh as $dh):
                      
                        ?> <tr>
                            <td><?php echo $dh['iddh'] ?></td>
                            <td><?php echo $dh['madh'] ?></td>
                            <td><?php echo $dh['pttt'] ?></td>
                            <td><?php echo $dh['tongdonhang'].'.000'?></td>
                            <td><?php echo $dh['hoten'] ?></td>
                            <td><?php echo $dh['diachi'] ?></td>
                            <td><?php echo $dh['email'] ?></td>
                            <td><?php echo $dh['sdt'] ?></td>
                            <td><?php echo $dh['trangthai'] ?></td>
                            <td> 
                            <a href="../ClientController/ClientController.php?act=showdhct&iddh=<?php echo $dh['iddh'];?>"><button type="button" class="btn btn-outline-danger" >Chi Tiết Đơn Hàng</button></a>

                           
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot style="background-color:#99FFCC">
        <tr>
          <th>ID Đơn Hàng</th>
          <th>Mã Đơn Hàng</th>
          <th>Phương Thức Thanh Toán</th>
          <th>Tổng Hoá Đơn</th>
          <th>Họ Tên</th>
          <th>Địa Chỉ</th>
          <th>Email</th>
          <th>Số Điện Thoại</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
<?php include '../layout/body7.php'; ?>