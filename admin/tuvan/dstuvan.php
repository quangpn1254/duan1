
<div class="row">
            <div class="row header chu2"><h2>Danh sách tài khoản</h2></div>
            <div class="row formconten">
                <form action="#" method="post">
                    <div class="row mb10 formdshh">
                        <table>
                            <tr>
                                <th></th>
                                <th>id_tuvan</th>
                                <th>Tên khách hàng </th>
                                <th>Số điện thoại </th>
                                <th>Gmail </th>
                                <th>Tên bất động sản</th>
                               
                                <th>Trạng thái</th>
                                 <th>Thời gian yêu cầu</th>
                                <th>Nhân viên tư vấn</th>
                            </tr>
                            <?php
                                foreach($listtuvan as $tv){
                                    extract($tv);
                                    $suatv="index.php?act=suatv&idtv=".$id_tuvan;
                                    $xoatv="index.php?act=xoatv&idtv=".$id_tuvan;
                                    echo'
                                        <tr>
                                        <td>
                                                  <a href="'.$suatv.'"> <input type="button" value="sửa">  </a>
                                                 <a href="'.$xoatv.'"><input type="button" value="xóa"></a>
                                            </td>
                                            <td>'.$id_tuvan.'</td>
                                            <td>'.$tenkh.'</td>
                                            <td>'.$sdt.'</td>
                                            <td>'.$gmail.'</td>
                                            <td>'.$tenbds.'</td>
                                            
                                            <td>'.$trangthai.'</td>
                                            <td>'.$thoigianyeucau.'</td>
                                            <td>'.$id_nhanvien.'</td>
                                            
                                            
                                        </tr>
                                    ';
                                }
                            ?>
                            
            
                        </table>
                    </div>
                    <!-- <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                    </div> -->
            </div>
         </div>