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

                    <?php
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);

                        ?>
                        <div class="section-title-area text-center">
                            <h1 class="section-title">ĐĂNG NHẬP THÀNH CÔNG</h1>
                        </div>
<!--                        <div class="">-->
<!--                            xin chào bạn <br>-->
<!--                        </div>-->
<!--                        <li><a href="index.php?act=thoat">thoát</a></li>-->
<!--                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>-->
<!--                        <li><a href="index.php?act=edittk">cập nhập tài khoản</a></li>-->
<!--                        <li><a href="admin/index.php">đăng nhập admin</a></li>-->

            <div class="ltn__product-tab-area">
                <div class="container">
                    <div class="row">
                        <div class="tab-pane fade active show" id="ltn_tab_1_1">
                            <div class="ltn__myaccount-tab-content-inner">
                                <p>xin chào <strong> <?=$user ?></strong></p>
                                <p>ừ bảng điều khiển tài khoản của bạn, bạn có thể xem các đơn đặt hàng gần đây của mình , quản lý địa chỉ giao hàng và thanh toán , đồng thời chỉnh sửa mật khẩu và chi tiết tài khoản của bạn .</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ltn__tab-menu-list mb-50">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#ltn_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                    <!--                                        <a data-bs-toggle="tab" href="index.php?act=quenmk"> <i class="fas fa-user"></i></a>-->
                                    <a href="index.php?act=edittk">Cập nhập tài khoản <i class="fas fa-map-marker-alt"></i></a>
                                    <?php
                                    if($vai_tro==1){
                                        ?>
                                        <a href="admin/index.php">Đăng nhập admin <i class="fas fa-user"></i></a>
                                    <?php }?>


                                    <a href="index.php?act=thoat">Đăng xuất <i class="fas fa-sign-out-alt"></i></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
                        <?php
                    }else{
                        ?>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                        <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data" class="ltn__form-box contact-form-box">
                            <input type="text" name="user" placeholder="Tên Đăng Nhập">
                            <input type="password" name="pass" placeholder="Mật Khẩu">
                            <div class="btn-wrapper ">
                                <input type="submit" name="dangnhap" value="đăng nhập"  class="type theme-btn-1 btn reverse-color btn-block" >
                                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            </div>
                        </form>

                    <?php } ?>


<!--                    <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data" class="ltn__form-box contact-form-box">-->
<!--                        <input type="text" name="user" placeholder="Tên Đăng Nhập">-->
<!--                        <input type="password" name="pass" placeholder="Mật Khẩu">-->
<!--                        <div class="btn-wrapper ">-->
<!--                            <input type="submit" name="dangnhap" value="đăng nhập"  class="type theme-btn-1 btn reverse-color btn-block" >-->
<!--                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                    <h2 class="thongbao">-->
<!--                        --><?php
//                        if(isset($thongbao)&&($thongbao!="")){
//                            echo "<h1>$thongbao</h1>";
//                        }
//
//                        ?>

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