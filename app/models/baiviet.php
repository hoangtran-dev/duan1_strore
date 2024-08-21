<?php

function insert_baiviet($tenbv,$noidung ,$filename, $trangthai)
{
    $sql = "INSERT INTO baiviet(ten_bai_viet, noi_dung, img_bv, trang_thai ) VALUES ('$tenbv', '$noidung','$filename','$trangthai')";
    pdo_execute($sql);
}

function loadall_baiviet(){
    $sql="SELECT * from baiviet order by id_bv desc";
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
} 

function loadone_baiviet($id_bv)
{
    $sql = "SELECT * FROM baiviet WHERE id_bv= '$id_bv'";
    $bv= pdo_query_one($sql);
    return $bv;
}

function delete_baiviet($id_bv)
{
    $sql = "DELETE FROM baiviet WHERE id_bv= '$id_bv'";
    pdo_query($sql);
}

function loadAll_baiviet_home()
{
    $sql = "SELECT * FROM baiviet WHERE 1 ORDER BY id_bv DESC ";
    $listbaiviet = pdo_query($sql);
    return $listbaiviet;
}

function  update_baiviet($idbv,$tenbv, $noidung, $filename, $trangthai)
{
   if ($filename != "") {
       $sql = "UPDATE baiviet SET ten_bai_viet='$tenbv',img_bv='$filename',noi_dung='$noidung',trang_thai='$trangthai' WHERE id_bv = '$idbv'";
   } else {
       $sql = "UPDATE baiviet SET ten_bai_viet='$tenbv',noi_dung='$noidung',trang_thai='$trangthai' WHERE id_bv = '$idbv'";
   }
   pdo_execute($sql);
}

?>