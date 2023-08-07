<style>
    .error-form{
        color: red;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">THÊM MỚI THƯƠNG HIỆU</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form class="bg-light p-4 m-1" action="index.php?act=addth" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_thuonghieu">Mã thương hiệu</label>
                <input type="text" class="form-control" name="id_thuonghieu" id="id_thuonghieu" readonly>
            </div>
            <div class="form-group">
                <label for="Ten_thuonghieu">Tên thương hiệu</label>
                <input type="text" class="form-control" name="Ten_thuonghieu" id="Ten_thuonghieu">
                <p class="error-form">
                    <?php
                        if (isset($error['Ten_thuonghieu'])) {
                            echo $error['Ten_thuonghieu'];
                        }
                    ?>
                </p>
            </div>
            <div class="form-group">
                <label for="img_thuonghieu">Ảnh</label>
                <input type="file" class="form-control" name="img_thuonghieu" id="img_thuonghieu">
                <p class="error-form">
                    <?php
                        if (isset($error['img_thuonghieu'])) {
                            echo $error['img_thuonghieu'];
                        }
                    ?>
                </p>
            </div>

            <div class="form-group">
                <input type="submit" value="THÊM MỚI" class="btn btn-success" name="themmoi">
                <input type="reset" value="NHẬP LẠI" class="btn btn-warning">
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) {
                    echo $thongbao;
                }
            ?>
        </form>
    </div>