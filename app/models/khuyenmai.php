<?php

function insert_khuyenmai($makm, $phan_tram_km,$ngay_bd,$ngay_kt,$mota, $trangthai)
{
    $sql = "INSERT INTO khuyenmai(ma_km,phan_tram_km,ngay_bd,ngay_kt,mota,trang_thai) VALUES ('$makm', '$phan_tram_km', '$ngay_bd','$ngay_kt','$mota','$trangthai')";
    pdo_execute($sql);
}


function loadall_khuyenmai(){
    $sql="SELECT * from khuyenmai order by id_km desc";
    $listkhuyenmai=pdo_query($sql);
    return $listkhuyenmai;
} 

function loadone_khuyenmai($id_km)
{
    $sql = "SELECT * FROM khuyenmai WHERE id_km = '$id_km'";
    $km = pdo_query_one($sql);
    return $km;
}
function delete_khuyenmai($id_km)
{
    $sql = "DELETE FROM khuyenmai WHERE id_km= '$id_km'";
    pdo_query($sql);
}

function  update_khuyenmai($idkm,$makm, $phan_tram_km,$ngay_bd,$ngay_kt,$mota, $trangthai)
 {
    
  
   $sql = "UPDATE khuyenmai SET ma_km='$makm',phan_tram_km='$phan_tram_km',ngay_bd='$ngay_bd',ngay_kt='$ngay_kt',mota='$mota' ,trang_thai='$trangthai'  WHERE id_km = '$idkm'";
    


    pdo_execute($sql);
}
?>
