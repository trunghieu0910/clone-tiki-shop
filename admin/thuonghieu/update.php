<?php
    if(isset($thuonghieu) && is_array($thuonghieu)) {
        // Không sử dụng extract($thuonghieu) để tránh xung đột với các biến hiện có
        $id_thuonghieu = $thuonghieu['id_thuonghieu'];
        $Ten_thuonghieu = $thuonghieu['Ten_thuonghieu'];
        $img_thuonghieu = $thuonghieu['img_thuonghieu'];
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Cập nhật danh mục thương hiệu</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form class="bg-light p-4 m-1" action="index.php?act=updateth" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_thuonghieu">Mã thương hiệu</label>
                <input type="text" class="form-control" name="id_thuonghieu" id="id_thuonghieu" value="<?php echo $id_thuonghieu; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="Ten_thuonghieu">Tên thương hiệu</label>
                <input type="text" class="form-control" name="Ten_thuonghieu" id="Ten_thuonghieu" value="<?php echo $Ten_thuonghieu; ?>">
            </div>

            <?php if (isset($img_thuonghieu) && ($img_thuonghieu != "")): ?>
                <div class="form-group">
                    <label for="current_image">Hình ảnh hiện tại</label><br>
                    <img src="../upload/<?php echo $img_thuonghieu; ?>" alt="Hình ảnh hiện tại" style="max-width: 200px;">
                </div>
                <input type="hidden" name="old_img_thuonghieu" value="<?php echo $img_thuonghieu; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="img_thuonghieu">Ảnh mới (nếu muốn thay đổi)</label>
                <input type="file" class="form-control" name="img_thuonghieu" id="img_thuonghieu">
            </div>

            <div class="form-group">
                <input type="hidden" name="id_thuonghieu" value="<?php echo $id_thuonghieu; ?>">
                <input type="submit" value="CẬP NHẬT" class="btn btn-success" name="capnhat">
                <input type="reset" value="NHẬP LẠI" class="btn btn-warning">
            </div>
            <?php
                if(isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>

