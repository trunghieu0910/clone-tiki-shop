<style>
    .error-form {
        color: red;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">THÊM MỚI SẢN PHẨM</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form class="bg-light p-4 m-1" action="index.php?act=addsp" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="id_SP">Mã sản phẩm</label>
                <input type="text" class="form-control" name="id_SP" id="id_SP" readonly>
                <p class="error-form">
                    <?php
                    if (isset($error['id_SP'])) {
                        echo $error['id_SP'];
                    }
                    ?>
                </p>
            </div>
            <div class="form-group">
                <label for="Ten_hanghoa">Tên sản phẩm</label>
                <input type="text" class="form-control" name="Ten_hanghoa" id="Ten_hanghoa">
                <p class="error-form">
                    <?php
                    if (isset($error['Ten_hanghoa'])) {
                        echo $error['Ten_hanghoa'];
                    }
                    ?>
                </p>
            </div>
            <div class="form-group">
                <label for="don_gia">Đơn giá</label>
                <input type="text" class="form-control" name="don_gia" id="don_gia">
                <p class="error-form">
                    <?php
                    if (isset($error['don_gia'])) {
                        echo $error['don_gia'];
                    }
                    ?>
                </p>
            </div>

            <div class="form-group">
                <label for="image_sp">Ảnh sản phẩm</label>
                <input type="file" name="image_sp" id="image_sp">
                <p class="error-form">
                    <?php
                    if (isset($error['image_sp'])) {
                        echo $error['image_sp'];
                    }
                    ?>
                </p>
            </div>
            <div class="form-group">
                <label for="giamgia">Giảm giá (%)</label>
                <input type="number" class="form-control" name="giamgia" id="giamgia">
                <p class="error-form">
                    <?php
                    if (isset($error['giamgia'])) {
                        echo $error['giamgia'];
                    }
                    ?>
                </p>
            </div>

            <div class="form-group">
                <label for="id_danhmuc">Danh mục sản phẩm</label>
                <select name="id_danhmuc" id="id_danhmuc">
                    <?php
                    foreach ($listdm as $danhmuc) {
                        extract($danhmuc);
                        echo '
                                <option value="' . $id_danhmuc . '">' . $Ten_danhmuc . '</option>
                            ';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_thuonghieu">Thương hiệu sản phẩm</label>
                <select name="id_thuonghieu" id="id_thuonghieu">
                    <?php
                    foreach ($listth as $thuonghieu) {
                        extract($thuonghieu);
                        echo '
                                <option value="' . $id_thuonghieu . '">' . $Ten_thuonghieu . '</option>
                            ';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="don_gia">Sản phẩm hot: </label>
                <input type="checkbox" name="hot" id="hot" value="1">
                <p class="error-form">
                    <?php
                    if (isset($error['hot'])) {
                        echo $error['hot'];
                    }
                    ?>
                </p>
            </div>

            <div class="form-group">
                <label for="ngaynhap">Ngày nhập</label>
                <input type="date" name="ngaynhap" id="ngaynhap" readonly>
                <script> // tự động lấy ngày nhập hiện tại
                    document.addEventListener("DOMContentLoaded", function () {
                        var ngayNhapInput = document.getElementById("ngaynhap");
                        var ngayHienTai = new Date();
                        var ngayHienTaiISO = ngayHienTai.toISOString().slice(0, 10);
                        ngayNhapInput.value = ngayHienTaiISO;
                    });
                </script>
            </div>

            <div class="form-group">
                <label for="so_luong">Số lượng</label>
                <input type="number" class="form-control" name="so_luong" id="so_luong">
                <p class="error-form">
                    <?php
                    if (isset($error['so_luong'])) {
                        echo $error['so_luong'];
                    }
                    ?>
                </p>
            </div>

            <div class="form-group">
                <label for="soluotxem">Số lượt xem</label>
                <input type="number" class="form-control" name="soluotxem" id="soluotxem" value="0" readonly>
            </div>

            <div class="form-group">
                <label for="soluongban">Số lượng bán</label>
                <input type="number" class="form-control" name="soluongban" id="soluongban" value="0" readonly>
            </div>

            <div class="form-group">
                <label for="motangan">Mô tả ngắn</label><br>
                <textarea name="motangan" cols="50" rows="2" id="motangan"></textarea>
                <p class="error-form">
                    <?php
                    if (isset($error['motangan'])) {
                        echo $error['motangan'];
                    }
                    ?>
                </p>
            </div>

            <div class="form-group">
                <label for="motadai">Mô tả dài</label><br>
                <textarea name="motadai" cols="50" rows="5" id="motadai"></textarea>
                <p class="error-form">
                    <?php
                    if (isset($error['motadai'])) {
                        echo $error['motadai'];
                    }
                    ?>
                </p>
            </div>

            <div class="form-group">
                <input type="submit" value="THÊM MỚI" class="btn btn-success" name="themmoi">
                <input type="reset" value="NHẬP LẠI" class="btn btn-warning">
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>