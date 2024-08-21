<?php

function insert_bienthe($idsp, $tensp, $giasp, $motasp, $szsp, $mausp, $soluongsp, $trangthai)
{
    $sql = "INSERT INTO bienthe(id_sp, ten_sp, gia_sp, mota_sp, sz_sp, mau_sp, soluong_sp, trang_thai) VALUES ('$idsp', '$tensp', '$giasp', '$motasp', '$szsp', '$mausp', '$soluongsp', '$trangthai')";
    pdo_execute($sql);
}

function delete_bienthe($id_bt)
{
    $sql = "DELETE FROM bienthe WHERE id_bt= '$id_bt'";
    pdo_query($sql);
}
function loadall_bienthe(){
    $sql="SELECT * from bienthe order by id_bt desc";
    $listbienthe=pdo_query($sql);
    return $listbienthe;
} 
    
 function loadone_bienthe($id_bt)
 {
     $sql = "SELECT * FROM bienthe WHERE id_bt = '$id_bt'";
     $bt = pdo_query_one($sql);
     return $bt;
 }

 function update_bienthe($id_bt, $idsp, $tensp, $giasp, $motasp, $szsp, $mausp, $soluongsp, $trangthai)
 {
  
    $sql = "UPDATE bienthe SET id_sp='$idsp',ten_sp='$tensp',gia_sp='$giasp',mota_sp='$motasp',sz_sp='$szsp',mau_sp='$mausp',soluong_sp='$soluongsp',trang_thai='$trangthai' WHERE id_bt = '$id_bt'";
    pdo_execute($sql);
 }

 function ds_bienthe_inner()
 {
     $sql = "SELECT sanpham.id_sp,bienthe.id_bt as id_bt, bienthe.ip_sp, bienthe.ten_sp, bienthe.gia_sp, bienthe.mota_sp, bienthe.sz_sp, bienthe.mau_sp, bienthe.soluong_sp FROM sanpham INNER JOIN bienthe ON sanpham.id_sp = bienthe.id_bt
     ORDER BY id_bt DESC";
     $listbt = pdo_query($sql);
     return $listbt;
 }
function ds_bienthe_inner_form($id_sp)
{
    $sql = "SELECT sanpham.id_sp,bienthe.id_bt as id_bt, bienthe.ip_sp, bienthe.ten_sp, bienthe.gia_sp, bienthe.mota_sp, bienthe.sz_sp, bienthe.mau_sp, bienthe.soluong_sp FROM sanpham INNER JOIN bienthe ON sanpham.id_sp = bienthe.id_bt
    where bienthe.id_sp = '$id_sp' ORDER BY id_bt DESC";
    $listbt = pdo_query($sql);
    return $listbt;
}
      /*  FROM products 
        INNER JOIN variants ON products.product_id = variants.product_id";*/

?>