<?php
ob_start();
session_start();

if (!isset($_SESSION['cart'])) $_SESSION['cart']=[];
include "../../../models/sanpham.php";
include "../../../models/pdo.php";
include "../../../models/danhmuc.php";
include "../../../models/baiviet.php";
include "../../../models/nguoidung.php";
include "../../../models/khachhang.php";
include "../../../models/lienhe.php";
include "../../../models/binhluan.php";
include "../../../models/donhang.php";
include "../../../models/donhangchitiet.php";
include "../../../models/banner.php";
$listdanhmuc=loadall_danhmuc();


include "../layout/header.php";
include "../layout/header2.php";
include "../layout/header1.php";
include "../layout/menu.php";

include "../layout/banner.php";
if(!isset($_SESSION["mycart"])) $_SESSION["mycart"]=[];
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
       case 'sanpham':
            $listall= ds_sanpham_inner();
            include "../sanpham/sanpham.php";
            break;

            case 'sp':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['id_dm'])&&($_GET['id_dm']>0)){
                    $id_dm=$_GET['id_dm'];
                }else{
                    $id_dm=0;
                }
                    $dssp=loadall_sanpham($kyw, $id_dm);
                   
                    include "../sp/sp.php";
                break;

        case 'sanpham1':
            $listall= ds_sanpham_inner();
            include "../sanpham/sanpham1.php";
            break;
        case 'sanpham2':
            $listall= ds_sanpham_inner();
            include "../sanpham/sanpham2.php";
            break;
        case 'sanpham3':
            $listall= ds_sanpham_inner();
            include "../sanpham/sanpham3.php";
            break;
        case 'sanpham4':
            $listall= ds_sanpham_inner();
            include "../sanpham/sanpham4.php";
            break; 
        case 'sanpham5':
            $listall= ds_sanpham_inner();
            include "../sanpham/sanpham5.php";
            break; 

        case 'chitietsp': 
                if(isset($_GET['id_sp'])&&($_GET['id_sp'])>0){
                    $sp= loadone_sanpham($_GET['id_sp']);
                    extract($sp);
                    $sp_cungloai= sanpham_cungloai($id_sp,$id_dm);
                    include "../chitietsanpham/chitietsanpham.php";
                    break;  
                    }else{
                        include "../sanpham/sanpham.php";
                        break;
                    }
        
        case 'tintuc':
                if(isset($_GET['id_bv'])&&($_GET['id_bv'])>0){
                    $bv=loadone_baiviet($_GET['id_bv']);
                    include "../tintuc/tintuc.php";
                    break;
                }else{
                //$listbaiviet= loadall_baiviet();
                include "../tintuc/tintuc.php";
                break;
                }   

        case 'baiviet':
            
                    $listbaiviet= loadall_baiviet();
                    include "../baiviet/baiviet.php";
            break;
        
        case 'banner':
            $listbn= loadall_banner();
            include "../layout/banner.php";
            break;
        case 'lienhe':
                if (!isset($_SESSION['ten_taikhoan'])) {
                    // Nếu chưa đăng nhập, chuyển hướng hoặc hiển thị thông báo
            header('Location: ../ClientController/ClientController.php?act=dangnhap'); // Chuyển hướng đến trang đăng nhập
                     // Dừng thực thi để đảm bảo chuyển hướng hoạt động đúng
        }
                if((isset($_POST['lienhe']))&&($_POST['lienhe'])){
                    $ten_khachhang=$_POST['ten_khachhang'];
                    $sdt=$_POST['sdt'];
                    $email=$_POST['email'];
                    $noidung=$_POST['noi_dung'];
                   
               
                 
                    
                    //tạo đơn hàng
                    //Trả Về 1 id đơn hàng
                    // $item=array($id_sp,$ten_sp,$img_sp,$gia_sp,$soluongsp);
                    $id_lh=lienhe($ten_khachhang,$email,$sdt, $noidung);
                    $thongbao = "GửI Liên Hệ Thành Công";
                }
                    include "../lienhe/lienhe.php";
                    break;
        case "dangnhap":
            
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap']!="")){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $checkuser=checkuser($user,$pass);
                if(is_array($checkuser)){
                                // $_SESSION['id_kh']=$checkuser;
                        $_SESSION['ten_taikhoan']= $checkuser;
            
                        $tenng=" ". $user;
                        $_SESSION['tenng']=$tenng;
            
                        $tb="Đăng nhập Thành công!";
                        $_SESSION['tb_dangnhap']=$tb;
                        header("location:../ClientController/ClientController.php");
            
                           
                        }else{
                        $tb="Tài khoản của bạn ko tồn tại hoặc hoặc mật khẩu của bạn ko đúng !!";
                        $_SESSION['tb_dangnhap']=$tb;
                                
                            }
                            
                    }
                        include "../taikhoan/dangnhap.php";
                        break;
            
            
            
            case "dangky":
                    if (isset($_POST['dangky'])) {
                        $tentaikhoan = $_POST['taikhoan'];
                        $matkhau = $_POST['matkhau'];
                        $hoten = $_POST['hoten'];
                        $ngaysinh = $_POST['ngaysinh'];
                        $sdt = $_POST['sdt'];
                        $email = $_POST['email'];
                        $diachi = $_POST['diachi'];
                            // $trangthai = $_POST['trangthai'];
            
                        insert_khhang($tentaikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi, 1);
                        $thongbao = "Đang ký thành công";
                        include "../taikhoan/dangky.php";
                        }
                        include "../taikhoan/dangky.php";
                        break;
            
                        case 'quenmk':
                            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                                $email = $_POST['email'];
                                $checkemail = checkemail($email);
                                if (is_array($checkemail)) {
                                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['mat_khau'];
                                } else {
                                    $thongbao = "Email không tồn tại";
                                }
                            }
                            include "../taikhoan/quenmk.php";
                            break;
                        
            case 'suathongtin':
                    if(isset($_POST['suathongtin']) && ($_POST['suathongtin'])){
                        $tentaikhoan = $_POST['taikhoan'];
                        $matkhau = $_POST['matkhau'];
                        $hoten = $_POST['hoten'];
                        $ngaysinh = $_POST['ngaysinh'];
                        $sdt = $_POST['sdt'];
                        $email = $_POST['email'];
                        $diachi = $_POST['diachi'];
                        $idkh = $_POST['idkh'];
                        update_khhang($idkh,$tentaikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi, 1);
                        $_SESSION['taikhoan']=checkuser($tentaikhoan,$matkhau);
                            
                        $thongbao = "Cập Nhập thành công";
                            
                      
                        }
                        include "../taikhoan/suathongtin.php";
                        break;
                

                        
            case 'addcart':
                    if (!isset($_SESSION['ten_taikhoan'])) {
                                // Nếu chưa đăng nhập, chuyển hướng hoặc hiển thị thông báo
                        header('Location: ../ClientController/ClientController.php?act=dangnhap'); // Chuyển hướng đến trang đăng nhập
                                 // Dừng thực thi để đảm bảo chuyển hướng hoạt động đúng
                    }
                    if(isset($_POST['addtocard'])&&($_POST['addtocard'])){
                        $id_sp=$_POST['idsp'];
                        $ten_sp=$_POST['tensp'];
                        $img_sp=$_POST['imgsp'];
                        $gia_sp=$_POST['giasp'];
                    if(isset($_POST['soluongsp'])&&($_POST['soluongsp']>0)){
                        $soluongsp=$_POST['soluongsp'];
                    }else{
                        $soluongsp=1;
                        }
                            // $ttien=$soluongsp*$gia_sp;
                            // $spadd=[$id_sp,$ten_sp,$img_sp,$gia_sp,$soluongsp,$ttien];
                            // array_push($_SESSION['cart'],$spadd);

                    $vh=0;
                            
                        $i=0;
                    foreach($_SESSION['cart'] as $item){
                    if($item[1]===$ten_sp){
                    $soluongnew= $soluongsp + $item[4];
                    $_SESSION['cart'][$i][4]=$soluongnew;
                    $vh=1;
                    break;
                            }
                    $i++;
                            }
                    if($vh==0){
                    $item=array($id_sp,$ten_sp,$img_sp,$gia_sp,$soluongsp);
                    $_SESSION['cart'][]=($item);
                            }
                        }
                            include "../giohang/giohang.php";  
                                break;

                                // xoá giỏ hàng
            case 'delcart':
                    if(isset($_GET['i'])&&($_GET['i'])>0){
                    if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0))
                        array_splice($_SESSION['cart'],$_GET['i'],1);
                            }else{
                    if(isset($_SESSION['cart'])) unset($_SESSION['cart']);
                            }
                          
                    if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
                        include "../giohang/giohang.php"; 
                            }else{
                    include "../giohang/giohang.php";  
                            }
                    break;
            case 'thanhtoan':
                            
                if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
                    //lấy dữ liệu
                    
                    $tongdonhang=$_POST['tongdonhang'];
                    $hoten=$_POST['hoten'];
                    $email=$_POST['email'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $pttt=$_POST['pttt'];
                    $madh="VHDZ".rand(0,999999);
                    
                    //tạo đơn hàng
                    //Trả Về 1 id đơn hàng
                    // $item=array($id_sp,$ten_sp,$img_sp,$gia_sp,$soluongsp);
                    $iddh=taodonhang($id_kh,$madh,$pttt,$tongdonhang,$hoten,$diachi,$email,$sdt);
                    $_SESSION['iddh']=$iddh;
                    if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
                    foreach($_SESSION['cart'] as $item){
                        addtocard($iddh,$item[0],$item[1],$item[2],$item[3],$item[4]);
                        $thongbao = "Mua Hàng Thành Công";
                         header('Location: ../ClientController/ClientController.php?act=bill');

                    }
                    unset($_SESSION['cart']);
                }
                $donhang=getshowdonhang($iddh);
                $donhangct=getshowdonhangct($iddh);
            }
                
                include '../donhang.php';
                break;

                
                
            case 'showdh':
                if (!isset($_SESSION['ten_taikhoan'])) {
                    // Nếu chưa đăng nhập, chuyển hướng hoặc hiển thị thông báo
            header('Location: ../ClientController/ClientController.php?act=dangnhap'); // Chuyển hướng đến trang đăng nhập
                     // Dừng thực thi để đảm bảo chuyển hướng hoạt động đúng
        }
                    //$listdh=ds_donhang_inner();
                    $id_kh=ds_donhang_inner();
                             include '../lichsudh.php';
                                break;            
        
                
                                /*đơn hàng chi tiết */
            case 'showdhct':
            
                $iddh=$_GET['iddh'];
                $vh=loadone_donhang($iddh);
                $listdh=loadone_donhangchitiet($iddh);
                //$listdonhangchitiet=loadall_donhangchitiet();
                    include '../lichsudhct.php';
                    break; 
                            
                                  
             case 'bill' :
                include '../bill.php';
                break;           
                        

            case 'dangxuat':
                        session_unset();
                    
                        header("location:../ClientController/ClientController.php");
                        break;

                }
} else {
    include '../layout/index.php';
}

include "../layout/footer.php";


ob_end_flush();

?>