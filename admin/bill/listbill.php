<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">DANH SÁCH ĐƠN HÀNG</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered table-info">
            <thead>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>Ngày xuất</th>
                    <th>Trạng thái</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($listbill as $bill) {
                        extract($bill);
                        $khachhang=$bill["ten_user"].'
                            <br>'.$bill["email"].'
                            <br>'.$bill["diachi"].'
                            <br>'.$bill["dienthoai"];
                        $countsp= loadall_hoadon_count($bill['id_HD']);
                        $ttdh = get_ttdh($bill['pttt']);
                        $suadh = "index.php?act=suadh&id_HD=".$id_HD;
                        $xoadh = "index.php?act=xoadh&id_HD=".$id_HD;
                        $linkdh = "index.php?act=ctdh&id_HD=".$bill['id_HD'];
                        
                        echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$bill['id_HD'].'</td>
                            <td>'.$khachhang.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$bill['Tongtien'].'</td>
                            <td>'.$bill['Ngay'].'</td>
                            <td style="width: 50px"> ';
                            if($pttt==1){
                                echo 'Chuyển khoản';
                            }elseif($pttt==2){
                                echo 'Quét mã QR';
                            }elseif($pttt==3){
                                echo 'Xu tiki';
                            }else {
                                echo 'Tiền mặt';
                            }
                            echo ' </td>
                            <td>
                                <form action="index.php?act=ctdh&id_HD="'.$bill['id_HD'].'" method="post">
                                <input name="id_HD" value="'.$bill['id_HD'].'" type="hidden">
                                <input name="ctdh" value="Chi tiết" type="submit">
                                </form>
                            </td>
                                         </tr>';
                    }
                    
                ?>
            </tbody>
        </table>
    
        <-- <a href="'.$xoadh.'"><input type="button" value="Xóa" class="btn btn-warning"></a> 
        <-- <div class="form-group">
            <input type="button" value="Chọn tất cả" class="btn btn-success" name="themmoi">
<input type="button" value="Bỏ chọn tất cả" class="btn btn-warning">
            <input type="button" value="Xóa các mục đã chọn" class="btn btn-warning">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" class="btn btn-success"></a>
        </div>     
        <-- <td><a href="'.$suadh.'"><input type="button" value="Sửa" class="btn btn-success"></a> </td> 
    </div>