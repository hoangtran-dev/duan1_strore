
<div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Quản Trị Bình Luận</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Mã Bình Luận</th>
          <th>Mã Khách hàng</th>
          <th>Mã Sản Phẩm</th>
          <th>Nội Dung</th>
          <th>Điểm</th>
          <th>Ngày Đánh Giá</th>
          <th>Trạng Thái</th>
        </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($listbl as $bl) :
                        ?> <tr>
                            <td><?php echo $bl['id_bl'] ?></td>
                            <td><?php echo $bl['id_kh'] ?></td>
                            <td><?php echo $bl['id_sp'] ?></td>
                            <td><?php echo $bl['noi_dung'] ?></td>
                            <td><?php echo $bl['diem'] ?></td>
                            <td><?php echo $bl['ngay_danh_gia'] ?></td>
                            <td><?php echo $bl['trang_thai'] ?></td>
                    </tr>
                   <?php endforeach;
                    ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Mã Bình Luận</th>
          <th>Mã Khách hàng</th>
          <th>Mã Sản Phẩm</th>
          <th>Nội Dung</th>
          <th>Điểm</th>
          <th>Ngày Đánh Giá</th>
          <th>Trạng Thái</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
