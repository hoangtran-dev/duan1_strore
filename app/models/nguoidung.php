<?php

function insert_nguoidung($taikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi/*, $idpq, $trangthai*/)
{
    $sql = "INSERT INTO nguoidung(tai_khoan, mk_nd, hoten_nd, ngaysinh_nd, sdt_nd, email_nd, diachi_nd/*,id_pq, trangthai_nd*/) VALUES ('$taikhoan', '$matkhau', '$hoten', '$ngaysinh', '$sdt', '$email', '$diachi')";
    pdo_execute($sql);
}

function delete_nguoidung($id_nd)
{
    $sql = "DELETE FROM nguoidung WHERE id_nd= '$id_nd'";
    pdo_query($sql);
}
function loadall_nguoidung(){
    $sql="SELECT * from nguoidung order by id_nd desc";
    $listnguoidung=pdo_query($sql);
    return $listnguoidung;
} 


    
 function loadone_nguoidung($id_nd)
 {
    $sql = "SELECT * FROM nguoidung WHERE id_nd = '$id_nd'";
    $nd = pdo_query_one($sql);
    return $nd;
 }
 function  ds_nguoidung_inner(){
    $sql = "SELECT * from nguoidung 
    join phanquyen on nguoidung.id_pq = phanquyen.id_pq";    
    $listnd = pdo_query($sql);
    return $listnd;
 }

 function update_nguoidung($id_nd, $taikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi, $idpq, $trangthai)
 {
    $sql = "UPDATE nguoidung SET tai_khoan='$taikhoan',mk_nd='$matkhau',hoten_nd='$hoten',ngaysinh_nd='$ngaysinh',sdt_nd='$sdt',email_nd='$email',diachi_nd='$diachi',id_pq='$idpq',trangthai_nd='$trangthai' WHERE id_nd = '$id_nd'";
    pdo_execute($sql);
 }

 function update_nguoidun($id_nd, $taikhoan, $matkhau, $hoten, $ngaysinh, $sdt, $email, $diachi)
 {
    $sql = "UPDATE nguoidung SET tai_khoan='$taikhoan',mk_nd='$matkhau',hoten_nd='$hoten',ngaysinh_nd='$ngaysinh',sdt_nd='$sdt',email_nd='$email',diachi_nd='$diachi' WHERE id_nd = '$id_nd'";
    pdo_execute($sql);
 }
?>