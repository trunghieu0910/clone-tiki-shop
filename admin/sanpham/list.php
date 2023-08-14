<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">DANH SÁCH SẢN PHẨM</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form class="bg-light p-4 m-1" action="index.php?act=dssp" method="post">
            <div class="form-group">
                <input type="text" name="keyword">
                <select name="id_danhmuc" id="id_danhmuc">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdm as $danhmuc) {
                        extract($danhmuc);
                        echo '
                                    <option value="' . $id_danhmuc . '">' . $Ten_danhmuc . '</option>
                                ';
                    }
                    ?>
                </select>
                <input type="submit" value="GO" name="listok" class="btn btn-success">
            </div>
        </form>
        <table class="table table-bordered table-info">
            <thead>
                <tr>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>ĐƠN GIÁ</th>
                    <th>GIẢM GIÁ</th>
                    <th>ID DANH MỤC</th>
                    <th>ID THƯƠNG HIỆU</th>
                    <th>HOT</th>
                    <th>NGÀY NHẬP</th>
                    <th>SỐ LƯỢNG</th>
                    <th>SỐ LƯỢT XEM</th>
                    <th>MÔ TẢ NGẮN</th>
                    <th>MÔ TẢ DÀI</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $check = 0;
                foreach ($listsp as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id_SP=" . $id_SP;
                    $xoasp = "index.php?act=xoasp&id_SP=" . $id_SP;
                    $imgsp = "index.php?act=imgsp&id_SP=" . $id_SP;

                    $hinhpath = '' . $image_sp;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='100' width='100'>";
                    } else {
                        $hinh = "no photo";
                    }
                    // Kiểm tra xem có hình ảnh liên quan trong mảng $img hay không
                    // if (isset($image_sp[$check])) {
                    //     $imgsp = $image_sp[$check];
                    //     extract($imgsp);
                    //     $hinhpath = '../upload/' . $image_sp;
                    //     if (is_file($hinhpath)) {
                    //         $hinh = "<img src='" . $hinhpath . "' height='100'>";
                    //     } else {
                    //         $hinh = "no photo";
                    //     }
                    // } else {
                    //     $hinh = "no photo";
                    // }
                
                    // $check++;
                
                    echo '
        <tr>
            <td>' . $id_SP . '</td>
            <td>' . $Ten_hanghoa . '</td>
            <td>' . $hinh. '</td>
            <td>' . $don_gia . '</td>
            <td>' . $giamgia . '</td>
            <td>' . $id_danhmuc . '</td>
            <td>' . $id_thuonghieu . '</td>
            <td>' . $hot . '</td>
            <td>' . $ngaynhap . '</td>
            <td>' . $so_luong . '</td>
            <td>' . $soluotxem . '</td>
            <td>' . $motangan . '</td>
            <td>' . $motadai . '</td>
            <td><a href="' . $suasp . '"><input type="button" value="Sửa" class="btn btn-success"></a>
             <a href="' . $xoasp . '"><input type="button" value="Xóa" class="btn btn-warning"></a>
             <a href="' . $imgsp . '"><input type="button" value="Ảnh" class="btn btn-warning"></a></td>
        </tr>
    ';
                }
                ?>
            </tbody>
        </table>
        <div class="form-group">
            <!-- <input type="button" value="Chọn tất cả" class="btn btn-success" name="themmoi">
            <input type="button" value="Bỏ chọn tất cả" class="btn btn-warning">
            <input type="button" value="Xóa các mục đã chọn" class="btn btn-warning"> -->
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" class="btn btn-success"></a>
        </div>
    </div>