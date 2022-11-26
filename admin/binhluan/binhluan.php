<div class="chu2">
            <h2>Danh Sách Bình luận</h2>
        </div>
        <div class="row">
      
            <div class="row frmcontent">
                
                    <div class="row mb10 frmdsloai formdslh">
                      <table>
                        <tr>
                            <th>Mã bình luận</th>
                            <th>Tên khách hàng</th>
                            <th>Bình luận</th>
                            <th>Mã bất động sản</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listbl as $bl ){
                                extract($bl);
                           
                            
                                    
                                    $xoabl="index.php?act=xoabl&id_bl=".$id_bl;
                
                            
                                echo '<tr>
                                <td>'.$id_bl.'</td>
                                <td>'.$tenkh.'</td>
                                <td>'.$binhluan.'</td>
                                <td>'.$id_bds.'</td>
                                <td>
                                 
                                <a href="'.$xoabl.'"><input type="button" value="Xóa"></a>
                                </td>
                                </tr>';
                                
                            }
                        ?>
                      
                      </table>


            </div>
        </div>