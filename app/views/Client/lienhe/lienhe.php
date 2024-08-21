<?php
$vh=$_SESSION['ten_taikhoan'];
?>
  <!--contact map start-->
  <!--
  <div class="contact_map mt-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-area">
                        <div class= "single_slider d-flex align-items-center" data-bgimg="../../../../public/assetclient/img/slider/Gucci.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!--contact map end-->

    <!--contact area start-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>Thông Tin </h3>
                       
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                            <li><i class="fa fa-phone"></i> <a href="#">Infor@roadthemes.com</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:0(1234)567890">0 (1234) 567 890</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message form">
                    <p class="thongbao" style="color: red; width: 400px"> <br>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </p>
                        <h3>Nhập Thông Tin Liên hệ</h3>
                        <h3>Mã Khách Hàng :<?=$id_kh?></h3>
                        <form action="../ClientController/ClientController.php?act=lienhe" method="post">
                        <p>
                                <label>  Họ Tên </label>
                                <input name="ten_khachhang" type="text" value="<?php echo $vh['ho_ten'] ?>">
                            </p>
                            <p>
                                <label>  Số Điện Thoại </label>
                                <input name="sdt"type="text" value="<?php echo $vh['sdt'] ?>">
                            </p>
                            <p>
                                <label>  Email </label>
                                <input name="email"  type="email" value="<?php echo $vh['email'] ?>">
                            </p>
                            <p>
                                <label>  Nội Dung </label>
                                <input name="noi_dung" placeholder="Nhập nội dung" type="text">
                            </p>
                            
                            <input type="submit" name="lienhe" value="Gửi">
                            <p class="form-messege"></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact area end-->
    <?php
 include "../layout/body7.php";
 
   
?>