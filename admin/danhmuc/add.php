<style>
    .error-form {
        color: red;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">THÊM MỚI DANH MỤC</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form class="bg-light p-4 m-1" action="index.php?act=adddm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_danhmuc">Mã loại</label>
                <input type="text" class="form-control" name="id_danhmuc" id="id_danhmuc" readonly>
            </div>
            <div class="form-group">
                <label for="Ten_danhmuc">Tên loại</label>
                <input type="text" class="form-control" name="Ten_danhmuc" id="Ten_danhmuc">
                <p class="error-form">
                    <?php
                    if (isset($error['Ten_danhmuc'])) {
                        echo $error['Ten_danhmuc'];
                    }
                    ?>
                </p>
            </div>
            <div class="form-group">
                <label for="image_dm">Ảnh</label>
                <input type="file" class="form-control" name="image_dm" id="image_dm">
                <p class="error-form">
                    <?php
                    if (isset($error['image_dm'])) {
                        echo $error['image_dm'];
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
 
            
     
    </div>