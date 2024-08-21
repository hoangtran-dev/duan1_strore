<div class="content-wrapper">
<div class="card card-primary">
  <form action="AdminController.php?act=adddm" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Danh Mục</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="tendm">Tên Danh Mục</label>
                <input type="text" id="tendm" name="tendm"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="anhdm">Ảnh Danh Mục</label>
                <input type="file" name="img">
              </div>
              <div class="form-group">
                <label for="mota">Mô Tả</label>
                <input type="text" id="mota" name="mota" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Đã Cập Nhật</option>
                  <option>Chuẩn Bị Cập Nhật</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name = "themdm" value="Thêm Danh Mục" required>
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=danhmuc"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
              </form>
            <!-- /.card-body -->
          </div>