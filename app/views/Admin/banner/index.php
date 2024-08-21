
<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Lý Banner</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã Banner</th>
          <th>Tên Banner</th>
          <th>Ảnh Banner</th>
          <th>Link</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($listbanner as $bner) :
                      $hinh= "../../../../public/assets/dist/img/admin/banner/".$bner['img'];
                        ?> <tr>
                            <td><?php echo $bner['id_banner'] ?></td>
                            <td><?php echo $bner['ten_banner'] ?></td>
                            <td><img src="<?= $hinh ?>" alt="" style="width:100px;height: 100px"></td>
                            <td><?php echo $bner['link'] ?></td>
                            <td><?php echo $bner['trang_thai'] ?></td>
                          
                            <td> <a class="btn btn-outline-danger" href="AdminController.php?act=addbn">Thêm</a></a>
                              <a href="AdminController.php?act=suabn&id_banner=<?php echo $bner['id_banner'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoabn&id_banner=<?php echo $bner['id_banner'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-dark">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã Banner</th>
          <th>Tên Banner</th>
          <th>Ảnh Banner</th>
          <th>Link</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
