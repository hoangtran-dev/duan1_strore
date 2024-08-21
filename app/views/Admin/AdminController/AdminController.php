<?php
include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/boxleft.php";
include "../../../models/danhmuc.php";
include "../../../models/sanpham.php";
include "../../../models/baiviet.php";
include "../../../models/banner.php";
include "../../../models/binhluan.php";
include "../../../models/khuyenmai.php";
include "../../../models/khachhang.php";
include "../../../models/nguoidung.php";
include "../../../models/phanquyen.php";
include "../../../models/bienthe.php";
include "../../../models/donhang.php";
include "../../../models/donhangchitiet.php";
include "../../../models/lienhe.php";
include "../../../models/pdo.php";

if (isset($_GET['act']) && ($_GET['act']!="")) {
$act = $_GET['act'];
switch ($act){

    /**Quản trị Danh mục */
                case 'danhmuc':
                    
                        $listdanhmuc=loadall_danhmuc();
                        include "../danhmuc/index.php";
                        break;
                case 'adddm':
                        if (isset($_POST['themdm'])) {
                            $tendm = $_POST['tendm'];
                            $mota = $_POST['mota'];
                            $trangthai = $_POST['trangthai'];
                            $filename = $_FILES['img']['name'];
                            $target_dir = "../../../../public/assets/dist/img/admin/danhmuc/";
                            $target_file = $target_dir . basename($_FILES["img"]["name"]);

                            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                echo "Thêm ảnh thành công";
                            } else {
                                echo "Không thêm được ảnh";
                            }
                            insert_danhmuc($tendm, $filename, $mota, $trangthai);
                            $thongbao = "Thêm thành công";
                        }
                        include "../danhmuc/add.php";
                        break;
                case 'xoadm':
                            if(isset($_GET['id_dm'])&&($_GET['id_dm']>0)){
                                delete_danhmuc($_GET['id_dm']);
                                $thongbao="Xóa thành công";
                            }
                            $listdanhmuc=loadall_danhmuc();
                        include "../danhmuc/index.php";
                        break;
                case 'suadm':
                            if(isset($_GET['id_dm'])&&($_GET['id_dm']>0)){
                                $dm=loadone_danhmuc($_GET['id_dm']);
                                }
                        include "../danhmuc/update.php";
                        break;
                case 'updatedm':
                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                    $id_dm=$_POST['id_dm'];
                                    $tendm=$_POST['tendm'];
                                    $mota = $_POST['mota'];
                                    $trangthai = $_POST['trangthai'];
                                    $filename = $_FILES['img']['name'];
                                    $target_dir = "../../../../public/assets/dist/img/admin/danhmuc/";
                                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    
                                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                    echo "Thêm ảnh thành công";
                                } else {
                                    echo "Không thêm được ảnh";
                                }
                    
                                        update_danhmuc($id_dm, $tendm, $filename, $mota, $trangthai);
                                        $thongbao="Cập nhật thành công";
                                    }
                            $listdanhmuc=loadall_danhmuc();
                            include "../danhmuc/index.php";
                            break;


       /* Quản trị sản phẩm*/ 
                case 'sanpham': 
                        $listjoin_sp=ds_sanpham_inner();
                        $listsanpham=loadall_sanpham();
                        include "../sanpham/index.php";
                        break;          
                case 'addsp':
                            if (isset($_POST['themsp'])) {
                            $iddm=$_POST['iddm'];
                            $tensp = $_POST['tensp'];
                            $mota = $_POST['mota'];
                            $giasp= $_POST['giasp'];
                            $ngaynhap = $_POST['ngaynhap'];
                            $soluong = $_POST['soluong'];
                            $trangthai = $_POST['trangthai'];

                            $filename = $_FILES['img']['name'];
                            $target_dir = "../../../../public/assets/dist/img/admin/sanpham/";
                            $target_file = $target_dir . basename($_FILES["img"]["name"]);

                             if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                echo "Thêm ảnh thành công";
                            } else {
                                    echo "Không thêm được ảnh";
                                }

                                    insert_sanpham($tensp, $filename, $mota, $giasp, $ngaynhap, $soluong, $iddm, $trangthai);
                                    $thongbao = "Thêm thành công";
                                }
                                include '../sanpham/add.php';  
                                        break;
                    case 'xoasp':
                                    if(isset($_GET['id_sp'])&&($_GET['id_sp']>0)){
                                        delete_sanpham($_GET['id_sp']);
                                        $thongbao="Xóa thành công";
                                                }
                                        $listjoin_sp=ds_sanpham_inner();
                                        $listsanpham=loadall_sanpham();
                                        include "../sanpham/index.php";
                                        break;
                                            
                    case 'suasp':
                            if(isset($_GET['id_sp'])&&($_GET['id_sp']>0)){
                                    $sp=loadone_sanpham($_GET['id_sp']);
                                                    }
                                    $listjoin_sp=ds_sanpham_inner();
                                    include "../sanpham/update.php";
                                    break;                        
                    case 'updatesp':     
                                if(isset($_POST['capnhat'])  && $_POST['capnhat']){
                                $id_sp=$_POST['id_sp'];
                                $tensp=$_POST['tensp'];
                                $mota = $_POST['mota'];
                                $giasp= $_POST['giasp'];
                                $ngaynhap = $_POST['ngaynhap'];
                                $soluong = $_POST['soluong'];
                                $iddm = $_POST['iddm'];
                                $trangthai = $_POST['trangthai'];
                                $filename = $_FILES['img']['name'];
                                $target_dir = "../../../../public/assets/dist/img/admin/sanpham/";
                                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    
                                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                    echo "Thêm ảnh thành công";
                                } else {
                                    echo "Không thêm được ảnh";
                                }
                    
                                        update_sanpham($id_sp,$tensp,$filename,$mota,$giasp,$ngaynhap,$soluong,$iddm, $trangthai);
                                        $thongbao="Cập nhật thành công";
                                    }
                                    $listjoin_sp=ds_sanpham_inner();
                                    $listsanpham=loadall_sanpham();
                                    include "../sanpham/index.php";
                                    break; 
                                    

                /**Quản trị banner */
            case 'banner':
                                $listbanner = loadall_banner(); 
                                include "../banner/index.php";
                                break;
            case 'addbn':
                                if (isset($_POST['thembn']))  {
                                    $tenbanner = $_POST['tenbanner'];
                                    $link = $_POST['link'];
                                    $trangthai = $_POST['trangthai'];
                    
                                $filename = $_FILES['img']['name'];
                                    $target_dir ="../../../../public/assets/dist/img/admin/banner/";
                                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        
                                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                        echo "Thêm ảnh thành công";
                                    } else {
                                        echo "Không thêm được ảnh";
                                    }
                                    insert_banner($tenbanner, $filename, $link, $trangthai);
                                    $thongbao = "Thêm thành công";
                                }
                                include "../banner/add.php";
                                break;
            case 'xoabn':
                                    if(isset($_GET['id_banner'])&&($_GET['id_banner']>0)){
                                        delete_banner($_GET['id_banner']);
                                        $thongbao="Xóa thành công";
                                    }
                                    $listbanner=loadall_banner();
                                    include "../banner/index.php";
                                    break;

            case 'suabn':
                                        if(isset($_GET['id_banner'])&&($_GET['id_banner']>0)){
                                            $bn=loadone_banner($_GET['id_banner']);
                                        }
                                        include "../banner/update.php";
                                        break;
            case 'updatebn':
                                if(isset($_POST['capnhat'])  && $_POST['capnhat']){
                                    $id_banner=$_POST['id_banner'];
                                    $tenbanner=$_POST['tenbanner'];
                                    $link = $_POST['link'];
                                    $trangthai = $_POST['trangthai'];
                                    $filename = $_FILES['img']['name'];
                                    $target_dir = "../../../../public/assets/dist/img/admin/banner/";
                                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                
                            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                echo "Thêm ảnh thành công";
                            } else {
                                echo "Không thêm được ảnh";
                            }  
                                 update_banner($id_banner,$tenbanner, $filename, $link, $trangthai);
                                    $thongbao="Cập nhật thành công";
                                }
                                $listbanner=loadall_banner();
                                include "../banner/index.php";
                                break;          
                    
                       /** Quản trị bài viết*/

    case 'baiviet':
                        $listbaiviet=loadall_baiviet();
                        include "../baiviet/index.php";
                        break;
                
    case 'addbv':
                        if (isset($_POST['thembv'])) {
                            $tenbv = $_POST['tenbaiviet'];
                            $noidung = $_POST['noidung'];
                            $trangthai = $_POST['trangthai'];
                
                            $filename = $_FILES['img']['name'];
                            $target_dir ="../../../../public/assets/dist/img/admin/baiviet/";
                            $target_file = $target_dir . basename($_FILES["img"]["name"]);
                
                            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                echo "Thêm ảnh thành công";
                            } else {
                                echo "Không thêm được ảnh";
                            }
                            insert_baiviet($tenbv, $noidung, $filename, $trangthai);
                            $thongbao = "Thêm thành công";
                        }
                        include '../baiviet/add.php';
                        break;

    case 'xoabv':
                            if(isset($_GET['id_bv'])&&($_GET['id_bv']>0)){
                                delete_baiviet($_GET['id_bv']);
                                $thongbao="Xóa thành công";
                            }
                            $listbaiviet=loadall_baiviet();
                            include "../baiviet/index.php";
                            break;
    case 'suabv':
                        if(isset($_GET['id_bv'])&&($_GET['id_bv']>0)){
                        $bv=loadone_baiviet($_GET['id_bv']);
                         }
                        include "../baiviet/update.php";
                         break;                     
                
    case 'updatebv':
                        if(isset($_POST['capnhat'])){
                        $idbv = $_POST['id_bv'];
                        $tenbv = $_POST['tenbaiviet'];
                        $noidung = $_POST['noidung'];
                        $trangthai = $_POST['trangthai'];

                       $filename = $_FILES['img']['name'];
                        $target_dir ="../../../../public/assets/dist/img/admin/baiviet/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);

                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                            echo "Thêm ảnh thành công";
                        } else {
                            echo "Không thêm được ảnh";
                        }
                        update_baiviet($idbv,$tenbv, $noidung, $filename, $trangthai);
                     
                        $thongbao = "Cập nhật thành công";
                    }
                    $listbaiviet=loadall_baiviet();
                        include '../baiviet/index.php';
                        break;

               

                    /**Quản lý bình luận */
                    case 'binhluan':
                        //$listbl=loadall_binhluan($id_sp);
                        $listbl=loadall_binhluan(0);
                        include "../binhluan/index.php";
                        break;

                    
                    /**Quản Lý khuyến mãi */
                    case 'khuyenmai':
                        $listkhuyenmai=loadall_khuyenmai();
                        include "../khuyenmai/index.php";
                        break;
                    case 'addkm':
                            if (isset($_POST['themkm'])) {
                                //$idkm = $_POST['idkm'];
                                $makm = $_POST['makm'];
                                $phan_tram_km = $_POST['phan_tram_km'];
                                $ngay_bd = $_POST['ngay_bd'];
                                $ngay_kt = $_POST['ngay_kt'];
                                $mota = $_POST['mota'];
                                $trangthai = $_POST['trangthai'];
                    
                                insert_khuyenmai($makm, $phan_tram_km,$ngay_bd,$ngay_kt,$mota, $trangthai);
                                $thongbao = "Thêm thành công";
                            }
                            include "../khuyenmai/add.php";
                            break;
                    case 'xoakm':
                                if(isset($_GET['id_km'])&&($_GET['id_km']>0)){
                                    delete_khuyenmai($_GET['id_km']);
                                    $thongbao="Xóa thành công";
                                }
                                $listkhuyenmai=loadall_khuyenmai();
                                include "../khuyenmai/index.php";
                                break;
                        
                    case 'suakm':
                            if(isset($_GET['id_km'])&&($_GET['id_km']>0)){
                                $km=loadone_khuyenmai($_GET['id_km']);
                            }
                            include "../khuyenmai/update.php";
                            break;
                    case 'updatekm':
                                if(isset($_POST['capnhat'])  && $_POST['capnhat']){
                                $idkm = $_POST['idkm'];
                                $makm = $_POST['makm'];
                                $phan_tram_km = $_POST['phan_tram_km'];
                                $ngay_bd = $_POST['ngay_bd'];
                                $ngay_kt = $_POST['ngay_kt'];
                                $mota = $_POST['mota'];
                                $trangthai = $_POST['trangthai'];
                    
                                update_khuyenmai($idkm,$makm, $phan_tram_km,$ngay_bd,$ngay_kt,$mota, $trangthai);
                                $thongbao = "Thêm thành công";
                            }
                                $listkhuyenmai=loadall_khuyenmai();
                                include "../khuyenmai/index.php";
                                break; 
            


            /**Quản trị khách hàng */
                    case 'khachhang':
                                    $listkhachhang=loadall_khachhang();
                                    include '../khachhang/index.php';
                                    break;
            
                    case 'addkh':
                                    if (isset($_POST['themkh'])) {
                                        $tentaikhoan = $_POST['tentaikhoan'];
                                        $matkhau = $_POST['matkhau'];
                                        $hoten = $_POST['hoten'];
                                        $ngaysinh = $_POST['ngaysinh'];
                                        $sdt = $_POST['sdt'];
                                        $email = $_POST['email'];
                                        $diachi = $_POST['diachi'];
                                        $quyen_nd = $_POST['quyen_nd'];
                                        $trangthai = $_POST['trangthai'];
            
                                        insert_khachhang($tentaikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi,$quyen_nd, $trangthai);
                                        $thongbao = "Thêm thành công";
                                    }
                                include '../khachhang/add.php';
                                break;
            
                    case 'xoakh':
                                    if(isset($_GET['id_kh'])&&($_GET['id_kh']>0)){
                                       delete_khachhang($_GET['id_kh']);
                                       $thongbao="Xóa thành công";
                                       }
                                       $listkhachhang=loadall_khachhang();
                                       include "../khachhang/index.php";
                                       break;
        

                    case 'suakh':
                                    if(isset($_GET['id_kh'])&&($_GET['id_kh']>0)){
                                        $kh=loadone_khachhang($_GET['id_kh']);
                                        }
                                        include "../khachhang/update.php";
                                        break;

                    case 'updatekh':
                                    if (isset($_POST['capnhat'])) {
                                    $idkh = $_POST['idkh'];
                                    $tentaikhoan = $_POST['tentaikhoan'];
                                    $matkhau = $_POST['matkhau'];
                                    $hoten = $_POST['hoten'];
                                    $ngaysinh = $_POST['ngaysinh'];
                                    $sdt = $_POST['sdt'];
                                    $email = $_POST['email'];
                                    $diachi = $_POST['diachi'];
                                    $quyen_nd = $_POST['quyen_nd'];
                                    $trangthai = $_POST['trangthai'];
                    
                                    update_khachhang($idkh,$tentaikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi,$quyen_nd, $trangthai);
                                    $thongbao = "Thêm thành công";
                                            }
                                            $listkhachhang=loadall_khachhang();
                                            include '../khachhang/index.php';
                                            break;
                    

                            /**Quản trị phân quyền */

                    case 'phanquyen':
                                $listphanquyen=loadall_phanquyen();
                                include '../phanquyen/index.php';
                                break; 
                        
                    case 'addpq':
                                if (isset($_POST['thempq'])) {
                                    $tenchucvu = $_POST['tenchucvu'];
                                    $mota = $_POST['mota'];
                                    $trangthai = $_POST['trangthai'];
                                    
                                    insert_phanquyen($tenchucvu, $mota, $trangthai);
                                    $thongbao = "Thêm thành công";
                                }
                                include '../phanquyen/add.php';
                                break;
                    case 'xoapq':
                                    if(isset($_GET['id_pq'])&&($_GET['id_pq']>0)){
                                        delete_phanquyen($_GET['id_pq']);
                                        $thongbao="Xóa thành công";
                                    }
                                    $listphanquyen=loadall_phanquyen();
                                    include "../phanquyen/index.php";
                                    break;
                    case 'suapq':
                                    if(isset($_GET['id_pq'])&&($_GET['id_pq']>0)){
                                        $pq=loadone_phanquyen($_GET['id_pq']);
                                        }
                                        $listphanquyen=loadall_phanquyen();
                                        include "../phanquyen/update.php";
                                        break;
                    case 'uppq':
                            if (isset($_POST['capnhat'])) {
                                $idpq = $_POST['idpq'];
                                $tenchucvu = $_POST['tenchucvu'];
                                $mota = $_POST['mota'];
                                $trangthai = $_POST['trangthai'];
                                
                                update_phanquyen($idpq,$tenchucvu, $mota, $trangthai);
                                $thongbao = " Cập nhật thành công";
                            }
                                $listphanquyen=loadall_phanquyen();
                                include '../phanquyen/index.php';
                                break;




                     /**quản lý biến thể */



                                case 'bienthe':
                                    $listbienthe=loadall_bienthe();
                                    include '../bienthe/index.php';
                                    break;  
                            
                                case 'addbt':
                                    if (isset($_POST['thembt'])) {
                                        $idsp = $_POST['idsp'];
                                        $tensp = $_POST['tensp'];
                                        $giasp = $_POST['giasp'];
                                        $motasp = $_POST['motasp'];
                                        $szsp = $_POST['szsp'];
                                        $mausp = $_POST['mausp'];
                                        $soluongsp = $_POST['soluongsp'];
                                        $trangthai = $_POST['trangthai'];
                            
                                        insert_bienthe($idsp, $tensp, $giasp, $motasp, $szsp, $mausp, $soluongsp, $trangthai);
                                        $thongbao = "Thêm thành công";
                                    }
                                    include '../bienthe/add.php';
                                    break;
                                case 'xoabt':
                                        if(isset($_GET['id_bt'])&&($_GET['id_bt']>0)){
                                       delete_bienthe($_GET['id_bt']);
                                       $thongbao="Xóa thành công";
                                       }
                                       $listbienthe=loadall_bienthe();
                                       include "../bienthe/index.php";
                                       break;
                                case 'suabt':
                                           if(isset($_GET['id_bt'])&&($_GET['id_bt']>0)){
                                               $id_bt = $_GET['id_bt'];
                                               $bt=loadone_bienthe($id_bt);
                                           }
                                           include "../bienthe/update.php";
                                           break;
                                case 'updatebt':
                                            if (isset($_POST['capnhat'])) {
                                                $id_bt = $_POST['idbt'];
                                                $idsp = $_POST['idsp'];
                                                $tensp = $_POST['tensp'];
                                                $giasp = $_POST['giasp'];
                                                $motasp = $_POST['motasp'];
                                                $szsp = $_POST['szsp'];
                                                $mausp = $_POST['mausp'];
                                                $soluongsp = $_POST['soluongsp'];
                                                $trangthai = $_POST['trangthai'];
                                    
                                             update_bienthe($id_bt, $idsp, $tensp, $giasp, $motasp, $szsp, $mausp, $soluongsp, $trangthai);
                                                $thongbao = "Cập nhật thành công";
                                            }
                                            $listbienthe=loadall_bienthe();
                                            include '../bienthe/index.php';
                                            break;





                        /**quản lý đơn hàng */
                        case 'donhang':
                            $listdonhang=loadall_donhang();
                        // $listdh=ds_donhang_inner();
                            
                            include '../donhang/index.php';
                            break;

                        case 'adddh':
                                if (isset($_POST['themdh'])) {
                                    $madh = $_POST['madh'];
                                    $pttt = $_POST['pttt'];
                                    $tongdonhang = $_POST['tongdonhang'];
                                    $hoten = $_POST['hoten'];
                                    $diachi = $_POST['diachi'];
                                    $email = $_POST['email'];
                                    $sdt = $_POST['sdt'];
                                    insert_donhang1($madh, $pttt, $tongdonhang, $hoten, $diachi,$email,$sdt);
                                    $thongbao = "Thêm thành công";
                                    }
                                include '../donhang/add.php';
                                break;
                        case 'xoadh':
                                    if(isset($_GET['iddh'])&&($_GET['iddh']>0)){
                                        delete_donhang($_GET['iddh']);
                                        $thongbao="Xóa thành công";
                                    }
                                $listdonhang=loadall_donhang();
                            // $listjoin_dh=ds_donhang_inner();
                                include "../donhang/index.php";
                                break;
                        case 'suadh':
                                    if(isset($_GET['iddh'])&&($_GET['iddh']>0)){
                                        $dh=loadone_donhang($_GET['iddh']);
                                        }
                                $listdonhang=loadall_donhang();
                                //$listjoin_dh=ds_donhang_inner();
                                include "../donhang/update.php";
                                break;


                        case 'updatedh':
                                    if (isset($_POST['capnhat'])) {
                                            $iddh = $_POST['iddh'];
                                            $id_kh = $_POST['id_kh'];
                                            $madh = $_POST['madh'];
                                            $pttt = $_POST['pttt'];
                                            $tongdonhang = $_POST['tongdonhang'];
                                            $hoten = $_POST['hoten'];
                                            $diachi = $_POST['diachi'];
                                            $email = $_POST['email'];
                                            $sdt = $_POST['sdt'];
                                            $trangthai= $_POST['trangthai'];
                                            update_donhang($iddh,$id_kh,$madh, $pttt, $tongdonhang, $hoten, $diachi,$email,$sdt,$trangthai);
                                            $thongbao = "Thêm thành công";
                                            }
                                        
                                    //$listjoin_dh=ds_donhang_inner();
                                    $listjoin_dhct=ds_donhangchitiet_inner();
                                    $listdonhang=loadall_donhang();
                                    include '../donhang/index.php';
                                    break;


                                    /**đơn hàng chi tiết */
                                /*đơn hàng chi tiết */
                            case 'donhangchitiet':
                                        $iddh=$_GET['iddh'];
                                        $listdhct=loadone_donhangchitiet($iddh);
                                        //$listdonhangchitiet=loadall_donhangchitiet();
                                        include '../donhangchitiet/index.php';
                                        break; 
                                            /**đơn hàng chi tiết */
                                        
                            case 'adddhct':
                                            if (isset($_POST['themdhct'])) {
                                                $iddh = $_POST['iddh'];
                                                $idsp = $_POST['idsp'];
                                                $soluong = $_POST['soluong'];
                                                $tongtien = $_POST['tongtien'];
                                                $trangthai = $_POST['trangthai'];

                                                $filename = $_FILES['img']['name'];
                                                $target_dir = "../../../../public/assets/dist/img/admin/sanpham/";
                                                $target_file = $target_dir . basename($_FILES["img"]["name"]);

                                                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                                    echo "Thêm ảnh thành công";
                                                } else {
                                                    echo "Không thêm được ảnh";
                                                }
                                                insert_donhangchitiet($id_dhct,$iddh, $id_sp, $soluongsp, $filename, $gia_sp,$ten_sp);
                                                $thongbao= "Thêm thành công";
                                                }
                                            include '../donhangchitiet/add.php';
                                            break; 
                            case 'xoadhct':
                                                if(isset($_GET['id_dhct'])&&($_GET['id_dhct']>0)){
                                                    delete_donhangchitiet($_GET['id_dhct']);
                                                    $thongbao="Xóa thành công";
                                                }
                                                $listjoin_dhct=ds_donhangchitiet_inner();
                                            $listdonhangchitiet=loadall_donhangchitiet();
                                            include "../donhangchitiet/index.php";
                                            break;
                            case 'suadhct':
                                                if(isset($_GET['id_dhct'])&&($_GET['id_dhct']>0)){
                                                    $ct=loadone_donhangchitiet($_GET['id_dhct']);
                                                    }
                                                    //$listjoin_dhct=ds_donhangchitiet_inner();
                                                    $listdonhangchitiet=loadall_donhangchitiet();
                                                    include '../donhangchitiet/update.php';
                                            break;
                            case 'updatedhct':
                                                if (isset($_POST['capnhat'])) {
                                                    $id_dhct = $_POST['id_dhct'];
                                                    $iddh = $_POST['iddh'];
                                                    $id_sp = $_POST['id_sp'];
                                                    $soluongsp = $_POST['soluongsp'];
                                                    $gia_sp = $_POST['gia_sp'];
                                                    $ten_sp = $_POST['ten_sp'];
            
                                                    $filename = $_FILES['img']['name'];
                                                    $target_dir = "../../../../public/assets/dist/img/admin/sanpham/";
                                                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
            
                                                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                                        echo "Thêm ảnh thành công";
                                                    } else {
                                                        echo "Không thêm được ảnh";
                                                    }
                                                    update_donhangchitiet($id_dhct,$iddh, $id_sp, $soluongsp, $filename, $gia_sp, $ten_sp);
                                                    $thongbao= "Cập nhật thành công";
                                                    }
                                                    $listjoin_dhct=ds_donhangchitiet_inner();
                                                $listdonhangchitiet=loadall_donhangchitiet();
                                                include '../donhangchitiet/index.php';
                                                break; 


                                /**Quản lý liên hệ */





                                case 'lienhe':
                                    $listlienhe=loadall_lienhe();
                                    include '../lienhe/index.php';
                                    break;
                            
                                case 'addlh':
                                    if (isset($_POST['themlh'])) {
                                        $ten_khachhang = $_POST['ten_khachhang'];
                                        $email = $_POST['email'];
                                        $sdt = $_POST['sdt'];
                                        $noidung = $_POST['noidung'];
                                        $trangthai = $_POST['trangthai'];
                                        insert_lienhe($ten_khachhang,$email,$sdt,$noidung, $trangthai);
                                        $thongbao = "Thêm thành công";
                                        }
                                    include '../lienhe/add.php';
                                    break;
                                case 'xoalh':
                                        if(isset($_GET['id_lh'])&&($_GET['id_lh']>0)){
                                            delete_lienhe($_GET['id_lh']);
                                            $thongbao="Xóa thành công";
                                        }
                                        $listlienhe=loadall_lienhe();
                                    include "../lienhe/index.php";
                                    break;
                                case 'sualh':
                                        if(isset($_GET['id_lh'])&&($_GET['id_lh']>0)){
                                            $lh=loadone_lienhe($_GET['id_lh']);
                                            }
                                    include '../lienhe/update.php';
                                    break;

                                case 'updatelh':
                                        if (isset($_POST['capnhat'])) {
                                            $idlh = $_POST['idlh'];
                                            $ten_khachhang = $_POST['ten_khachhang'];
                                            $email = $_POST['email'];
                                            $sdt = $_POST['sdt'];
                                            $noidung = $_POST['noidung'];
                                            $trangthai = $_POST['trangthai'];
                                            update_lienhe($idlh,$ten_khachhang,$sdt,$email, $noidung, $trangthai);
                                            $thongbao = "Thêm thành công";
                                            }
                                        $listlienhe=loadall_lienhe();
                                        include '../lienhe/index.php';
                                        break;


                                        /**Quản trị người dùng */

                                    case 'nguoidung':
                                            $listnd= ds_nguoidung_inner();
                                            $listnguoidung=loadall_nguoidung();
                                            include '../nguoidung/index.php';
                                            break;  

                                    case 'addnd':
                                            if (isset($_POST['themnd'])) {
                                                $taikhoan = $_POST['taikhoan'];
                                                $matkhau = $_POST['matkhau'];
                                                $hoten = $_POST['hoten'];
                                                $ngaysinh = $_POST['ngaysinh'];
                                                $sdt = $_POST['sdt'];
                                                $email = $_POST['email'];
                                                $diachi = $_POST['diachi'];
                                                $idpq = $_POST['id_pq'];
                                                $trangthai = $_POST['trangthai_nd'];

                                                insert_nguoidung($taikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi, $idpq, $trangthai);
                                                $thongbao = "Thêm thành công";
                                            }
                                            include '../nguoidung/add.php';
                                            break;

                                    case 'xoand':
                                            if(isset($_GET['id_nd'])&&($_GET['id_nd']>0)){
                                            delete_nguoidung($_GET['id_nd']);
                                            $thongbao="Xóa thành công";
                                            }

                                            $listnguoidung=loadall_nguoidung();
                                            $listnd= ds_nguoidung_inner();
                                            include '../nguoidung/index.php';
                                            break;
                                    case 'suand':
                                            if(isset($_GET['id_nd'])&&($_GET['id_nd']>0)){
                                                $nd=loadone_nguoidung($_GET['id_nd']);
                                                }
                                                $listnd= ds_nguoidung_inner();
                                            include '../nguoidung/update.php';
                                            break;
                                    case 'updatend':
                                                if (isset($_POST['capnhat'])) {
                                                    $id_nd = $_POST['idnd'];
                                                    $taikhoan = $_POST['taikhoan'];
                                                    $matkhau = $_POST['matkhau'];
                                                    $hoten = $_POST['hoten'];
                                                    $ngaysinh = $_POST['ngaysinh'];
                                                    $sdt = $_POST['sdt'];
                                                    $email = $_POST['email'];
                                                    $diachi = $_POST['diachi'];
                                                    $idpq = $_POST['id_pq'];
                                                    $trangthai = $_POST['trangthai_nd'];
                                            
                                                    update_nguoidung($id_nd,$taikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi, $idpq, $trangthai);
                                                    $thongbao = "Cập Nhật thành công";
                                                }
                                                $listnd= ds_nguoidung_inner();
                                                $listnguoidung=loadall_nguoidung();
                                                include '../nguoidung/index.php';
                                                break;               

                                            }
                                        } else {
                                            include "../layout/content.php";
                                        }


                                        include "../layout/footer.php";
                                        ?>
