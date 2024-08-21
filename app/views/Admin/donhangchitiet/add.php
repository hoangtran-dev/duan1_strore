<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=adddhct" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Chi Tiết Hoá Đơn</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">

              
              <div class="form-group">
              <label for="madh">ID Sản Phẩm</label>
              <select id="makh" name="idsp" class="form-control custom-select">
                <?php
                $listjoin_dhct=loadall_sanpham();
                foreach ($listjoin_dhct as $sanpham):
                extract($sanpham);
              ?>
              <option value="<?= $idsp ?>">
                <?= $ten_sp ?>
              </option>
            <?php endforeach ?>         
                </select>
              </div>
              <div class="form-group">
                <label for="soluong">Số lượng sản phẩm</label>
                <input type="text" id="soluong" name="soluong" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="anh">Ảnh sản phẩm</label>
                <input type="file" id="anh" name="img"> 
              </div>
              <div class="form-group">
                <label for="tongtien">Tổng tiền</label>
                <input type="text" id="tongtien" name="tongtien" class="form-control" value="">
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
              <input type="submit" class="btn btn-outline-danger" name = "themdhct" value="Thêm Don Hang Chi Tiet" required>
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=donhangchitiet"><button type="button" class="btn btn-outline-danger"> Danh Sách</button></a>
              
            </div>
            <!-- /.card-body -->
          </div>