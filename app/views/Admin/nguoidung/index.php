<div class="content-wrapper">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Lý Người Dùng</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã Người Dùng</th>
          <th>Tên Tài Khoản</th>
          <th>Mật Khẩu</th>
          <th>Họ tên</th>
          <th>Ngày Sinh</th>
          <th>Số Điện thoại</th>
          <th>Email</th>
          <th>Địa Chỉ</th>
          <th>Chức Vụ</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
          
          <?php
          
               foreach ($listnguoidung as $nd) :
                        extract($nd);
                        ?> <tr>
                            <td><?php echo $nd['id_nd'] ?></td>
                            <td><?php echo $nd['tai_khoan'] ?></td>
                            <td><?php echo $nd['mk_nd'] ?></td>
                            <td><?php echo $nd['hoten_nd'] ?></td>
                            <td><?php echo $nd['ngaysinh_nd']?></td>
                            <td><?php echo $nd['sdt_nd']?></td>
                            <td><?php echo $nd['email_nd']?></td>
                            <td><?php echo $nd['diachi_nd']?></td>
                            <td><?php echo $nd['id_pq']?></td>
                            <td><?php echo $nd['trangthai_nd'] ?></td>
                            <td>
                            <a class="btn btn-outline-danger" href="AdminController.php?act=addnd">Thêm</a></a>
                              <a href="AdminController.php?act=suand&id_nd=<?php echo $nd['id_nd'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoand&id_nd=<?php echo $nd['id_nd'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-danger">Xóa</button></a>
                            </td>
                    </tr>
              <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã Người Dùng</th>
          <th>Tên Tài Khoản</th>
          <th>Mật Khẩu</th>
          <th>Họ tên</th>
          <th>Ngày Sinh</th>
          <th>Số Điện thoại</th>
          <th>Email</th>
          <th>Địa Chỉ</th>
          <th>Chức Vụ</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>