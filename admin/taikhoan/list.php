<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">DANH SÁCH TÀI KHOẢN</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered table-info">
            <thead>
                <tr>
                    <th>MÃ TK</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>TEL</th>
                    <th>ROLE</th>
                    <th>IMG</th>
                    <th>EDIT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id_user=".$id_user;
                        $xoatk = "index.php?act=xoatk&id_user=".$id_user;
                        $hinhpath = '../upload/'.$img;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height = '100'>";
                        } else {
                            $hinh  = "no photo";
                        }

                        echo '<tr>
                            
                            <td>'.$id_user.'</td>
                            <td>'.$ten_user.'</td>
                            <td>'.$Mat_khau.'</td>
                            <td>'.$email.'</td>
                            <td>'.$diachi.'</td>
                            <td>'.$dienthoai.'</td>
                            <td>'.$vai_tro.'</td>
                            <td>'.$hinh.'</td>
                            <td><a href="'.$suatk.'"><input type="button" value="Sửa" class="btn btn-success"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa" class="btn btn-warning"></a></td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
        <div class="form-group">
            <!-- <input type="button" value="Chọn tất cả" class="btn btn-success" name="themmoi">
            <input type="button" value="Bỏ chọn tất cả" class="btn btn-warning">
            <input type="button" value="Xóa các mục đã chọn" class="btn btn-warning">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" class="btn btn-success"></a> -->
        </div>    
    </div>            