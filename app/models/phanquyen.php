<?php
function insert_phanquyen($tenchucvu, $mota, $trangthai)
{
    $sql = "INSERT INTO phanquyen(ten_chuc_vu, mo_ta, trang_thai) VALUES ('$tenchucvu', '$mota', '$trangthai')";
    pdo_execute($sql);
}

function delete_phanquyen($id_pq)
{
    $sql = "DELETE FROM phanquyen WHERE id_pq= '$id_pq'";
    pdo_query($sql);
}
function loadall_phanquyen(){
    $sql="SELECT * from phanquyen order by id_pq desc";
    $listphanquyen=pdo_query($sql);
    return $listphanquyen;
} 



 function loadone_phanquyen($id_pq)
 {
     $sql = "SELECT * FROM phanquyen WHERE id_pq = '$id_pq'";
     $pq = pdo_query_one($sql);
     return $pq;
 }

 function update_phanquyen($idpq,$tenchucvu, $mota, $trangthai)
 {

        $sql = "UPDATE phanquyen SET ten_chuc_vu='$tenchucvu',mo_ta='$mota',trang_thai='$trangthai' WHERE id_pq = '$idpq'";
    pdo_execute($sql);
 }
?>