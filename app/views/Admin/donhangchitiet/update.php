<?php
if (isset($ct) && is_array($ct)) {
    extract($ct);
}

?>





<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=updatedhct" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Cập nhật đơn hàng Tiết Hoá Đơn</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="madh">ID đơn hàng chi tiết</label>
                <input type="text" id="madh" name="id_dhct" class="form-control" readonly value="<?= isset($id_dhct) ? $id_dhct: '' ?>">
              </div>
              <div class="form-group">
                <label for="madh">ID đơn hàng</label>
                <input type="text" id="madh" name="iddh" class="form-control" value="<?= isset($iddh) ? $iddh: '' ?>">
              </div>
              <div class="form-group">
                <label for="mabt">ID Sản Phẩm</label>
                <input type="text" id="mabt" name="id_sp" class="form-control" value="<?= isset($id_sp) ? $id_sp: '' ?>">
              </div>
              <div class="form-group">
                <label for="soluong">Số lượng sản phẩm</label>
                <input type="text" id="soluong" name="soluongsp" class="form-control" value="<?= isset($soluongsp) ? $soluongsp: '' ?>">
              </div>
             
              <div class="form-group">
                <label for="tongtien">Giá Sản phẩm</label>
                <input type="text" id="tongtien" name="gia_sp" class="form-control" value="<?= isset($tgia_sp) ? $tgia_sp: '' ?>">
              </div>

              <div class="form-group">
                <label for="tongtien">Tên Sản Phẩm</label>
                <input type="text" id="tongtien" name="ten_sp" class="form-control" value="<?= isset($ten_sp) ? $ten_sp: '' ?>">
              </div>
             
              <div class="form-group">
                <label for="anh">Ảnh sản phẩm</label>
                <input type="file" id="anh" name="img" value="<?= isset($img_sp) ? $img_sp: '' ?>"> 
              </div>
              <input type="submit" class="btn btn-outline-danger" name = "capnhat" value="Cập Nhật Don Hang Chi Tiet" required>
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=donhangchitiet"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
              
            </div>
            <!-- /.card-body -->
          </div>