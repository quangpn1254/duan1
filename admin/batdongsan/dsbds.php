<div class="row">
            <div class="chu2">
            <h2>Danh Sách Bất Động Sản</h2>
        </div>
        <div class="row">
      
            <div class="row frmcontent">
            
                    <div class="row mb10 frmdsloai">
                      <table>
                        <tr>
                            <th></th>
                            <th>Mã BDS</th>
                            <th>Tên BDS</th>
                            <th>Giá</th>
                            <th>Ảnh</th>
                            <th>Địa Chỉ</th>
                            <th>Thông tin</th>
                            <th>id_danhmuc</th>
                            
                            <th></th>

                        </tr>
                        <?php
                                foreach($sanpham as $sp){
                                    extract($sp);
                                    $suasp="index.php?act=suasp&suasp=".$id_bds;
                                    $xoasp="index.php?act=xoasp&xoasp=".$id_bds;
                                    $hinhpath="../upload/".$anh;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='80px'>";
                                    }else{
                                        $hinh="no photo";
                                    }

                                    echo'
                                        <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$id_bds.'</td>
                                            <td>'.$tenbds.'</td>
                                            <td>'.$gia.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>'.$diachi.'</td>
                                            <td>'.$mota.'</td>
                                            <td>'.$id_dmuc.'</td>
                                            <td>
                                                  <a href="'.$suasp.'"> <input type="button" value="sửa">  </a>
                                                 <a href="'.$xoasp.'"><input type="button" value="xóa"></a>
                                            </td>
                                        </tr>
                                    ';
                                }
                            ?>
                            
            
                        </table>
                    </div>
                    <div class="row mb10">
                    <input type="hidden" name="idsua" value="<?=$id_bds?>">
                     <input type="button" value="Chọn tất cả">
                     <input type="button" value="Bỏ chọn tất cả">
                     <input type="button" value="Xóa các mục đã chọn">
                     <a href="index.php?act=addbds"><input type="button" value="Nhập thêm"></a>

                    </div>

                </form>
            </div>
        </div>