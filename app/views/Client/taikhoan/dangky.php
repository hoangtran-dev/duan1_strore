
    <!-- customer login start -->
    <div class="customer_login mt-32">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Đăng ký</h2>
                        <?php 
                         if(isset($thongbao) && ($thongbao != "")) {
                         echo $thongbao;
                        }
                        ?>
                        
                        <form action="ClientController.php?act=dangky" method="post">
                            <p>
                                <label>Họ và tên<span>*</span></label>
                                <input type="text" name="hoten" >
                            </p>
                            <p>
                                <label>Ngay sinh<span>*</span></label>
                                <input type="text" name="ngaysinh" >
                            </p>
                            <p>
                                <label>Tên tài khoản<span>*</span></label>
                                <input type="text" name="taikhoan" >
                            </p>
                            <p>
                                <label>Mật khẩu<span>*</span></label>
                                <input type="password" name="matkhau" >
                            </p>
                            <p>
                                <label>Số diện thoại<span>*</span></label>
                                <input type="text" name="sdt" >
                            </p>
                            <p>
                                <label>Email<span>*</span></label>
                                <input type="email" name="email" >
                            </p>
                            <p>
                                <label>Địa chỉ<span>*</span></label>
                                <input type="text" name="diachi" >
                            </p>

                            <div class="login_submit">
                                 
                                <button type="submit" name="dangky">Đăng kí</button>
                            
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!--login area start-->

            </div>
        </div>
    </div>
    <?php include '../layout/body7.php'; ?>
    <!-- customer login end -->