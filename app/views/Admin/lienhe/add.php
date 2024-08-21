<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=addlh" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm thông tin Liên hệ</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="makh">Tên khách hàng</label>
                <input type="text" id="makh" name="idkh" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="makh">Email</label>
                <input type="text" id="makh" name="email" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="makh">Số Điện Thoại</label>
                <input type="text" id="sdt" name="sdt" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="noidung">Nội dung</label>
             
                <textarea name="noidung" id="" cols="30" class="form-control" rows="10"></textarea>
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Đã liên hệ</option>
                  <option>Chưa liên hệ</option>              
                </select>
              </div>

              
              <input type="submit" class="btn btn-outline-danger"name="themlh" value="Thêm Liên Hệ">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
              <a href="../AdminController/AdminController.php?act=lienhe"><button type="button" class="btn btn-outline-danger">Danh Sách</button></a>
            </div>
            <!-- /.card-body -->
          </div>