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
    <div class="col-phai-2 rounded-md my-1">
        <h1 style="font-weight: 700; margin-left: 1.2%; width: 90%; margin-top: 1%;">Giá Tốt Hôm Nay <p id="countdown"
                style="position: absolute; margin-left: 10%; margin-top: -1.22%;"></p>
        </h1>
        <h1 style="font-weight: 600; float: right; margin-top: -1.8%; color: aqua;">xem thêm ></h1>

        <?php
        // Kiểm tra nếu $spnew là một mảng và không rỗng
        if (is_array($spnew) && count($spnew) > 0) {
            foreach ($spnew as $sp) {
                // Kiểm tra xem $sp có là một mảng hay không
                    // Thêm các kiểm tra khác tùy theo cấu trúc dữ liệu của $sp
        
                    // Hiển thị thông tin sản phẩm
                    ?>
                    <div class="sp filtering my-2">
                        <div class="sp2">
                            <img src="<?php echo "Tên sản phẩm: " . $sp['Ten_hanghoa'] . "<br>"; ?>" alt="" class="w-24 h-20">
                            <div class="price"><?php echo $sp['don_gia']; ?>.000<span style="color: brown; font-size: 15px;  position: absolute;">đ</span>
                            </div>
                            <div class="khung">
                                <div class="daban"></div>
                                <div class="chu">đã bán 2</div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>