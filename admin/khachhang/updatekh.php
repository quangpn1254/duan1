<?php
    if(is_array($suakh)){
        extract($suakh);
    }
?>

<div class="row mb ">
            <div class="boxtrai mr">
                <div class="row mb">
                    
                    <div class="boxtitle row header">
                        cập nhập khách hàng
                    </div>

                    <div class="row formconten">
                        <?php
                            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                extract($_SESSION['user']);
                            }
                        ?>
                        <form action="index.php?act=updatetk" method="POST">
                            
                            <div class="row mb10">
                                Tên khách hàng
                                <input type="text" name="tenkh" value="<?=$tenkh?>">
                            </div>
                            <div class="row mb10">
                                Gmail
                                <input type="email" name="email"value="<?=$gmail?>">
                            </div>
                            <div class="row mb10">
                                Số điện thoại
                                <input type="text" name="sdt" value="<?=$sdt?>">
                            </div>

                            <div class="row mb10">
                                Địa chỉ
                                <input type="text" name="diachi" value="<?=$diachi?>">
                            </div>

                            
                            <div class="row mb10">
                                 <input type="hidden" name="idsua" value="<?php if(isset($id_kh)&&($id_kh>0)) echo $id_kh ;?>">
                                <input type="submit" value="cập nhập" name="capnhap">
                                <input type="reset" value="nhập lại">
                                <a href="index.php?act=dskhachhang"><input type="button" value="Danh sách"></a>
                            </div>

                        </form>
                        <?php
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                    </div>
                </div>
                
            </div>

</div>