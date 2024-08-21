
<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Lý Bài Viết</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã Bài Viết</th>
          <th>Tên Bài Viết</th>
          <th>Nội Dung</th>
          <th>Ảnh Bài Viết</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
    <?php
                    foreach ($listbaiviet as $bv) :
                      $hinh= "../../../../public/assets/dist/img/admin/baiviet/".$bv['img_bv'];
                        ?> <tr>
                            <td><?php echo $bv['id_bv'] ?></td>
                            <td><?php echo $bv['ten_bai_viet'] ?></td>
                            <td><?php echo $bv['noi_dung'] ?></td>
                            <td><img src="<?= $hinh ?>" alt="" style="width:100px;height: 100px"></td>
                            <td><?php echo $bv['trang_thai'] ?></td>
                            <td> <a class="btn btn-outline-danger" href="AdminController.php?act=addbv">Thêm</a></a>
                              <a href="AdminController.php?act=suabv&id_bv=<?php echo $bv['id_bv'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoabv&id_bv=<?php echo $bv['id_bv'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-dark">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã Bài Viết</th>
          <th>Tên Bài Viết</th>
          <th>Nội Dung</th>
          <th>Ảnh Bài Viết</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
