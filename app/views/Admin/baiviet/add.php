
<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=addbv" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Bài Viết</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="tenbv">Tên Baì Viết</label>
                <input type="text" id="tenbv" name="tenbaiviet" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="noidung">Nội Dung</label>
                <input type="text" id="noidung" name="noidung" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="anhbv">Ảnh Bài Viết</label>
                <input type="file" name="img">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Bài Viết Mới</option>
                  <option>Bài Viết Cũ</option>     
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name="thembv" value="Thêm Baì Viết">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=baiviet"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
         </form>
            <!-- /.card-body -->
          </div>