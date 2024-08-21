<?php

function insert_khachhang($tentaikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi,$quyen_nd, $trangthai)
{
    $sql = "INSERT INTO khachhang(ten_taikhoan, mat_khau, ho_ten, ngay_sinh, sdt, email, dia_chi,quyen_nd, trang_thai) VALUES ('$tentaikhoan', '$matkhau', '$hoten', '$ngaysinh', '$sdt', '$email', '$diachi','$quyen_nd', '$trangthai')";
    pdo_execute($sql);
}

function insert_khhang($tentaikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi, $trangthai)
{
    $sql = "INSERT INTO khachhang(ten_taikhoan, mat_khau, ho_ten, ngay_sinh, sdt, email, dia_chi, trang_thai) VALUES ('$tentaikhoan', '$matkhau', '$hoten', '$ngaysinh', '$sdt', '$email', '$diachi','$trangthai')";
    pdo_execute($sql);
}

function delete_khachhang($id_kh)
{
    $sql = "DELETE FROM khachhang WHERE id_kh= '$id_kh'";
    pdo_query($sql);
}
function loadall_khachhang(){
    $sql="SELECT * from khachhang order by id_kh desc";
    $listkhachhang=pdo_query($sql);
    return $listkhachhang;
} 
    
 function loadone_khachhang($id_kh)
 {
    $sql = "SELECT * FROM khachhang WHERE id_kh = '$id_kh'";
    $kh = pdo_query_one($sql);
    return $kh;
 }

 function   update_khachhang($idkh,$tentaikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi,$quyen_nd, $trangthai)
 {
    $sql = "UPDATE khachhang SET ten_taikhoan='$tentaikhoan',mat_khau='$matkhau',ho_ten='$hoten',ngay_sinh='$ngaysinh',sdt='$sdt',email='$email',dia_chi='$diachi',quyen_nd='$quyen_nd',trang_thai='$trangthai' WHERE id_kh = '$idkh'";
    pdo_execute($sql);
 }

 function   update_khhang($idkh,$tentaikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi, $trangthai)
 {
    $sql = "UPDATE khachhang SET ten_taikhoan='$tentaikhoan',mat_khau='$matkhau',ho_ten='$hoten',ngay_sinh='$ngaysinh',sdt='$sdt',email='$email',dia_chi='$diachi',trang_thai='$trangthai' WHERE id_kh = '$idkh'";
    pdo_execute($sql);
 }


 function checkuser($user,$pass){
    $sql = "SELECT * FROM khachhang WHERE ten_taikhoan='".$user."' AND mat_khau='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
    }

    function checkemail($email)
{
    $sql = "SELECT * FROM khachhang where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

?>