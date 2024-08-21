<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=addbn" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Banner</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="mabn">Mã Banner</label>
                <input type="text" id="mabn" name="idbanner"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="tenbn">Tên Banner</label>
                <input type="text" id="tenbn" name="tenbanner" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="anhbn">Ảnh Banner</label>
                <input type="file" id ="filename" name="img">
              </div>
              <div class="form-group">
                <label for="link">Link</label>
                <input type="text" id="link" name="link" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Hoạt Động</option>
                  <option>Không Hoạt Dộng</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name="thembn" value="Thêm Banner">
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=banner"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
              </form>
            </div>
            <!-- /.card-body -->
          </div>