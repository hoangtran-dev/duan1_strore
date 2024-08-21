<?php
if (isset($lh) && is_array($lh)) {
    extract($lh);
}

?>



<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=updatelh" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Cập Nhật thông tin Liên hệ</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="makh">Mã Liên Hệ</label>
                <input type="text" id="makh" name="idlh" class="form-control" readonly value="<?= isset($id_lh) ? $id_lh: '' ?>">
              </div>
              <div class="form-group">
                <label for="makh">Tên khách hàng</label>
                <input type="text" id="makh" name="ten_khachhang" class="form-control" value="<?= isset($ten_khachhang) ? $ten_khachhang: '' ?>">
              </div>
              <div class="form-group">
                <label for="makh">Email</label>
                <input type="text" id="makh" name="email" class="form-control" value="<?= isset($email) ? $email: '' ?>">
              </div>
              <div class="form-group">
                <label for="makh">Số Điện Thoại</label>
                <input type="text" id="makh" name="sdt" class="form-control" value="<?= isset($sdt) ? $sdt: '' ?>">
              </div>
              <div class="form-group">
                <label for="noidung">Nội dung</label>
             
                <textarea name="noidung" id="" cols="30" class="form-control" rows="10"><?= isset($noi_dung) ? $noi_dung: '' ?></textarea>
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Đã liên hệ</option>
                  <option>Chưa liên hệ</option>              
                </select>
              </div>

              
              <input type="submit" class="btn btn-outline-danger"name="capnhat" value="Cập Nhật Liên Hệ">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
              <a href="../AdminController/AdminController.php?act=lienhe"><button type="button" class="btn btn-outline-danger">Danh Sách</button></a>
            </div>
            <!-- /.card-body -->
          </div>