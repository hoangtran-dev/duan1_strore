<?php
if (isset($dm) && is_array($dm)) {
    extract($dm);
}

?>
<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=updatedm" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Sửa Danh Mục</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="madm">Mã danh mục</label>
                <input type="text" id="madm" name="id_dm" class="form-control" readonly value="<?= isset($id_dm) ? $id_dm : '' ?>">
              </div>
              <div class="form-group">
                <label for="tendm">Tên Danh Mục</label>
                <input type="text" id="tendm" name="tendm" class="form-control" value="<?= isset($ten_dm) ? $ten_dm : '' ?>">
              </div>
              <div class="form-group">
                <label for="anhdm">Ảnh Danh Mục</label>
                <input type="file" id="anhdm" name="img" value="<?= isset($img_dm) ? $img_dm :'' ?>">
              </div>
              <div class="form-group">
                <label for="mota">Mô Tả</label>
                <input type="text" id="mota" class="form-control" name="mota" value="<?= isset($mota) ? $mota : '' ?>">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select" value="<?= isset($trang_thai) ? $trang_thai : '' ?>">
                  <option disabled>Chọn 1</option>
                  <option>Đã Cập nhật</option>
                  <option>Chuẩn Bị Cập Nhật</option>             
                </select>
              </div>

              <input type="submit" name="capnhat" class="btn btn-outline-danger" value="Cập nhật" >
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
              <a href="../AdminController/AdminController.php?act=danhmuc"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
</form>
            </div>
            <!-- /.card-body -->
          </div>
