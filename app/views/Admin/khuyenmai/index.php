
<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Lý Khuyến Mãi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID khuyễn mãi</th>
          <th>Mã Khuyễn mãi</th>
          <th>% Khuyễn Mãi</th>
          <th>Ngày Bắt Đầu</th>
          <th>Ngày Kết thúc</th>
          <th>Mô Tả</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($listkhuyenmai as $km) :
                        ?> <tr>
                            <td><?php echo $km['id_km'] ?></td>
                            <td><?php echo $km['ma_km'] ?></td>
                            <td><?php echo $km['phan_tram_km'] ?></td>
                            <td><?php echo $km['ngay_bd'] ?></td>
                            <td><?php echo $km['ngay_kt'] ?></td>
                            <td><?php echo $km['mota'] ?></td>
                            <td><?php echo $km['trang_thai'] ?></td>
                            <td> <a class="btn btn-outline-danger" href="AdminController.php?act=addkm">Thêm</a></a>
                              <a href="AdminController.php?act=suakm&id_km=<?php echo $km['id_km'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoakm&id_km=<?php echo $km['id_km'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-dark">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
     </tbody>
     <tfoot>
        <tr>
          <th>ID khuyễn mãi</th>
          <th>Mã Khuyễn mãi</th>
          <th>% Khuyễn Mãi</th>
          <th>Ngày Bắt Đầu</th>
          <th>Ngày Kết thúc</th>
          <th>Mô Tả</th>
          <th>Trạng Thái</th>
          <th>Thao tác</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
