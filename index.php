<?php
   session_start();
    include 'hearder.php';
    include "model/database.php";
    include "model/sanpham.php";
    include "model/khachhang.php";
    include "model/danhmuc.php";
    include "anh.php";
    $listdm=loadalldm();
    $listdc=loadalldc();
    $sphome=loadallsph();
    
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['timkiem'])&&($_POST['timkiem'])){
                    $id_dmuc=$_POST['dmuc'];
                    $diachi=$_POST['diachi'];
                    $giamin=$_POST['giamin'];
                    $giamax=$_POST['giamax'];
                }
                else{
                    $id_dmuc=0;
                    $diachi="";
                    $giamin=0;
                    $giamax=0;
                }
                $spnew=loadallsp_home($id_dmuc,$diachi,$giamin,$giamax);
               include "view/sanpham.php";
                break;

            case 'ctbds':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $onesp=loadonesp($id);
                }
                if(isset($_POST['tttv'])&&($_POST['tttv'])){
                    if(is_array($_SESSION['user'])){
                        $tenkh = $_POST['tenkh'];
                        $gmail = $_POST['gmail'];
                        $sdt = $_POST['sdt'];
                        $diachi = $_POST['diachi'];
                        $id_bds = $_POST['id_bds'];
                        $thoigianyeucau = date('h:i:s d/m/Y');

                        $checkkk = checkkk($tenkh, $gmail, $sdt, $diachi);
                        if (is_array($checkkk)) {
                            $id_khachhang = $checkkk['id_kh'];
                        } else {
                            $id_khachhang = insert_themkh($tenkh, $gmail, $sdt, $diachi);
                        }
                        insert_themtv($id_khachhang, $id_bds, $thoigianyeucau);
                    }
                    else{
                        include "view/taikhoan/dangnhap.php";
                    }
                }
                $thongbaotv="Liên hệ tư vấn thành công. Vui lòng đợi nhân viên tư vấn liên hệ";
                include "view/chitietbds.php";
                break;
            case 'tuvan':
                
                include "view/lienhetv.php";
                break;

//                đăng ký đăng nhập
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['gmail'];
                    $sdt=$_POST['sdt'];
                    $dia_chi=$_POST['diachi'];
                    themtk($user,$pass,$email, $sdt,$dia_chi);
                    $thongbao="đăng ký thành công";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=check($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
//                        include "view/taikhoan/taikhoan.php";
//                        header("Location: index.php?act=dangnhap");
                    }else{
                        $thongbao="tài khoản không tồn tại";
                    }

                }
                include "view/taikhoan/dangnhap.php";
                break;


            case 'edittk':
                if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $diachi=$_POST['diachi'];
                    $id_tk=$_POST['id_tk'];
                    updatetk($id_tk,$user,$pass,$email,$diachi);

                    $_SESSION['user']=check($user,$pass);

                }
                include "view/taikhoan/edittk.php";
                break;

            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){

                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $checkemail=checkemail($email);
                    $checkuser=checkuser($user);
                    if(is_array($checkuser) && is_array($checkemail)){
                        $thongbao="mật khẩu của bạn là: ".$checkuser['pass'];
                    }else{
                        $thongbao="email hoặc tên đăng nhập không đúng";
                    }


                }
                include "view/taikhoan/quenmk.php";
                break;

            case 'thoat':
                session_unset();
                include "view/taikhoan/dangnhap.php";
                break;

//            case 'timkiem':
//                if(isset($_POST['timkiem'])&&($_POST['timkiem'])){
//                    $id_dmuc=$_POST['id_dmuc'];
//                    $diachi=$_POST['diachi'];
//                    $giamin=$_POST['giamin'];
//                    $giamax=$_POST['giamax'];
//                    $tim=timkiem($id_dmuc,$diachi,$giamin,$giamax);
//                }
//
//                include "view/timkiem.php";
//                break;

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