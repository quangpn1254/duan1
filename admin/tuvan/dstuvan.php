
<div class="row">
            <div class="row header chu2 mb"><h2>Danh sách tài khoản</h2></div>
            <form action="index.php?act=tuvan" class="mb10"  method="post">
                <input type="text" name="kyw" placeholder="Tên khách hàng">

                    <select name="id_nv" id="">
                        <option value="">Nhân viên tư vấn</option>
                        <?php
                            foreach($nvtv as $nv){
                                extract($nv);
                                echo '<option value="'.$id_nhanvien .'">'.$ten_nhanvien.'</option>';
                            }
                        ?>
                    </select>
                    
                <select name="trangthai" id="">
                        <option value="">Tất cả</option>
                    <option value="0">Chưa tư vấn</option>
                    <option value="1">Đã tư vấn</option>
                 </select>
                <input type="submit" name="listok" value="go">
            </form>
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
                                <th>Thời gian yêu cầu</th>
                                <th>Trạng thái</th>

                                <th>Nhân viên tư vấn</th>
                            </tr>
                            <?php
                                foreach($listtuvan as $tv){
                                    extract($tv);
                                    if($trangthai==0){
                                        $trangthaict="chưa tư vấn";
                                    }else{
                                        $trangthaict="đã tư vấn";
                                    }
                                    $suatv="index.php?act=suatv&idtv=".$id_tuvan;
                                    $xoatv="index.php?act=xoatv&idtv=".$id_tuvan;
                                    $datv="index.php?act=datv&iddatv=".$id_tuvan;
                                    echo'
                                        <tr>
                                        <td>
                                                 <div class="mb10"><a href="'.$suatv.'"> <input type="button" value="sửa"></a> </div>
                                                 <div class="mb10"><a href="'.$xoatv.'"><input type="button" value="xóa"></a> </div>
                                                 <div class="mb10"><a href="'.$datv.'"><input type="button" value="đã tư vấn"></a></div>
                                                 
                                                 
                                            </td>
                                            <td>'.$id_tuvan.'</td>
                                            <td>'.$tenkh.'</td>
                                            <td>'.$sdt.'</td>
                                            <td>'.$gmail.'</td>
                                            <td>'.$tenbds.'</td>
                                            <td>'.$thoigianyeucau.'</td>
                                            <td>'.$trangthaict.' 
                                           
                                            </td>
                                            <td>'.$ten_nhanvien.'</td>
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