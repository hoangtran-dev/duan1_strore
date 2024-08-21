
<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Trị Danh Mục</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a class="btn btn-outline-danger" href="AdminController.php?act=adddm">Thêm</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã Danh Mục</th>
          <th>Tên Danh Mục</th>
          <th>Ảnh Danh Mục</th>
          <th>Mô tả</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
    <?php
                    foreach ($listdanhmuc as $dm) :

                    $hinh= "../../../../public/assets/dist/img/admin/danhmuc/".$dm['img_dm'];
                        ?> <tr>
                            <td><?php echo $dm['id_dm'] ?></td>
                            <td><?php echo $dm['ten_dm'] ?></td>
                            <td><img src="<?= $hinh ?>" alt="" style="width:100px;height: 100px"></td>
                            <td><?php echo $dm['mota'] ?></td>
                            <td><?php echo $dm['trang_thai'] ?></td>
                            <td>
                              <a href="AdminController.php?act=suadm&id_dm=<?php echo $dm['id_dm'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoadm&id_dm=<?php echo $dm['id_dm'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-danger">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã Danh Mục</th>
          <th>Tên Danh Mục</th>
          <th>Ảnh Danh Mục</th>
          <th>Mô tả</th>
          <th>Trạng Thái</th>
          <th>Thao Tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
  
    <!-- /.card-body -->
  </div>
</div>
