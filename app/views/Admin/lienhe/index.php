<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Trị Liên Hệ </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã liên hệ</th>
          <th>Tên Khách hàng</th>
          <th>Email</th>
          <th>Số Điện Thoại</th>
          <th>Nội Dung</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($listlienhe as $lh):
                      extract($lh);
                        ?> <tr>
                          <td><?php echo $lh['id_lh'] ?></td>
                            <td><?php echo $lh['ten_khachhang'] ?></td>
                            <td><?php echo $lh['email'] ?></td>
                            <td><?php echo $lh['sdt'] ?></td>
                            <td><?php echo $lh['noi_dung'] ?></td>
                            <td><?php echo $lh['trang_thai'] ?></td>
                            <td>
                            <a class="btn btn-outline-danger" href="AdminController.php?act=addlh">Thêm</a>
                              <a href="AdminController.php?act=sualh&id_lh=<?php echo $lh['id_lh'];?>"><button type="sunmit" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoalh&id_lh=<?php echo $lh['id_lh'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="submit" class="btn btn-outline-danger">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã liên hệ</th>
          <th>Tên Khách hàng</th>
          <th>Email</th>
          <th>Số Điện Thoại</th>
          <th>Nội Dung</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>