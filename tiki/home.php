<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="tiki/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php
    session_start();
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

    <style>
        .slick-initialized .slick-slide {
            margin: 0 10px;
        }

        .ten {
            font: 30px;
            color: #11ff00;
            position: absolute;
        }

        .h9 {
            flex-wrap: wrap;

        }

        .k12 {
            box-sizing: border-box;
            border: 1px solid rgb(244, 244, 244);
            background-color: beige;
            z-index: 99;
            box-sizing: content-box;
        }
    </style>
</head>

<body>
    <header w-full>
        <div class="logo ml-20 my-3"><img src="tiki/img/logo1.png" alt=""></div>
        <div class="sreach w-50 ml-20 my-3">
            <form>
                <i class="fas fa-search my-3 mx-3" style="position: absolute;"></i><input type="text" name="search"
                    id="toggleButton" placeholder="Search..">

                <button class="rounded-none  ..." style="margin-left: -13%;
                    border-left: 1px solid; ;">tìm kiếm</button>
                <div id="content"></div>
            </form>
        </div>
        <div class="col-1 w-32 ml-6 " style="line-height: 2.2; color: #518cff "><a href="index.php"><i
                    class="fas fa-house-user"></i>trang chủ</a></div>
        <div class="col-1 w-28 mx-3" style="text-align: center; line-height: 2.2;color: #898982"><i
                class="fas fa-crown mx-1"></i>Astra</div>
        
        
        
        <?php
        if (isset($_SESSION['ten_user'])) {
            extract($_SESSION['ten_user']);
            ?>
            <div class="col-1 w-46" style="line-height: 2.2; color: #898982">
                <div class="ul1"><a href="index2.php?act=dangky"><i class="fas fa-smile"></i>
                        <?php echo $ten_user; ?>
                    </a>
                    <div class="ul2">
                        <ul>
                            <li><a href="index2.php?act=chitiettaikhoan&id_user=<?php echo $id_user ?>">Thông Tin Tài
                                    khoản</a>
                            <li><a href="index2.php?act=quenmk">Quên Mật khẩu </a></li>
                            <li><a href="index2.php?act=thoat">Đăng xuất</a></li>
                            <?php if ($vai_tro == 1) { ?>
                                <li><a href="admin/index.php">Đăng nhập admin</a>
                                    <?php
                            }
                            ?>
                            </li>

                    </div>
                </div>
                </a>
            </div>
            <?php
        } else {
            ?>
            <div class="col-1 w-46" style="line-height: 2.2; color: #898982">
                <a href="index2.php?act=dangky"><i class="fas fa-smile"></i>Tài khoản
                </a>
            </div>
            <?php
        }
        ?>
        <div class="col-1 relative w-16"> <a href="tiki/cart/cart1.php"><i class="fas fa-cart-plus mt-2 ml-3"
                    style="color: #518cff"></i>
                <span class="absolute top-1 left-2 text-red-700 font-bold ">
                    <?php
                    $totalQuantity = isset($_SESSION['mycart']) ? count($_SESSION['mycart']) : 0;
                    echo $totalQuantity;
                    ?>
                </span>
        </div>
        </a>

        <div class="h2  w-50 mx-20">
            <ol>
                <li>trái cây</li>
                <li>thịt</li>
                <li>trứng</li>
                <li>rau củ quả</li>
                <li>sữa, bơ, phô mai</li>
                <li>hải sản</li>
                <li>thịt</li>
                <li>trứng</li>
                <li>thịt</li>
                <li>trứng</li>
            </ol>
        </div>
        <div class="h3 w-96  ml-0 "><i class="fas fa-map-marker " style="color: #898982"></i><span
                style="color: #898982">Giao đến:</span> <u>Q. 1, P. Bến Nghé, Hồ Chí Minh</u></div>
        <div class="sale w-full" style="line-height: 2.2;">mỗi ngày, tự động áp dụng không cần săn mã</div>
    </header>