<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=adddh" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Đơn Hàng</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="tonghoadon">Mã Đơn Hàng</label>
                <input type="text" id="tonghoadon" name="madh" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="tonghoadon">Phương Thức  Thanh Toán</label>
                <input type="text" id="tonghoadon" name="pttt" class="form-control" value="">
              </div>
        
              <div class="form-group">
                <label for="tonghoadon">Tổng Hoá Đơn</label>
                <input type="text" id="tonghoadon" name="tongdonhang" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="ngaydat">Họ Tên</label>
                <input type="text" id="ngaydat" name="hoten" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="ngaydat">Địa chỉ</label>
                <input type="text" id="ngaydat" name="diachi" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="ngaydat">Email</label>
                <input type="text" id="ngaydat" name="email" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="ngaydat">Số Điện Thoại</label>
                <input type="text" id="ngaydat" name="sdt" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Chờ Xử Lý</option>
                  <option>Đã Xác Nhận</option> 
                  <option>Đang Giao</option>    
                  <option>Hoàn Tất</option>           
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger"name="themdh" value="Thêm Đơn Hàng">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
              <a href="../AdminController/AdminController.php?act=donhang"><button type="button" class="btn btn-outline-danger">Danh Sách</button></a>
          </from>
            </div>
            <!-- /.card-body -->
          </div>
