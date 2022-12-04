<?php
    include "../model/database.php";
    include "../model/sanpham.php";
    include "../model/khachhang.php";
    include "../model/danhmuc.php";
    include "../model/binhluan.php";
    include "../model/tuvan.php";
    include "header.php";
    $danhmuc=loadalldm();
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            //danh mục
            case 'dm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    $sql="insert into danhmuc(tendmuc) values ('$tenloai')" ;
                    pdo_execute($sql);
                    $thongbao="Thêm Thành công";
                }
               include "danhmuc/adddm.php";
                break;

            case 'dsdm':
                $sql="select * from danhmuc order by tendmuc";
                $listdm=pdo_query($sql);
                include "danhmuc/dsdm.php";
                break;
            
            case 'xoadm':
                if(isset($_GET['id_dmuc'])&&($_GET['id_dmuc']>0)){
                    $sql="delete from danhmuc where id_dmuc=".$_GET['id_dmuc'];
                    pdo_execute($sql);
                }
                $sql="select * from danhmuc order by id_dmuc";
                $listdm=pdo_query($sql);
                include "danhmuc/dsdm.php";
                break;
            
                case 'suadm':
                 if(isset($_GET['id_dmuc'])&&($_GET['id_dmuc']>0)){
                    $sql="select *from danhmuc where id_dmuc=".$_GET['id_dmuc'];

                    $tendmuc=pdo_query_one($sql);
                    
                 }
                    include "danhmuc/suadm.php";
                    break;
                    case 'updatedm':
                        if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                            $tendmuc=$_POST['tendmuc'];
                             $id_dmuc=$_POST['id_dmuc'];
                            $sql="update danhmuc set tendmuc='".$tendmuc."' where id_dmuc=".$id_dmuc ;
                            pdo_execute($sql);
                            $thongbao=" Thành công";
                        }
                        $sql="select * from danhmuc order by id_dmuc";
                        $listdm=pdo_query($sql);
                            include "danhmuc/dsdm.php";
                            break;



            // bất động sản
            case 'addbds':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenbds=$_POST['tenbds'];
                    $gia=$_POST['gia'];
                    $diachi=$_POST['diachi'];
                    $thongtin=$_POST['thongtin'];
                    $id_dmuc=$_POST['mabds'];
                    $hinh=$_FILES['anh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                   
                    insert_themsp($tenbds,$gia,$hinh,$diachi,$thongtin,$id_dmuc);
                    $thongbao="thêm thành công";
                }
                //$danhmuc=loadalldm();
                include "batdongsan/adbds.php";
                break;   
            case 'dsbds':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['ma_loai'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                    //  $danhmuc=loadalldm();
                    $sanpham=loadallsp($iddm,$kyw);
                include "batdongsan/dsbds.php";
                break;
            case 'xoasp':
                if(isset($_GET['xoasp'])&&($_GET['xoasp'])>0){
                    
                    xoasp($_GET['xoasp']);
                } 
               
                $sanpham=loadallsp(0,"");
                include "batdongsan/dsbds.php";
                break; 
                case 'suasp':
                    if(isset($_GET['suasp'])&&($_GET['suasp'])>=0 ){
                        $suasp=loadonesp($_GET['suasp']);
                    }
                    
                    // $danhmuc=loadalldm();
                    include 'batdongsan/suabds.php';
                    break;
    
                case 'suabds':
                    if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                        $id=$_POST['idsua'];
                        $tenbds=$_POST['tenbds'];
                        $gia=$_POST['gia'];
                        $diachi=$_POST['diachi'];
                        $thongtin=$_POST['thongtin'];
                        $id_dmuc=$_POST['mabds'];
                        $hinh=$_FILES['anh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                        if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            //echo "Sorry, there was an error uploading your file.";
                        }
    
                        updatesp($id,$tenbds,$gia,$hinh,$diachi,$thongtin,$id_dmuc);
                        $thongbao="cập nhập  thành công";
                    }
                   
                    $sanpham=loadallsp(0,"");
                    include "batdongsan/dsbds.php";
                    break;
                //khách hàng
                case 'kh':
                    $listkhachhang=loadalltk();
                    include 'khachhang/dskhachhang.php';
                    break;
                case 'xoakh':
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        
                        xoakh($_GET['id']);
                    } 
                    
                    $listkhachhang=loadalltk();
                    include 'khachhang/dskhachhang.php';
                    break;
            case 'suakh':
                if(isset($_GET['id'])&&($_GET['id'])>=0 ){
                    $suakh=loadonetk($_GET['id']);
                }
                    
                   
                include 'khachhang/updatekh.php';
                break;
    
    
            case 'updatetk':
                if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                    $tenkh=$_POST['tenkh'];
                    
                    $gmail=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $diachi=$_POST['diachi'];
                    
                    $id=$_POST['idsua'];
                    updatetk($id,$tenkh,$gmail,$sdt,$diachi);
                }
                $listkhachhang=loadalltk();
                include 'khachhang/dskhachhang.php';
                break;
            // bình luận
            case 'bl':
                $listbl=loadallbl();
                include 'binhluan/binhluan.php';
                break;
            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    
                    xoakh($_GET['id']);
                } 
                
                $listbl=loadallbl();
                include 'binhluan/binhluan.php';
                break;

            // tư vấn 
            case 'tuvan':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $trangthai=$_POST['trangthai'];
                    $nv=$_POST['id_nv'];
                }else{
                    $kyw="";
                    $trangthai="";
                    $nv=0;
                }
                $listtuvan=loadalltv($kyw,$nv,$trangthai);
                $nvtv=loadallnvtv();

                include 'tuvan/dstuvan.php';
                break;

            case 'xoatv':
                if(isset($_GET['idtv'])&&($_GET['idtv'])>0){
                    
                    xoatv($_GET['idtv']);
                } 
                
                $listtuvan=loadalltv();
                include 'tuvan/dstuvan.php';
                break;
            case 'suatv':
                if(isset($_GET['idtv'])&&($_GET['idtv'])>0){
                    $suatv=loadonetv($_GET['idtv']);
                    $nvtv=loadallnvtv();
                }

                
                include 'tuvan/suatv.php';
                break;

            case 'datv':
                if(isset($_GET['iddatv'])&&($_GET['iddatv'])>0){
                    updatedatv($_GET['iddatv']);
                }
                $listtuvan=loadalltv("",0,"");
                include 'tuvan/dstuvan.php';
                break;

         case 'updatetv':
             if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                 $nvtuvan=$_POST['nvtuvan'];
                 $id=$_POST['idsua'];
                 updatetv($nvtuvan,$id);
             }
             $listtuvan=loadalltv("",0,"");
             $nvtv=loadallnvtv();

             include 'tuvan/dstuvan.php';
             break;
            // tư vấn
            case 'nvtv':
                $listnvtv=loadallnv();
                include 'nvtuvan/dsnvtuvan.php';
                break;
        
        default: 
            include 'home.php';
            break;
        }
    }
    
    include "footer.php";
?>