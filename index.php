<?php
    include 'hearder.php';
    include "model/database.php";
    include "model/sanpham.php";
    include "model/khachhang.php";
    include "anh.php";
    $spnew=loadallsp_home();
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                
               include "view/sanpham.php";
                break;

            case 'ctbds':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $onesp=loadonesp($id);
                }
                if(isset($_POST['tttv'])&&($_POST['tttv'])){
                    $tenkh=$_POST['tenkh'];
                    $gmail=$_POST['gmail'];
                    $sdt=$_POST['sdt'];
                    $diachi=$_POST['diachi'];
                    $id_bds=$_POST['id_bds'];
                    $thoigianyeucau=date("Y/m/d");

                    $checkkk=checkkk($tenkh,$gmail,$sdt,$diachi);
                    if(is_array($checkkk)){
                        $id_khachhang=$checkkk['id_kh'];
                    }else{
                        $id_khachhang=insert_themkh($tenkh,$gmail,$sdt,$diachi);
                    }
                    

                    insert_themtv($id_khachhang,$id_bds,$thoigianyeucau);
                    
                    
                }
                $thongbaotv="Liên hệ tư vấn thành công. Vui lòng đợi nhân viên tư vấn liên hệ";
                include "view/chitietbds.php";
                break;
            case 'tuvan':
                
                include "view/lienhetv.php";
                break;

            default: 
                    include 'trangchu.php';
                    break;
        }
    }
    else{
        include 'trangchu.php';
    }
    include 'footer.php';
?>