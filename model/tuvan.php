<?php
function  updatetv($id,$tenkh,$gmail,$sdt,$diachi){
        
    $sql="update khachhang set tenkh= '".$tenkh. "',gmail= '".$gmail. "',sdt= '".$sdt. "',diachi= '".$diachi. "' where id_kh=".$id;
    pdo_execute($sql);
}

function loadalltv(){
    $sql="select khachhang.tenkh,khachhang.sdt,khachhang.gmail, bdsan.tenbds,tuvan.id_tuvan, tuvan.thoigianyeucau, tuvan.trangthai, tuvan.id_nhanvien from ((tuvan  inner join khachhang on khachhang.id_kh=tuvan.id_kh)  inner join bdsan on bdsan.id_bds=tuvan.id_bds) group by tuvan.id_tuvan order by tuvan.id_tuvan desc";
    $listtv=pdo_query($sql);
    return $listtv;
}
function loadonetv($id){
    $sql="select*from khachhang where id_kh=".$id;
    $suadm=pdo_query_one($sql);
    return $suadm;
}
function xoatv($xoa){
    $sql="delete from tuvan where id_tuvan=".$xoa;
    pdo_execute($sql);
}

// $sql="select loai_hang.ten_loai as tenloai, loai_hang.ma_loai as maloai, count(hang_hoa.ten_hh) as countsp, min(hang_hoa.gia) as mingia, max(hang_hoa.gia) as maxgia, avg(hang_hoa.gia) as avggia";
// $sql.=" from hang_hoa left join loai_hang on loai_hang.ma_loai=hang_hoa.ma_loai";
// $sql.=" group by loai_hang.ma_loai order by loai_hang.ma_loai desc";
// $listtk=pdo_query($sql);
// return $listtk;
?>