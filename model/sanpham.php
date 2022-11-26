<?php
    function insert_themsp($tenbds,$gia,$hinh,$diachi,$thongtin){
        $sql="insert into bdsan(tenbds,gia,anh,diachi,mota) values('$tenbds','$gia','$hinh','$diachi','$thongtin')";
        pdo_execute($sql);
    }


    function xoasp($xoasp){
        $sql="delete from bdsan where id_bds=".$xoasp;
        pdo_execute($sql);
    }

    function loadallsp($iddm,$kyw){
        $sql="select * from bdsan where 1";
        if($kyw!=""){
            $sql.=" and tenbds like '%".$kyw. "%'";
        }
        if($iddm>0){
            $sql.=" and id_bds= '".$iddm."%'";
        }
        $sql.=" order by id_bds desc";
        $sanpham=pdo_query($sql);
        return $sanpham;
    }

    function loadallsp_home(){
        $sql="select * from bdsan where 1 order by id_bds desc limit 0,9";
        $sanpham_home=pdo_query($sql);
        return $sanpham_home;
    }



    function loadallsp_home_top10(){
        $sql="select * from bdsan where 1 order by luot_xem desc limit 0,10";
        $sanpham_home=pdo_query($sql);
        return $sanpham_home;
    }
    function loadtendm($iddm){
        if($iddm>0){
             $sql="select*from loai_hang where ma_loai=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $ten_loai;
        }else{
            return "";
        }
        
    }

    function loadonesp($id){
        $sql="select*from bdsan where id_bds=".$id;
        $suasp=pdo_query_one($sql);
        return $suasp;
    }
    // function loadspcl($id,$iddm){
    //     $sql="select*from bdsan where ma_loai=".$iddm." AND id_bds<>".$id;
    //     $sanpham_home=pdo_query($sql);
    //     return $sanpham_home;
    // }
    function updatesp($id,$tenbds,$gia,$hinh,$diachi,$thongtin){
        if($hinh!="") $sql="update bdsan set tenbds='".$tenbds."',gia= '".$gia. "',anh= '".$hinh. "',diachi= '".$diachi. "',mota= '".$thongtin. "' where id_bds=".$id;
       else   $sql="update bdsan set tenbds= '".$tenbds. "',gia= '".$gia. "',diachi= '".$diachi. "',mota= '".$thongtin. "' where id_bds=".$id;
        pdo_execute($sql);
    }
?>