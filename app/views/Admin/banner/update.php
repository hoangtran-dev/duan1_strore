<?php
if (isset($bn) && is_array($bn)) {
    extract($bn);
}

?>

<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=updatebn" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Sửa Banner</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputName">Mã Banner</label>
                <input type="text" id="inputName" name="id_banner" class="form-control" value="<?= isset($id_banner) ? $id_banner: '' ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Tên Banner</label>
                <input type="text" id="inputName" name="tenbanner" class="form-control" value="<?= isset($ten_banner) ? $ten_banner: '' ?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Ảnh Banner</label>
                <input type="file"img name="img"  value="<?= isset($hinh) ? $hinh: '' ?>">>
              </div>
              <div class="form-group">
                <label for="inputStatus">Link</label>
                <input type="text" id="inputName" name="link" class="form-control" value="<?= isset($link) ? $link : '' ?>">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Trạng thái</label>
                <select id="inputStatus" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Hoạt Động</option>
                  <option>Không Hoạt Dộng</option>              
                </select>
              </div>
              <input type="submit" name="capnhat" class="btn btn-outline-danger" value="Cập nhật" >
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
              <a href="../AdminController/AdminController.php?act=banner"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
</form>
            </div>
            <!-- /.card-body -->
          </div>