<?php
    function loadallbl(){
        $sql="select * from binhluan order by id_bl desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    function loadonebl($id){
        $sql="select*from khachhang where id_kh=".$id;
        $suadm=pdo_query_one($sql);
        return $suadm;
    }
    function xoabl($xoabl){
        $sql="delete from binhluan where id_bl=".$xoabl;
        pdo_execute($sql);
    }

    function insert_thembl  ($tenkh,$binhluan,$ngaybl,$idpro){
        $sql="insert into binhluan(tenkh,binhluan,ngaybl,id_bds) values('$tenkh','$binhluan','$ngaybl','$idpro')";
        pdo_execute($sql);
    }
?>