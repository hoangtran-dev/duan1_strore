<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Lý Khách Hàng</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
      <a class="btn btn-outline-danger" href="AdminController.php?act=addkh">Thêm</a></a>
        <thead>
        <tr>
          <th>Mã Khách Hàng</th>
          <th>Tên Tài Khoản</th>
          <th>Mật Khẩu</th>
          <th>Họ tên</th>
          <th>Ngày Sinh</th>
          <th>Số Điện thoại</th>
          <th>Email</th>
          <th>Địa Chỉ</th>
          <th>Quyền Người Dùng</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($listkhachhang as $kh) :
                        ?> <tr>
                            <td><?php echo $kh['id_kh'] ?></td>
                            <td><?php echo $kh['ten_taikhoan'] ?></td>
                            <td><?php echo $kh['mat_khau'] ?></td>
                            <td><?php echo $kh['ho_ten'] ?></td>
                            <td><?php echo $kh['ngay_sinh']?></td>
                            <td><?php echo $kh['sdt']?></td>
                            <td><?php echo $kh['email']?></td>
                            <td><?php echo $kh['dia_chi']?></td>
                            <td><?php echo $kh['quyen_nd']?></td>
                            <td><?php echo $kh['trang_thai'] ?></td>
                            
                            <td>
                              <a href="AdminController.php?act=suakh&id_kh=<?php echo $kh['id_kh'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoakh&id_kh=<?php echo $kh['id_kh'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-danger">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã Khách Hàng</th>
          <th>Tên Khách Hàng</th>
          <th>Mật Khẩu</th>
          <th>Họ tên</th>
          <th>Ngày Sinh</th>
          <th>Số Điện thoại</th>
          <th>Email</th>
          <th>Địa Chỉ</th>
          <th>Quyền Người Dùng</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </tfoot>
      </table>
      <a class="btn btn-outline-danger" href="AdminController.php?act=addkh">Thêm</a></a>
    </div>
    <!-- /.card-body -->
  </div>
</div>