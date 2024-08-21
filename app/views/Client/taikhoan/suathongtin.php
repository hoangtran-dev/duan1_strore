
    <!-- customer login start -->
    <div class="customer_login mt-32">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Sủa thông tin</h2>
                        <?php 
                        if(isset($_SESSION['ten_taikhoan'])&&(is_array($_SESSION['ten_taikhoan']))){
                         extract($_SESSION['ten_taikhoan']);
                        }
                        ?>

                        <?php 
                         if(isset($thongbao) && ($thongbao != "")) {
                         echo $thongbao;
                        }
                        ?>
                        
                        <form action="ClientController.php?act=suathongtin" method="post">
                            <p>
                                <label>Họ và tên<span>*</span></label>
                                <input type="text" name="hoten"  value="<?= $ho_ten ?>">
                            </p>
                            <p>
                                <label>Ngay sinh<span>*</span></label>
                                <input type="text" name="ngaysinh" value="<?= $ngay_sinh ?>">
                            </p>
                            <p>
                                <label>Tên tài khoản<span>*</span></label>
                                <input type="text" name="taikhoan"  value="<?= $ten_taikhoan ?>">
                            </p>
                            <p>
                                <label>Mật khẩu<span>*</span></label>
                                <input type="text" name="matkhau" value="<?= $mat_khau ?>">
                            </p>
                            <p>
                                <label>Số diện thoại<span>*</span></label>
                                <input type="text" name="sdt"  value="<?= $sdt ?>">
                            </p>
                            <p>
                                <label>Email<span>*</span></label>
                                <input type="email" name="email" value="<?= $email ?>" >
                            </p>
                            <p>
                                <label>Địa chỉ<span>*</span></label>
                                <input type="text" name="diachi"  value="<?= $dia_chi ?>">
                            </p>
                            
                            <P> 
                            <input type="hidden" name="idkh" value="<?= $id_kh ?>">
                            </p>
                            <div class="login_submit">
                                
                                <input type="submit" name="suathongtin" value="Cập nhật">
                               
                                  <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </p>
                          
                        </form>
                    </div>
                </div>
                <!--login area start-->

            </div>
        </div>
    </div>
    <!-- customer login end -->

                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </p>
            <?php include '../layout/body7.php'; ?>
   