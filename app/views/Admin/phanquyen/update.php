<?php
if (isset($pq) && is_array($pq)) {
    extract($pq);
}

?>



<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=uppq" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Phân Quyền</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="tenchucvu">ID Chức vụ</label>
                <input type="text" id="tenchucvu" name="idpq" class="form-control" value="<?= isset($id_pq) ? $id_pq: '' ?>">
              </div>
              <div class="form-group">
                <label for="tenchucvu">Tên Chức Vụ</label>
                <input type="text" id="tenchucvu" name="tenchucvu" class="form-control" value="<?= isset($ten_chuc_vu) ? $ten_chuc_vu: '' ?>">
              </div>
              <div class="form-group">
                <label for="mota">Mô Tả</label>
                <input type="text" id="mota" name="mota" class="form-control" value="<?= isset($mo_ta) ? $mo_ta: '' ?>">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Còn Hoạt Động</option>
                  <option>Không Hoạt Động</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name = "capnhat" value="Cập nhật Phân Quyền" required>
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=phanquyen"><button type="button" class="btn btn-outline-danger" > Danh Sách</button></a>
              </form>
            </div>
            <!-- /.card-body -->
          </div>