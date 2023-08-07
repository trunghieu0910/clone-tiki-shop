<?php
if (is_array($danhmuc)) {
    extract($danhmuc);
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Cập nhật danh mục hàng hóa</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form class="bg-light p-4 m-1" action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_danhmuc">Mã loại</label>
                <input type="text" class="form-control" name="id_danhmuc" id="id_danhmuc" value="<?php if (isset($id_danhmuc) && ($id_danhmuc > 0))
                    echo $id_danhmuc; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="Ten_danhmuc">Tên loại</label>
                <input type="text" class="form-control" name="Ten_danhmuc" id="Ten_danhmuc" value="<?php if (isset($Ten_danhmuc) && ($Ten_danhmuc != ""))
                    echo $Ten_danhmuc; ?>">
            </div>

            <?php if (isset($image_dm) && ($image_dm != "")): ?>
                <div class="form-group">
                    <label for="current_image">Hình ảnh hiện tại</label><br>
                    <img src="../upload/<?php echo $image_dm; ?>" alt="Hình ảnh hiện tại" style="max-width: 200px;">
                </div>
                <input type="hidden" name="old_image_dm" value="<?php echo $image_dm; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="image_dm">Ảnh mới (nếu muốn thay đổi)</label>
                <input type="file" class="form-control" name="image_dm" id="image_dm">
            </div>

            <input type="hidden" name="id_danhmuc" value="<?php if (isset($id_danhmuc) && ($id_danhmuc > 0))
                echo $id_danhmuc; ?>">

            <div class="form-group">
                <input type="submit" value="CẬP NHẬT" class="btn btn-success" name="capnhat">
                <input type="reset" value="NHẬP LẠI" class="btn btn-warning">
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
