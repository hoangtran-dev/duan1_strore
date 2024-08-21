<?php

function insert_donhang($id_kh,$madh, $pttt, $tongdonhang, $hoten, $diachi,$email,$sdt,$trangthai)
{
    $sql = "INSERT INTO donhang(id_kh,madh,pttt,tongdonhang,hoten,diachi,email,sdt,$trangthai) VALUES ('$id_kh','$madh', '$pttt', '$tongdonhang', '$hoten', '$diachi','$email','$sdt','$trangthai')";
    pdo_execute($sql);
}

function insert_donhang1($madh, $pttt, $tongdonhang, $hoten, $diachi,$email,$sdt)

{
    $sql = "INSERT INTO donhang(madh,pttt,tongdonhang,hoten,diachi,email,sdt) VALUES ('$madh', '$pttt', '$tongdonhang', '$hoten', '$diachi','$email','$sdt')";
    pdo_execute($sql);
}

function delete_donhang($iddh)
{
    $sql = "DELETE FROM donhang WHERE iddh= '$iddh'";
    pdo_query($sql);
}
function loadall_donhang(){
    $sql="SELECT * from donhang order by iddh desc";
    $listdonhang=pdo_query($sql);
    return $listdonhang;
} 
 function loadone_donhang($iddh)
 {
     $sql = "SELECT * FROM donhang WHERE iddh = '$iddh'";
     $dh = pdo_query_one($sql);
     return $dh;
 }

 
 function  ds_donhang_inner(){
    $sql = "SELECT * from donhang 
    join khachhang on donhang.id_kh = khachhang.id_kh
     order by iddh desc";  
    $listdh = pdo_query($sql);
    return $listdh;
 }
 

 function update_donhang($iddh,$id_kh,$madh, $pttt, $tongdonhang, $hoten, $diachi,$email,$sdt,$trangthai)
 {
  
    $sql = "UPDATE donhang SET madh='$madh',id_kh='$id_kh',pttt='$pttt',tongdonhang='$tongdonhang',hoten='$hoten',diachi='$diachi',email='$email',sdt='$sdt',trangthai='$trangthai' WHERE iddh = '$iddh'";
    pdo_execute($sql);
 }

 
function taodonhang($id_kh,$madh,$pttt,$tongdonhang,$hoten,$diachi,$email,$sdt){
    $conn=pdo_get_connection();
    $sql = "INSERT INTO donhang(id_kh,madh, pttt, tongdonhang, hoten, diachi, email, sdt) 
    VALUES ('$id_kh','$madh', '$pttt', '$tongdonhang', '$hoten', '$diachi','$email','$sdt')";
    //pdo_execute($sql);
    $conn->exec($sql);
    $last_id=$conn->lastInsertId();
    return $last_id;

}

function getshowdonhangct($iddh){
    $conn=pdo_get_connection();
    $stmt =$conn->prepare("SELECT * from donhangchitiet WHERE iddh=".$iddh);
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getshowdonhang($iddh){
    $conn=pdo_get_connection();
    $stmt =$conn->prepare("SELECT * from donhang WHERE iddh=".$iddh);
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}



?>