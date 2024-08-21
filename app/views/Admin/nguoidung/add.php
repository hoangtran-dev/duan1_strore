<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=addnd" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Người Dùng</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="taikhoan">Tài Khoản</label>
                <input type="text" id="taikhoan" name="taikhoan" class="form-control" value="">
              </div> 
              <div class="form-group">
                <label for="matkhau">Mật Khẩu</label>
                <input type="text" id="matkhau" name="matkhau" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id="hoten" name="hoten" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="ngaysinh">Ngày Sinh</label>
                <input type="text" id="ngaysinh" name="ngaysinh" class="form-control" value="">
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
                <label for="chucvu">Chức Vụ</label>
              <select id="chucvu" name="id_pq" class="form-control custom-select">
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

              
              <input type="submit" class="btn btn-outline-danger" name="themnd" value="Thêm Người Dùng">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=nguoidung"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
        </from>
            </div>
            <!-- /.card-body -->
          </div>