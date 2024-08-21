<?php

function insert_danhmuc($tendm, $filename, $mota, $trangthai)
{
    $sql = "INSERT INTO danhmuc(ten_dm, img_dm, mota, trang_thai) VALUES ('$tendm', '$filename', '$mota', '$trangthai')";
    pdo_execute($sql);
}

function delete_danhmuc($id_dm)
{
    $sql = "DELETE FROM danhmuc WHERE id_dm= '$id_dm'";
    pdo_query($sql);
}
function loadall_danhmuc(){
    $sql="SELECT * from danhmuc order by id_dm desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
} 
 function loadone_danhmuc($id_dm)
 {
     $sql = "SELECT * FROM danhmuc WHERE id_dm = '$id_dm'";
     $dm = pdo_query_one($sql);
     return $dm;
 }

 function update_danhmuc($id_dm, $tendm, $filename, $mota, $trangthai)
 {
    if ($filename != "") {
        $sql = "UPDATE danhmuc SET ten_dm='$tendm',img_dm='$filename',mota='$mota',trang_thai='$trangthai' WHERE id_dm = '$id_dm'";
    } else {
        $sql = "UPDATE danhmuc SET ten_dm='$tendm',mota='$mota',trang_thai='$trangthai' WHERE id_dm = '$id_dm'";
    }
    pdo_execute($sql);
 }
?>