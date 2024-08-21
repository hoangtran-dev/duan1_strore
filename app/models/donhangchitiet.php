
<?php

function insert_donhangchitiet($id_dhct,$iddh, $id_sp, $soluongsp, $filename, $gia_sp,$ten_sp)
{
    $sql = "INSERT INTO donhangchitiet($id_dhct,iddh,id_sp,soluongsp,gia_sp,ten_sp,img_sp) VALUES ('$id_dhct','$iddh', '$id_sp', '$soluongsp', '$filename', '$gia_sp', '$ten_sp')";
    pdo_execute($sql);
}

function delete_donhangchitiet($id_dhct)
{
    $sql = "DELETE FROM donhangchitiet WHERE id_dhct= '$id_dhct'";
    pdo_query($sql);
}
function loadall_donhangchitiet(){
    $sql="SELECT * from donhangchitiet order by id_dhct desc";
    $listdonhangchitiet=pdo_query($sql);
    return $listdonhangchitiet;
} 
 /*function loadone_donhangchitiet($id_dhct)
 {
     $sql = "SELECT * FROM donhangchitiet WHERE id_dhct = '$id_dhct'";
     $dhct = pdo_query_one($sql);
     return $dhct;
 }
*/
function loadone_donhangchitiet($iddh)
 {
     $sql = "SELECT * FROM donhangchitiet join donhang on  donhangchitiet.iddh = donhang.iddh WHERE donhangchitiet.iddh = '$iddh' ";

     $dhcts = pdo_query($sql);
     return $dhcts;
 }



 function  ds_donhangchitiet_inner()
 {
    $sql = "SELECT * from donhangchitiet 
    join donhang on donhangchitiet.iddh = donhang.iddh
    join sanpham on donhangchitiet.id_sp = sanpham.id_sp
    order by id_dhct desc";    
    $listdhct = pdo_query($sql);
    return $listdhct;
 }
 function  update_donhangchitiet($id_dhct,$iddh, $id_sp, $soluongsp, $filename, $gia_sp, $ten_sp)
 {
    if ($filename != "") {
        $sql = "UPDATE donhangchitiet SET iddh='$iddh',id_sp='$id_sp',soluongsp='$soluongsp',img_sp=' $filename',gia_sp='$gia_sp',ten_sp='$ten_sp' WHERE id_dhct = '$id_dhct'";
    } else {
        $sql = "UPDATE donhangchitiet SET iddh='$iddh',id_sp='$id_sp',soluongsp='$soluongsp',gia_sp='$gia_sp',ten_sp='$ten_sp' WHERE id_dhct = '$id_dhct'";
    }
    pdo_execute($sql);
 }

 function addtocard($iddh,$id_sp,$ten_sp,$img_sp,$gia_sp,$soluongsp){
    $sql = "INSERT INTO donhangchitiet(iddh, id_sp, ten_sp, img_sp, gia_sp, soluongsp) 
    VALUES ('$iddh', '$id_sp', '$ten_sp', '$img_sp', '$gia_sp','$soluongsp')";
    pdo_execute($sql);
}
?>