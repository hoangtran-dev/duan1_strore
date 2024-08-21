
    


    <!-- customer login start -->
    <div class="customer_login mt-32">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Đăng nhập</h2>
                        <p class="thongbao" style="color: red; width: 400px">
                        <?php
                          if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")) echo $_SESSION['tb_dangnhap'];
                        ?>
                        </p>
                        <form action="ClientController.php?act=dangnhap" method="post">
                            <p>
                                <label style="color:black;">Tài Khoản<span>*</span></label>
                                <input type="text" name="user" required>
                            </p>
                            <p>
                                <label>Mật khẩu<span>*</span></label>
                                <input type="password" name="pass" required>
                            </p>
                            <div class="login_submit">
                                <a href="ClientController.php?act=quenmk">Quên mật khẩu ?</a>
                                <a href="#"></a>
                                <label for="remember">
                                <a href="ClientController.php?act=dangky">Tạo tài khoản mới</a>     
                                </label>
                                <input type="submit" name="dangnhap" value="Đăng nhâp">
                                
                                
                                
                            
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!--login area start-->

            </div>
        </div>
    </div>
    <!-- customer login end -->
    <?php include '../layout/body7.php'; ?>

 