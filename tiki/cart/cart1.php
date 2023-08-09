<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../tiki/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
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
        <div class="col-1 w-32 ml-6 " style="line-height: 2.2; color: #518cff "><a href="../../index.php"><i
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
                            <li><a href="index2.php?act=quenmk">cập </a>
                            <li><a href="index2.php?act=thoat">Đăng xuất</a>
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
        <div class="col-1 w-4 mx-3 "> <a href="tiki/cart/cart1.php"><i class="fas fa-cart-plus"
                    style="color: #518cff"></i></div>
        <span>
            <?php
            $totalQuantity = isset($_SESSION['mycart']) ? count($_SESSION['mycart']) : 0;
            echo $totalQuantity;
            ?>
        </span></a>

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
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart - 2 items</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($chitietuser) && is_array($chitietuser)) {
                                $targetId = 'id_user'; // Thay 'your_target_id' bằng ID bạn muốn lấy thông tin
                            
                                foreach ($chitietuser as $user) {
                                    extract($user);
                                }
                            }
                            $tong = 0;
                            if (isset($_SESSION['mycart']) && is_array($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
                                foreach ($_SESSION['mycart'] as $i => $cart_item) {
                                    $ttien = $cart_item[2] * $cart_item[4];
                                    $tong += $ttien;
                                    $xoasp = '<a href="giohang.php?act=dellcart&id_SP=' . $cart_item[0] . '"><i class="fas fa-trash"></i></a>';
                                    echo '
                                        <div class="row">
                                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                                <!-- Image -->
                                                <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                    data-mdb-ripple-color="light">
                                                    <img src="../' . $cart_item[3] . '" class="w-40" alt="' . $cart_item[1] . '">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                </div>
                                                <!-- Image -->
                                            </div>

                                            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                                <!-- Data -->
                                                <p><strong>' . $cart_item[1] . '</strong></p>
                                                <p>' . $cart_item[2] . '.000đ</p>
                                                <form class="delete-sp-form" action="../../giohang.php?act=dellcart" method="post">
                                                    <input type="hidden" name="id_SP" value="' . $cart_item[0] . '">
                                                    <input type="submit" class="btn btn-primary btn-sm me-1 mb-2 bg-blue-700" name="dellcart" data-mdb-toggle="tooltip" title="Remove item" value="Xóa">
                                                </form>
                                                <!-- Data -->
                                            </div>

                                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                                <!-- so_luong -->
                                                <form class="update-quantity-form" action="../../giohang.php?act=themsoluong" method="post">
                                                    <input type="hidden" name="id_SP" value="' . $cart_item[0] . '">
                                                    <input type="number" name="so_luong" value="' . $cart_item[4] . '" min="1">
                                                    <input class="btn btn-primary bg-blue-700" type="submit" value="Cập nhật" name="themsoluong">
                                                </form>
                                                <!-- so_luong -->

                                                <!-- Price -->
                                                <p class="text-start text-md-center">
                                                    <strong>' . $ttien . '.000đ</strong>
                                                </p>
                                                <!-- Price -->
                                            </div>
                                        </div>';
                                }
                            } else {
                                echo "Không có sản phẩm!";
                            }


                            ?>
                            <hr class="my-4" />
                        </div>
                    </div>
                    <!-- fooodet -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Expected shipping delivery</strong></p>
                            <p class="mb-0">12.10.2020 - 14.10.2020</p>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>We accept</strong></p>
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                alt="Visa" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                alt="American Express" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                alt="Mastercard" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
                                alt="PayPal acceptance mark" />
                        </div>
                    </div>
                </div>
                <!-- giá tổng -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Tên KH:
                                    <span>
                                        <?php echo $ten_user; ?>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Địa chỉ:
                                    <span>
                                        <?php echo $diachi; ?>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Điện thoại:
                                    <span>
                                        <?php echo $dienthoai; ?>
                                    </span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span id="totalAmount"><strong>
                                            <?php echo $tong; ?>
                                            .000đ
                                        </strong></span>
                                </li>
                                <li>
                                <input type="text" name="id_user" value="<?php echo $id_user; ?>">
                                </li>
                            </ul>
                            <form class="update-quantity-form" action="../../giohang.php?act=pay" method="post">
                                <input type="hidden" name="ttien" value="<?php echo $ttien; ?>">
                                <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                                <input type="hidden" name="ten_user" value="<?php echo $ten_user; ?>">
                                <input type="hidden" name="diachi" value="<?php echo $diachi; ?>">
                                <input type="hidden" name="dienthoai" value="<?php echo $dienthoai; ?>">
                                <input type="hidden" name="pttt" value="1">
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <input type="hidden" name="ngay" value="">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" name="pay"
                                    value="Mua hàng">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "tiki/foodter.php";
    ?>

</body>

</html>