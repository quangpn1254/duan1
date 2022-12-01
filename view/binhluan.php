<?php
    session_start();
   include "../model/database.php";
   include "../model/binhluan.php";
//    include "../model/taikhoan.php";
    $idpro=$_REQUEST['idpro'];
    // $dsbl=loadallbl($idpro);

?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/quarter-preview/quarter/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 16:07:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quarter - Real Estate HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="view/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="view/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="view/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="view/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="view/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">    
    <div class="ltn__comment-area mb-50">
                <h4 class="title-2">03 Comments</h4>
               
        
        <div class="ltn__comment-inner">
            <ul>
                <li>
                    <div class="ltn__comment-item clearfix">
                        <div class="ltn__commenter-img">
                            <img src="img/testimonial/1.jpg" alt="Image">
                        </div>
                        <div class="ltn__commenter-comment">
                            <h6><a href="#">Adam Smit</a></h6>
                            <span class="comment-date">20th May 2020</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                            <a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Reply</a>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <div class="ltn__comment-item clearfix">
                                <div class="ltn__commenter-img">
                                    <img src="img/testimonial/3.jpg" alt="Image">
                                </div>
                                <div class="ltn__commenter-comment">
                                    <h6><a href="#">Adam Smit</a></h6>
                                    <span class="comment-date">21th May 2020</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                    <a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Reply</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="ltn__comment-item clearfix">
                        <div class="ltn__commenter-img">
                            <img src="img/testimonial/4.jpg" alt="Image">
                        </div>
                        <div class="ltn__commenter-comment">
                            <h6><a href="#">Adam Smit</a></h6>
                            <span class="comment-date">25th May 2020</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                            <a href="#" class="ltn__comment-reply-btn"><i class="icon-reply-1"></i>Reply</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <!-- comment-reply -->
    <div class="ltn__comment-reply-area ltn__form-box mb-60---">
        <h4 class="title-2">Post Comment</h4>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-item input-item-textarea ltn__custom-icon">
                <textarea placeholder="Bình luận của bạn" name="binhluan"></textarea>
            </div>
            <div class="input-item input-item-name ltn__custom-icon">
                <input type="text" placeholder="Tên của bạn" name="tenkh">
            </div>
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            
            <div class="btn-wrapper">
                <input type="submit" value="Đăng bình luận" name="dang" class="type theme-btn-1 btn reverse-color btn-block ">
                <!-- <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit" name="gui"><i class="far fa-comments"></i> Đăng bình luận</button> -->
            </div>
        </form>
        <?php
            if(isset($_POST['dang'])&&($_POST['dang'])){
                $binhluan=$_POST['binhluan'];
                $tenkh=$_POST['tenkh'];
                $ngaybl=date('h:i:s d/m/Y');
                $idpro=$_POST['idpro'];
                insert_thembl($tenkh,$binhluan,$ngaybl,$idpro);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
    </div>
</div>
<script src="view/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="view/js/main.js"></script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/quarter-preview/quarter/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 16:07:48 GMT -->
</html>
    