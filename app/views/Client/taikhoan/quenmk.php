


    <!-- customer login start -->
    <div class="customer_login mt-32">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        
                     
                <form action="ClientController.php?act=quenmk" method="post" enctype="multipart/form-data" class="login2">
                <h2>Quên mật khẩu</h2>
                <label for="">Email</label><br />
                <input type="email" name="email" placeholder="Nhập Email" required /><br />

                <div class="sub">
                    <input type="submit" value="Xác nhận" name="guiemail" class="submit-login" />
                </div>
                <p class="thongbao" style="color: red; width: 400px"> <br>
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
    <?php include '../layout/body7.php'; ?>
    <!-- customer login end -->

 