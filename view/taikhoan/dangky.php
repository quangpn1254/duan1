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
                    <form action="index.php?act=dangky" method="post" enctype="multipart/form-data" class="ltn__form-box contact-form-box">

                        <input type="text" name="user" placeholder="Tên Đăng Nhập">
                        <input type="password" name="pass" placeholder="Mật Khẩu">
                        <input type="text" name="gmail" placeholder="Gmail">
                        <input type="text" name="sdt" placeholder="Số điện thoại">
                        <input type="text" name="diachi" placeholder="Địa chỉ">
                        <div class="btn-wrapper ">
                            <input type="submit" name="dangky" value="đăng ký" class="type theme-btn-1 btn reverse-color btn-block" >

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