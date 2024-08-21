<?php

function insert_lienhe($ten_khachhang,$email,$sdt, $noidung, $trangthai)
{
    $sql = "INSERT INTO lienhe(ten_khachhang,email,sdt, noi_dung, trang_thai) VALUES ('$ten_khachhang','$email','$sdt','$noidung', '$trangthai')";
    pdo_execute($sql);
}


function lienhe($ten_khachhang,$email,$sdt, $noidung)
{
    $sql = "INSERT INTO lienhe(ten_khachhang,email,sdt, noi_dung) VALUES ('$ten_khachhang','$email','$sdt','$noidung')";
    pdo_execute($sql);
}



function insert_lihe( $email, $noidung)
{
    $sql = "INSERT INTO lienhe(email, noi_dung) VALUES ('$email', '$noidung')";
    pdo_execute($sql);
}


function delete_lienhe($id_lh)
{
    $sql = "DELETE FROM lienhe WHERE id_lh= '$id_lh'";
    pdo_query($sql);
}
function loadall_lienhe(){
    $sql="SELECT * from lienhe order by id_lh desc";
    $listlienhe=pdo_query($sql);
    return $listlienhe;
} 
 function loadone_lienhe($id_lh)
 {
     $sql = "SELECT * FROM lienhe WHERE id_lh = '$id_lh'";
     $lh = pdo_query_one($sql);
     return $lh;
 }
 function  ds_lienhe_inner(){
    $sql = "SELECT * from lienhe 
    join khachhang on lienhe.id_kh = khachhang.id_kh";    
    $listlh = pdo_query($sql);
    return $listlh;
 }

 function update_lienhe($id_lh, $ten_khachhang,$email,$sdt, $noidung, $trangthai)
 {
  
    $sql = "UPDATE lienhe SET ten_khachhang='$ten_khachhang',email='$email',sdt='$sdt',noi_dung='$noidung',trang_thai='$trangthai' WHERE id_lh = '$id_lh'";
    pdo_execute($sql);
 }



 /*function taolienhe($ten_khachhang,$sdt,$email, $noidung){
    //$conn=pdo_get_connection();
    $sql = "INSERT INTO lienhe(ten_khachhang, sdt, email, noi_dung) 
    VALUES ('$ten_khachhang','$sdt',$email', '$noidung')";
     pdo_execute($sql);
    //$conn->exec($sql);
    //$last_id=$conn->lastInsertId();
    //return $last_id;

}*/
?>