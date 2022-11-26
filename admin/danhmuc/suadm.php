<?php
    if(is_array($tendmuc))    {
        extract($tendmuc);
    }
?>
<div class="chu2">
                <h2>Sửa Danh Mục</h2>
        </div>
        <div class="row">
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã loại:<br>
                        <input type="text" name="id_dmuc" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại: <br>
                        <input type="text" name="tendmuc" id="" value="<?php if(isset($tendmuc)&&($tendmuc!="")) echo $tendmuc ; ?>">
                    </div>
                    <div class="row mb10">
                     <input type="hidden" name="id_dmuc"  value="<?php if(isset($id_dmuc)&&($id_dmuc>0)) echo $id_dmuc ; ?>">
                        <input type="submit" name="capnhap" value="Sửa">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=dsdm" ><input type="button" name="" id="" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;

                    ?>
                </form>
            </div>
        </div>
        