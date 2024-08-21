<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=addbt" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Biến Thể</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="masp">Mã Sản Phẩm</label>
                <input type="text" id="masp" name="idsp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="tensp">Tên Sản Phẩm</label>
                <input type="text" id="tensp" name="tensp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="giasp">Giá Sản Phẩm</label>
                <input type="text" id="giasp" name="giasp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="mota">Mô Tả</label>
                <input type="text" id="mota" name="motasp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="size">Size</label>
                <input type="text" id="size" name="szsp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="mausp">Mầu sản phẩm</label>
                <input type="text" id="mausp" name="mausp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="soluong">Số Lượng Sản Phẩm</label>
                <input type="text" id="soluong" name="soluongsp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Còn Đủ</option>
                  <option>Hết hàng</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger"name="thembt" value="Thêm Biến Thể">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=bienthe"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
       </from>
            </div>
            <!-- /.card-body -->
          </div>