<?php
if(is_array($suatv)){
    extract($suatv);
    extract($nvtv);
}
?>

<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle row header">

            </div>

            <div class="row formconten">

                <form action="index.php?act=updatetv" method="POST">
                    <select name="nvtuvan" id="">
                        <?php
                        foreach($nvtv as $nv){
                            extract($nv);
                            echo '<option value="'.	$id_nhanvien .'">'.$ten_nhanvien.'</option>';
                        }
                        ?>
                    </select>



                    <div class="row mb10">
                        <input type="hidden" name="idsua" value="<?=$id_tuvan ?>">
                        <input type="submit" value="cập nhập" name="capnhap">
                        <input type="reset" value="nhập lại">
                        <a href="index.php?act=tuvan"><input type="button" value="Danh sách"></a>
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