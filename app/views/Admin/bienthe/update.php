<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=updatebt" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Cập nhật Biến Thể</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
              <div class="form-group">
                <label for="masp">Mã Biến Thể</label>
                <input type="text" id="masp" name="idbt" class="form-control" readonly value="<?= isset($id_bt) ? $id_bt: '' ?>">
              </div>
                <label for="masp">Mã Sản Phẩm</label>
                <input type="text" id="masp" name="idsp" class="form-control" value="<?= isset($id_sp) ? $id_sp: '' ?>">
              </div>
              <div class="form-group">
                <label for="tensp">Tên Sản Phẩm</label>
                <input type="text" id="tensp" name="tensp" class="form-control" value="<?= isset($ten_sp) ? $ten_sp: '' ?>">
              </div>
              <div class="form-group">
                <label for="giasp">Giá Sản Phẩm</label>
                <input type="text" id="giasp" name="giasp" class="form-control" value="<?= isset($gia_sp) ? $gia_sp: '' ?>">
              </div>
              <div class="form-group">
                <label for="mota">Mô Tả</label>
                <input type="text" id="mota" name="motasp" class="form-control" value="<?= isset($mota_sp) ? $mota_sp: '' ?>">
              </div>
              <div class="form-group">
                <label for="size">Size</label>
                <input type="text" id="size" name="szsp" class="form-control" value="<?= isset($sz_sp) ? $sz_sp: '' ?>">
              </div>
              <div class="form-group">
                <label for="mausp">Mầu sản phẩm</label>
                <input type="text" id="mausp" name="mausp" class="form-control" value="<?= isset($mau_sp) ? $mau_sp: '' ?>">
              </div>
              <div class="form-group">
                <label for="soluong">Số Lượng Sản Phẩm</label>
                <input type="text" id="soluong" name="soluongsp" class="form-control" value="<?= isset($soluong_sp) ? $soluong_sp: '' ?>">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Còn Đủ</option>
                  <option>Hết hàng</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger"name="capnhat" value="Cập nhật biến thể">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=bienthe"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
       </from>
            </div>
            <!-- /.card-body -->
          </div>