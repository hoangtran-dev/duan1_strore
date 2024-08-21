<?php

function insert_binhluan($idbl,$id_kh ,$id_sp,$noi_dung,$diem,$ngay_danh_gia, $trangthai)
{
    $sql = "INSERT INTO binhluan(id_bl,id_kh,id_sp,noi_dung,diem,ngay_danh_gia,trang_thai ) VALUES ('$idbl', '$id_kh','$id_sp','$noi_dung','$diem','$ngay_danh_gia','$trangthai')";
    pdo_execute($sql);
}




function insert_bl($id_kh ,$id_sp,$noi_dung,$diem,$ngay_danh_gia )
{
    $sql = "INSERT INTO binhluan(id_kh,id_sp,noi_dung,diem,ngay_danh_gia ) VALUES ( '$id_kh','$id_sp','$noi_dung','$diem','$ngay_danh_gia')";
    pdo_execute($sql);
}

function loadall_binhluan(){
    $sql="SELECT * from binhluan order by id_bl desc";
    $listbl=pdo_query($sql);
    return $listbl;
} 



   function load_binhluan($idbl)
    {
        $sql = "SELECT binhluan.noi_dung,binhluan.ngay_danh_gia,taikhoan.ten_taikhoan FROM binhluan
        JOIN taikhoan on binhluan.id_kh=taikhoan.id_kh
        JOIN sanpham on binhluan.id_sp=sanpham.id_sp
        WHERE sanpham.id_bl=$idbl";
        $result = pdo_query($sql);
        return $result;
    }


    /*function loadall_binhluan($id_sp){
        $sql="SELECT * from binhluan WHERE 1";
        if($id_sp>0) $sql.=" AND idbl='".$id_sp."'";
        $sql.=" order by id desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }*/

 
     
?>
 