<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Cập nhật hàng hóa</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form class="bg-light p-4 m-1" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Ten_hanghoa">Tên sản phẩm</label>
                <input type="text" class="form-control" name="Ten_hanghoa" id="Ten_hanghoa" value="<?= $Ten_hanghoa ?>">
            </div>
            <div class="form-group">
                <label for="don_gia">Giá sản phẩm</label>
                <input type="text" class="form-control" name="don_gia" id="don_gia" value="<?= $don_gia ?>">
            </div>
            <div class="form-group">
                <label for="giamgia">Giảm giá</label>
                <input type="text" class="form-control" name="giamgia" id="giamgia" value="<?= $giamgia ?>">
            </div>
            <?php if (isset($image_sp) && ($image_sp != "")): ?>
                <div class="form-group">
                    <label for="current_image">Hình ảnh hiện tại</label><br>
                    <img src="../upload/<?php echo $image_sp; ?>" alt="Hình ảnh hiện tại" style="max-width: 200px;">
                </div>
                <input type="hidden" name="old_image_sp" value="<?php echo $image_sp; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="image_sp">Ảnh mới (nếu muốn thay đổi)</label>
                <input type="file" class="form-control" name="image_sp" id="image_sp">
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
                <label for="hot">Sản phẩm hot: </label>
                <input type="checkbox" name="hot" id="hot" <?php if (isset($hot) && $hot == 1) {
                    echo 'checked';
                } ?>
                    value="<?= $hot ?>">
                <p class="error-form">
                    <?php
                    if (isset($error['hot'])) {
                        echo $error['hot'];
                    }
                    ?>
                </p>
            </div>


            <div class="form-group">
                <label for="so_luong">Số lượng</label>
                <input type="number" class="form-control" name="so_luong" id="so_luong" value="<?= $so_luong ?>">
                <p class="error-form">
                    <?php
                    if (isset($error['so_luong'])) {
                        echo $error['so_luong'];
                    }
                    ?>
                </p>
            </div>
            <div class="form-group">
                <label for="motangan">Mô tả ngắn</label> <br>
                <textarea name="motangan" cols="50" rows="2"><?= $motangan ?></textarea>
            </div>
            <div class="form-group">
                <label for="motadai">Mô tả dài</label> <br>
                <textarea name="motadai" cols="50" rows="5"><?= $motadai ?></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="id_SP" id="id_SP" value="<?= $id_SP ?>">
                <input type="submit" value="CẬP NHẬT" class="btn btn-success" name="capnhat">
                <input type="reset" value="NHẬP LẠI" class="btn btn-warning">
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>