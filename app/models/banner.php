<?php

function  insert_banner($tenbanner, $filename, $link, $trangthai)
{
    $sql = "INSERT INTO banner(ten_banner,img, link, trang_thai) VALUES ('$tenbanner', '$filename', '$link', '$trangthai')";
    pdo_execute($sql);
}

function delete_banner($id_banner)
{
    $sql = "DELETE FROM banner WHERE id_banner= '$id_banner'";
    pdo_query($sql);
}
function loadall_banner(){
    $sql="SELECT * from banner order by id_banner desc";
    $listbanner=pdo_query($sql);
    return $listbanner;
} 

 function loadone_banner($id_banner)
 {
     $sql = "SELECT * FROM banner WHERE id_banner = '$id_banner'";
     $bn = pdo_query_one($sql);
     return $bn;
 }


 function update_banner($id_banner,$tenbanner, $filename, $link, $trangthai)
 {
    if ($filename != "") {
        $sql = "UPDATE banner SET ten_banner='$tenbanner',img='$filename',link='$link',trang_thai='$trangthai' WHERE id_banner = '$id_banner'";
    } else {
        $sql = "UPDATE banner SET ten_banner='$tenbanner',link='$link',trang_thai='$trangthai' WHERE id_banner = '$id_banner'";
    }
    pdo_execute($sql);
 }
 ?>