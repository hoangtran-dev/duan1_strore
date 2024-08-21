<?php
if (isset($sp) && is_array($sp)) {
    extract($sp);
}

?>


<div class="content-wrapper">
<div class="card card-primary">
<form action="AdminController.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Sửa Sản Phẩm</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputName">Mã Sản Phẩm</label>
                <input type="text" id="inputName" name="id_sp" class="form-control" value="<?= isset($id_sp) ? $id_sp : '' ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Tên Sản Phẩm</label>
                <input type="text" id="inputName" name="tensp" class="form-control" value="<?= isset($ten_sp) ? $ten_sp : '' ?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Ảnh sản phẩm</label>
                <input type="file" name="img" value="">
              </div>
              <div class="form-group">
                <label for="inputStatus">Mô Tả</label>
                <input type="text" id="inputName" name="mota" class="form-control" value="<?=isset($mota_sp) ? $mota_sp : ''?>">
              </div>
              <div class="form-group">
                <label for="giasp">Giá Sản Phẩm</label>
                <input type="text" id="giasp" name="giasp" class="form-control" value="<?=isset($gia_sp) ? $gia_sp : ''?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Ngày Nhập</label>
                <input type="date" id="inputName" name="ngaynhap" class="form-control" value="<?=isset($ngay_nhap) ? $ngay_nhap: ''?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Số Lượng Sản Phẩm</label>
                <input type="text" id="inputName" name="soluong" class="form-control" value="<?=isset($soluong_sp) ? $soluong_sp : ''?>">
              </div>
              <div class="form-group">
                <label for="inputName">Mã danh mục</label>
                <select id="madm" name="iddm" class="form-control custom-select" value="<?=isset($id_dm) ? $id_dm : ''?>">
                <?php
                $listjoin_sp=loadall_danhmuc();
             foreach ($listjoin_sp as $danhmuc):
                extract($danhmuc);
              ?>
              <option value="<?= $id_dm ?>">
                <?= $id_dm ?>
              </option>
            <?php endforeach ?>         
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Trạng thái</label>
                <select id="inputStatus" name="trangthai"  class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>              
                </select>
              </div>
        
              <input type="submit" name="capnhat" class="btn btn-outline-danger" value="Cập nhật" >
              <input type="reset" class="btn btn-outline-danger" value="Nhập Lại">
             <a href="../AdminController/AdminController.php?act=sanpham"><button type="button" class="btn btn-outline-danger">Danh Sách</button></a>
             </form>
            </div>
            <!-- /.card-body -->
          </div>

    