<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">DANH SÁCH SẢN PHẨM</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered table-info">
            <thead>
                <tr>
                    <th>MÃ ẢNH</th>
                    <th>MÃ SP</th>
                    <th>HÌNH</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $check = 0;
                foreach ($listimg as $img) {
                    extract($img);
                    $xoaimg = "index.php?act=xoaimg&id_img=" . $id_img;

                    $hinhpath = '' . $duong_dan_anh;
                        $hinh = "<img src='../upload/" . $hinhpath . "' height='100' width='100'>";
                
                    echo '
                        <tr>
                            <td>' . $id_img . '</td>
                            <td>' . $id_SP . '</td>
                            <td>' . $hinh. '</td>
                            <td> 
                            <form method="post" action="index.php?act=xoaimg&id_img=' . $id_img . '">
                            <input type="hidden" name="id_SP" value="' . $id_SP . '">
                            <input type="submit" name="xoaimg" value="Xóa">
                            </form>
                            </td>
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
            <a href="index.php?act=addimgsp&id_SP=<?php echo $id_SP; ?>"><input type="button" value="Nhập thêm" class="btn btn-success"></a>
        </div>
    </div>