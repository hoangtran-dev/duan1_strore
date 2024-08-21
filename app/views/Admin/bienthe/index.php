<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Lý Biến Thể</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã Biến Thể</th>
          <th>Mã Sản Phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Giá Sản Phẩm</th>
          <th>Mô Tả</th>
          <th>Size</th>
          <th>Mầu</th>
          <th>Số Lượng</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($listbienthe as $bt) :
                        ?> <tr>
                            <td><?php echo $bt['id_bt'] ?></td>
                            <td><?php echo $bt['id_sp'] ?></td>
                            <td><?php echo $bt['ten_sp'] ?></td>
                            <td><?php echo $bt['gia_sp'] ?></td>
                            <td><?php echo $bt['mota_sp'] ?></td>
                            <td><?php echo $bt['sz_sp'] ?></td>
                            <td><?php echo $bt['mau_sp'] ?></td>
                            <td><?php echo $bt['soluong_sp'] ?></td>
                            <td><?php echo $bt['trang_thai'] ?></td>
                            <td> <a class="btn btn-outline-danger" href="AdminController.php?act=addbt">Thêm</a></a>
                              <a href="AdminController.php?act=suabt&id_bt=<?php echo $bt['id_bt'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoabt&id_bt=<?php echo $bt['id_bt'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-dark">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>

        </tbody>
        <tfoot>
        <tr>
        <th>Mã Biến Thể</th>
          <th>Mã Sản Phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Giá Sản Phẩm</th>
          <th>Mô Tả</th>
          <th>Size</th>
          <th>Mầu</th>
          <th>Số Lượng</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>