<div class="chu2">
            <h2>Danh Sách Danh Mục</h2>
        </div>
        <div class="row">
      
            <div class="row frmcontent">
                
                    <div class="row mb10 frmdsloai formdslh">
                      <table>
                        <tr>
                            <th></th>
                            <th>Mã Danh Mục</th>
                            <th>Tên Danh Mục</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listdm as $danhmuc ){
                                extract($danhmuc );
                           
                            
                                    $suadm="index.php?act=suadm&id_dmuc=".$id_dmuc;
                                    $xoadm="index.php?act=xoadm&id_dmuc=".$id_dmuc;
                
                            
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id_dmuc.'</td>
                                <td>'.$tendmuc.'</td>
                                <td>
                                <a href="'.$suadm.'"><input type="button" value="Sửa"></a> 
                                <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                                </td>
                                </tr>';
                                
                            }
                        ?>
                      
                      </table>
                    </div>
                    <div class="row mb10">
                     <input type="button" value="Chọn tất cả">
                     <input type="button" value="Bỏ chọn tất cả">
                     <input type="button" value="Xóa các mục đã chọn">
                     <a href="index.php?act=dm"><input type="button" value="Nhập thêm"></a>

                    </div>

            </div>
        </div>