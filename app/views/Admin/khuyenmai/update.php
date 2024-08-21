<?php
if (isset($km) && is_array($km)) {
    extract($km);
}

?>


<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=updatekm" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm thông Khuyến mãi</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputName">ID khuyến Mãi</label>
                <input type="text" id="inputName" name="idkm" class="form-control" readonly value="<?= isset($id_km) ? $id_km: '' ?>">
              </div>
            <div class="form-group">
                <label for="inputName">Mã khuyến mãi</label>
                <input type="text" id="inputName" name="makm" class="form-control" value="<?= isset($ma_km) ? $ma_km: '' ?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Phần trăm khuyến mãi</label>
                <input type="text" id="inputName" name="phan_tram_km" class="form-control" value="<?= isset($phan_tram_km) ? $phan_tram_km: '' ?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ngày bắt đầu</label>
                <input type="date" id="inputClientCompany" name="ngay_bd" class="form-control" value="<?= isset($ngay_bd) ? $ngay_bd: '' ?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ngày kết thúc</label>
                <input type="date" id="inputClientCompany" name="ngay_kt" class="form-control" value="<?= isset($ngay_kt) ? $ngay_kt: '' ?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Mô tả</label>
                <input type="text" id="inputClientCompany" name="mota" class="form-control" value="<?= isset($mota) ? $mota: '' ?>">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Trạng thái</label>
                <select id="inputStatus" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Còn Khuyến mãi</option>
                  <option>Hết Khuyến mãi</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name ="capnhat" value="Cập nhật " required>
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=khuyenmai"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
            </form>
            </div>
            <!-- /.card-body -->
          </div>