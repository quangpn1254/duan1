<?php
function  updatetv($nvtuvan,$id){
        
    $sql="update tuvan set id_nhanvien= ".$nvtuvan. " where id_tuvan=".$id;
    pdo_execute($sql);
}
function  updatedatv($id){

    $sql="update tuvan set trangthai= 1 where id_tuvan=".$id;
    pdo_execute($sql);
}
function loadalltv($kyw,$nv,$trangthai){
    $sql="select khachhang.tenkh,nhanvien_hotro.ten_nhanvien,khachhang.sdt,khachhang.gmail, bdsan.tenbds,tuvan.id_tuvan, tuvan.thoigianyeucau, tuvan.trangthai, tuvan.id_nhanvien from (((tuvan  inner join khachhang on khachhang.id_kh=tuvan.id_kh)  inner join bdsan on bdsan.id_bds=tuvan.id_bds)inner join nhanvien_hotro on nhanvien_hotro.id_nhanvien=tuvan.id_nhanvien) where 1";
    if($kyw!=""){
        $sql.=" and tenkh like '%".$kyw. "%'";
    }
    if($nv>=0){
        $sql.=" and tuvan.id_nhanvien= '".$nv. "%'";
        // $sql.=" and ma_loai= '".$iddm."%'";
    }
    if($trangthai!=""){
        $sql.=" and trangthai like '%".$trangthai. "%'";
    }
   
    $sql.=" group by tuvan.id_tuvan order by tuvan.id_tuvan desc";
    $listtv=pdo_query($sql);
    return $listtv;
}
function loadallnvtv(){
    $sql="select * from nhanvien_hotro";
    $listnv=pdo_query($sql);
    return $listnv;
}
function loadonetv($id){
    $sql="select*from tuvan where id_tuvan=".$id;
    $suatv=pdo_query_one($sql);
    return $suatv;
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

function loadallnv(){
    $sql="select * from nhanvien_hotro order by id_nhanvien  desc ";
    $nvtv=pdo_query($sql);
    return $nvtv;
}
?>