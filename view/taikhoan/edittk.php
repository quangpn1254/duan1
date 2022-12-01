<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Tài khoản</h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- LOGIN AREA START (Register) -->
<div class="ltn__login-area pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Tài khoản</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                    ?>
                    <form action="index.php?act=edittk" method="post" enctype="multipart/form-data" class="ltn__form-box contact-form-box">
                        <input type="email" name="email" placeholder="gmail" value="<?=$email?>">
                        <input type="text" name="user" placeholder="Tên Đăng Nhập" value="<?=$user?>">
                        <input type="password" name="pass" placeholder="Mật Khẩu" value="<?=$pass?>">
                        <input type="text" name="diachi" placeholder="Địa chỉ" value="<?=$diachi?>">

                        <div class="btn-wrapper ">
                            <input type="hidden" name="id_tk" value="<?=$id_tk?>">
                            <input type="submit" name="capnhap" value="cập nhật" class="type theme-btn-1 btn reverse-color btn-block" >

                        </div>
                    </form>
                    <h2 class="thongbao">
                        <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo "<h1>$thongbao</h1>";
                        }

                        ?>

                    </h2>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
<div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Looking for a dream home?</h1>
                        <p>We can help you realize your dream of a new home</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="contact.html">Explore Properties <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->