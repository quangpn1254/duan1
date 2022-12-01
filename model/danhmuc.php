<?php
    function loadalldm(){
        $sql="select * from danhmuc order by id_dmuc desc";
        $listdm=pdo_query($sql);
        return $listdm;
    }
    function loadalldc(){
        $sql="select diachi from bdsan GROUP by diachi order by id_dmuc desc";
        $listdc=pdo_query($sql);
        return $listdc;
    }
?>