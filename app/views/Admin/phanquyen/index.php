<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Trị Phân Quyền</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a class="btn btn-outline-danger" href="AdminController.php?act=addpq">Thêm</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã Phân Quyền</th>
          <th>Tên Chức Vụ</th>
          <th>Mô tả</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
      <?php 
        foreach ($listphanquyen as $pq) :
                        ?> <tr>
                            <td><?php echo $pq['id_pq'] ?></td>
                            <td><?php echo $pq['ten_chuc_vu'] ?></td>
                            <td><?php echo $pq['mo_ta'] ?></td>
                            <td><?php echo $pq['trang_thai'] ?></td>
                            <td>
                              <a href="AdminController.php?act=suapq&id_pq=<?php echo $pq['id_pq'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoapq&id_pq=<?php echo $pq['id_pq'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-danger">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã Phân Quyền</th>
          <th>Tên Chức Vụ</th>
          <th>Mô tả</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>