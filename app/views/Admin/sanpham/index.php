
<div class="content-wrapper">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Trị Sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã Sản Phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Ảnh Sản Phẩm</th>
          <th>Mô tả</th>
          <th>Giá Sản Phẩm</th>
          <th>Ngày Nhập</th>
          <th>Số Lượng</th>
          <th>Mã danh mục</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
    <?php
                    foreach ($listjoin_sp as $sp) :
                      $hinh= "../../../../public/assets/dist/img/admin/sanpham/".$sp['img_sp'];
                        ?> <tr>
                            <td><?php echo $sp['id_sp'] ?></td>
                            <td><?php echo $sp['ten_sp'] ?></td>
                            <td><img src="<?= $hinh ?>" alt="" style="width:100px;height: 100px"></td>
                            <td><?php echo $sp['mota_sp'] ?></td>
                            <td><?php echo $sp['gia_sp'] ?></td>
                            <td><?php echo $sp['ngay_nhap'] ?></td>
                            <td><?php echo $sp['soluong_sp'] ?></td>
                            <td><?php echo $sp['ten_dm'] ?></td>
                            <td><?php echo $sp['trangthai'] ?></td>
                            <td>
                              <a href="AdminController.php?act=suasp&id_sp=<?php echo $sp['id_sp'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoasp&id_sp=<?php echo $sp['id_sp'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-dark">Xóa</button></a>
                              <a href="../AdminController/AdminController.php?act=bienthe"><button type="button" class="btn btn-outline-danger">Biến thể</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã Sản Phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Ảnh Sản Phẩm</th>
          <th>Mô tả</th>
          <th>Giá Sản Phẩm</th>
          <th>Ngày Nhập</th>
          <th>Số Lượng</th>
          <th>Mã danh mục</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <a class="btn btn-outline-danger" href="AdminController.php?act=addsp">Thêm</a>
    <!-- /.card-body -->
  </div>
</div>



