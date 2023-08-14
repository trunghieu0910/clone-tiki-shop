<style>
    .error-form {
        color: red;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">THÊM MỚI IMG SP</h1>
    </div>

    <?php
    if (is_array($sp)) {
        extract($sp);
    }
    ?>

    <!-- Content Row -->
    <div class="row">
        <form class="bg-light p-4 m-1" action="index.php?act=addimgsp" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_SP">Tên sản phẩm</label>
                <input type="text" class="form-control" name="id_SP" id="id_SP" value="<?php echo $id_SP; ?>">
            </div>


            <div class="form-group">
                <label for="duong_dan_anh">Ảnh sản phẩm</label>
                <input type="file" name="duong_dan_anh" id="duong_dan_anh">
                <p class="error-form">
                    <?php
                    if (isset($error['duong_dan_anh'])) {
                        echo $error['duong_dan_anh'];
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