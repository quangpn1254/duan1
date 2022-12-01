<div class="row">
    <div class="row header chu2"><h2>Thêm mới bất động sản</h2></div>
    <div class="row formconten">
        <form action="index.php?act=addbds" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Mã bất động sản<br>
                    <input type="text" name="mabds" disabled>
                </div>
                <div class="row mb10">
                    Tên bất động sản <br>
                    <input type="text" name="tenbds" >
                </div>
                <div class="row mb10">
                    Giá <br>
                    <input type="number" name="gia" >
                </div>
                
                <div class="row mb10">
                    Ảnh <br>
                    <input type="file" name="anh" >
                </div>
                <div class="row mb10">
                    Địa chỉ <br>
                    <input type="text" name="diachi" >
                </div>
                <div class="row mb10">
                    Thông tin <br>
                    <textarea name="thongtin" cols="140" rows="10"></textarea>
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
                    
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=dsbds"><input type="button" value="Danh sách"></a>
                </div>
            
            </form>
    </div> 