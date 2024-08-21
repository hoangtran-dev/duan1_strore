<?php
if (isset($nd) && is_array($nd)) {
    extract($nd);
}

?>

<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=updatend" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Cập Nhật Người Dùng</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="taikhoan">ID Nội Dung</label>
                <input type="text" id="taikhoan" name="idnd" class="form-control" value="<?= isset($id_nd) ? $id_nd: '' ?>">
              </div> 
              <div class="form-group">
                <label for="taikhoan">Tài Khoản</label>
                <input type="text" id="taikhoan" name="taikhoan" class="form-control" value="<?= isset($tai_khoan) ? $tai_khoan: '' ?>">
              </div> 
              <div class="form-group">
                <label for="matkhau">Mật Khẩu</label>
                <input type="text" id="matkhau" name="matkhau" class="form-control" value="<?= isset($mk_nd) ? $mk_nd: '' ?>">
              </div>
              <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id="hoten" name="hoten" class="form-control" value="<?= isset($hoten_nd) ? $hoten_nd: '' ?>">
              </div>
              <div class="form-group">
                <label for="ngaysinh">Ngày Sinh</label>
                <input type="text" id="ngaysinh" name="ngaysinh" class="form-control" value="<?= isset($ngaysinh_nd) ? $ngaysinh_nd: '' ?>">
              </div>
              <div class="form-group">
                <label for="sdt">Số Điện Thoại</label>
                <input type="text" id="sdt" name="sdt" class="form-control" value="<?= isset($sdt_nd) ? $sdt_nd: '' ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="<?= isset($email_nd) ? $email_nd: '' ?>">
              </div>
              <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" name="diachi" class="form-control" value="<?= isset($diachi_nd) ? $diachi_nd: '' ?>">
              </div>
              <div class="form-group">
                <label for="chucvu">Chức Vụ</label>
              <select id="chucvu" name="id_pq" class="form-control custom-select" value="<?= isset($idpq) ? $idpq: '' ?>">
              <?php
                $listnd=loadall_phanquyen();
             foreach ($listnd as $phanquyen):
                extract($phanquyen);
              ?>
              <option value="<?= $id_pq ?>">
                <?= $ten_chuc_vu ?>
              </option>
            <?php endforeach ?>         
                </select>
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai_nd" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Còn Hoạt Động</option>
                  <option>Không hoạt động</option>              
                </select>
              </div>

              
              <input type="submit" class="btn btn-outline-danger" name="capnhat" value="Cập Nhật Người Dùng">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=nguoidung"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
        </from>
            </div>
            <!-- /.card-body -->
          </div>