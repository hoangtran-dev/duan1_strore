<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=addkh" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Khách Hàng</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="taikhoan">Tài Khoản</label>
                <input type="text" id="taikhoan" name="tentaikhoan" class="form-control" value="">
              </div> 
              <div class="form-group">
                <label for="matkhau">Mật Khẩu</label>
                <input type="text" id="matkhau"name= "matkhau" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id="hoten" name="hoten" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="ngaysinh">Ngày Sinh</label>
                <input type="date" id="ngaysinh" name="ngaysinh" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="sdt">Số Điện Thoại</label>
                <input type="text" id="sdt" name="sdt" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" name="diachi" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="diachi">Quyền Người Dùng</label>
                <input type="text" id="diachi" name="quyen_nd" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Hoạt Động</option>
                  <option>Không Hoạt Động</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name="themkh" value="Thêm Khách Hàng">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=khachhang"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
        </from>
            </div>

            <!-- /.card-body -->
          </div>
