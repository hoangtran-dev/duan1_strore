<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Lý Đơn hàng</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a class="btn btn-outline-danger" href="AdminController.php?act=adddh">Thêm</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID Đơn Hàng</th>
          <th>ID kh</th>
          <th>Mã Đơn Hàng</th>
          <th>Phương Thức Thanh Toán</th>
          <th>Tổng Hoá Đơn</th>
          <th>Họ Tên</th>
          <th>Địa Chỉ</th>
          <th>Email</th>
          <th>Số Điện Thoại</th>
          <th>Trạng Thái</th>
        </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($listdonhang as $dh):
                      
                        ?> <tr>
                            <td><?php echo $dh['iddh'] ?></td>
                            <td><?php echo $dh['id_kh'] ?></td>
                            <td><?php echo $dh['madh'] ?></td>
                            <td><?php echo $dh['pttt'] ?></td>
                            <td><?php echo $dh['tongdonhang'] ?></td>
                            <td><?php echo $dh['hoten'] ?></td>
                            <td><?php echo $dh['diachi'] ?></td>
                            <td><?php echo $dh['email'] ?></td>
                            <td><?php echo $dh['sdt'] ?></td>
                            <td><?php echo $dh['trangthai']?></td>
                            <td><a href="../AdminController/AdminController.php?act=donhangchitiet&iddh=<?php echo $dh['iddh'];?>"><button type="button" class="btn btn-outline-danger">Chi Tiết</button></a>
                              <a href="AdminController.php?act=suadh&iddh=<?php echo $dh['iddh'];?>"><button type="sunmit" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoadh&iddh=<?php echo $dh['iddh'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
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
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>