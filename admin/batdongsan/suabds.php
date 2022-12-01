
<?php
    if(is_array($suasp)){
        extract($suasp);
    }
    $hinhpath="../upload/".$anh;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80px'>";
    }else{
        $hinh="no photo";
    }
?>
<div class="chu2">
                <h2>Sửa Bất Động Sản</h2>
        </div>
        <div class="row formconten">
        <form action="index.php?act=suabds" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Mã bất động sản<br>
                    <input type="text" name="mabds" disabled>
                </div>
                <div class="row mb10">
                    Tên bất động sản <br>
                    <input type="text" name="tenbds"  value="<?=$tenbds?>">
                </div>
                <div class="row mb10">
                    Giá <br>
                    <input type="number" name="gia"  value="<?=$gia?>">
                </div>
                
                <div class="row mb10">
                    Ảnh <br>
                    <input type="file" name="anh"  value="<?=$anh?>">
                    <?=$hinh ?>
                </div>
                <div class="row mb10">
                    Địa chỉ <br>
                    <input type="text" name="diachi"  value="<?=$diachi?>">
                </div>
                <div class="row mb10">
                    Thông tin <br>
                    <input type="text" name="thongtin"  value="<?=$mota?>" cols="140" rows="10">
                    <!-- <textarea name="thongtin"   value="<?=$mota?>"></textarea> -->
                </div>
                <div class="row mb10">
                    Mã loại <br>
                    <select name="mabds" id="">
                         <?php
                            foreach($danhmuc as $dm){
                                extract($dm);
                                echo '<option value="'.$id_dmuc.'">'.$tendmuc.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="row mb10">
                <input type="hidden" name="idsua" value="<?=$id_bds?>">
                    <input type="submit" name="capnhap" value="Cập nhập">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=dsbds"><input type="button" value="Danh sách"></a>
                </div>
            
            </form>