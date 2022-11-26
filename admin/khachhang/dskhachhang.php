
<div class="row">
            <div class="row header chu2"><h2>Danh sách tài khoản</h2></div>
            <div class="row formconten">
                <form action="#" method="post">
                    <div class="row mb10 formdshh">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã khách hàng </th>
                                <th>Tên khách hàng</th>
                                <th>Gmail</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listkhachhang as $kh){
                                    extract($kh);
                                    $suakh="index.php?act=suakh&id=".$id_kh;
                                    $xoakh="index.php?act=xoakh&id=".$id_kh;
                                    echo'
                                        <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$id_kh.'</td>
                                            <td>'.$tenkh.'</td>
                                            <td>'.$gmail.'</td>
                                            <td>'.$sdt.'</td>
                                            <td>'.$diachi.'</td>
                                            
                                            <td>
                                                  <a href="'.$suakh.'"> <input type="button" value="sửa">  </a>
                                                 <a href="'.$xoakh.'"><input type="button" value="xóa"></a>
                                            </td>
                                        </tr>
                                    ';
                                }
                            ?>
                            
            
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                    </div>
            </div>
         </div>