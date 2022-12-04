<?php
     function insert_themtt($tenkh,$gamil,$sdt,$diachi){
        $sql="insert into khachhang(tenkh,gmail,sdt,diachi) values('$tenkh','$gamil','$sdt','$diachi')";
        pdo_execute($sql);
    }

    function insert_themkh($tenkh,$gmail,$sdt,$diachi){
        $sql="insert into khachhang(tenkh,gmail,sdt,diachi) values('$tenkh','$gmail','$sdt','$diachi')";
        return pdo_execute_lastId($sql);
    }
    function check($user,$pass){
        $sql="select*from taikhoan where user='".$user."' AND pass='".$pass."'";
        $tk=pdo_query_one($sql);
        return $tk;
    }

    function checkemail($email){
        $sql="select*from taikhoan where email='".$email."'";
        $tk=pdo_query_one($sql);
        return $tk;
    }

    function  updatekh($id,$tenkh,$gmail,$sdt,$diachi){
        
        $sql="update khachhang set tenkh= '".$tenkh. "',gmail= '".$gmail. "',sdt= '".$sdt. "',diachi= '".$diachi. "' where id_kh=".$id;
        pdo_execute($sql);
    }

    function loadalltk(){
        $sql="select * from khachhang order by id_kh desc";
        $listkhachhang=pdo_query($sql);
        return $listkhachhang;
    }
    function loadonetk($id){
        $sql="select*from khachhang where id_kh=".$id;
        $suadm=pdo_query_one($sql);
        return $suadm;
    }
    function xoakh($xoadm){
        $sql="delete from khachhang where id_kh=".$xoadm;
        pdo_execute($sql);
    }

    

    function insert_themtv($id_khachhang,$id_bds,$thoigianyeucau){
        $sql="insert into tuvan(id_kh,id_bds,thoigianyeucau) values('$id_khachhang','$id_bds','$thoigianyeucau')";
        pdo_execute($sql);
    }

    function checkkk($tenkh,$gmail,$sdt,$diachi){
        $sql="select*from khachhang where tenkh='".$tenkh."' AND gmail='".$gmail."' AND sdt='".$sdt."' AND diachi='".$diachi."'  ";
        $tk=pdo_query_one($sql);
        return $tk;
    }
function checkuser($user){
    $sql="select*from taikhoan where user='".$user."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function updatetk($id_tk,$user,$pass,$email,$diachi){

    $sql="update taikhoan set user= '".$user. "',pass= '".$pass. "',email= '".$email. "',diachi= '".$diachi. "' where id_tk=".$id_tk;
    pdo_execute($sql);
}
function  themtk($user,$pass,$email, $sdt,$dia_chi){
    $sql="insert into taikhoan(user,pass,email,sdt,diachi) values('$user','$pass','$email','$sdt','$dia_chi')";
    pdo_execute($sql);
}
?>