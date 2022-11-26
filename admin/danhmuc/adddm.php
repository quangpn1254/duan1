<div class="chu2">
            <h2>Thêm danh mục</h2>
        </div>
        <div class="row">
            <div class="row frmcontent">
                <form action="index.php?act=dm" method="post">
                    <div class="row mb10">
                        Mã loại:<br>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại: <br>
                        <input type="text" name="tenloai" id="">
                    </div>
                    <div class="row mb10">
                     
                        <input type="submit" value="Thêm mới" name="themmoi">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=dsdm" ><input type="button" name="" id="" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;

                    ?>
                </form>
            </div>
        </div>