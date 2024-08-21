<?php

function insert_sanpham($tensp, $filename, $mota, $giasp, $ngaynhap, $soluong,  $iddm, $trangthai)
{
    $sql = "INSERT INTO sanpham(ten_sp, img_sp, mota_sp, gia_sp, ngay_nhap, soluong_sp,id_dm, trangthai ) VALUES ('$tensp', '$filename', '$mota', '$giasp', '$ngaynhap', '$soluong', '$iddm', '$trangthai')";
    pdo_execute($sql);
}
/*
function loadall_sanpham(){
    $sql="SELECT * from sanpham order by id_sp desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
} 
*/


function loadall_sanpham($kyw="", $id_dm=0){
    $sql="SELECT * from sanpham WHERE 1"; // nối chuỗi sql
    if($kyw!=""){
        $sql.=" and ten_sp like '%".$kyw."%'";
    }
    if($id_dm>0){
        $sql.=" and id_dm ='".$id_dm."'";
    }
    $sql.=" order by id_dm desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}


function loadone_sanpham($id_sp)
{
    $sql = "SELECT * FROM sanpham WHERE id_sp= '$id_sp'";
    $sp= pdo_query_one($sql);
    return $sp;
}

function delete_sanpham($id_sp)
{
    $sql = "DELETE FROM sanpham WHERE id_sp= '$id_sp'";
    pdo_query($sql);
}
function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp DESC ";
    $indexsp = pdo_query($sql);
    return $indexsp;
}
function  ds_sanpham_inner(){
    $sql = "SELECT * FROM sanpham 
    JOIN danhmuc ON sanpham.id_dm = danhmuc.id_dm";    
    $listsp = pdo_query($sql);
    return $listsp;
 }
function update_sanpham($id_sp,$tensp, $filename, $mota, $giasp, $ngaynhap, $soluong,$iddm, $trangthai)
{
   if ($filename != "") {
       $sql = "UPDATE sanpham SET ten_sp='$tensp',img_sp='$filename',mota_sp='$mota',gia_sp='$giasp',ngay_nhap='$ngaynhap',soluong_sp='$soluong',id_dm='$iddm',trangthai='$trangthai' WHERE id_sp = '$id_sp'";
   } else {
       $sql = "UPDATE sanpham SET ten_sp='$tensp',mota_sp='$mota',gia_sp='$giasp',ngay_nhap='$ngaynhap',soluong_sp='$soluong',id_dm='$iddm',trangthai='$trangthai' WHERE id_sp = '$id_sp'";
   }
   pdo_execute($sql);
}
function sanpham_cungloai($id_sp,$iddm)
{
    $sql = "SELECT * FROM sanpham WHERE id_dm='$iddm' AND id_sp !='$id_sp'";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}


function load_ten_dm($iddm){
    if($iddm>0){
        $sql= "SELECT * from danhmuc WHERE id_dm=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}




function loadall_sanpham_top8()
{
    $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,8";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>