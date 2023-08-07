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
<?php
include "tiki/home.php"; // Include the necessary PHP functions
?>
<body>
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
                            $tong = 0;
                            $i = 0;
                            foreach ($_SESSION['mycart'] as $cart) {
                                $hinh = $img_path . $cart[3];
                                $ttien = $cart[4] * $cart[2];
                                $tong += $ttien;
                                $xoasp = '<a href="giohang.php?act=dellcart&id_cart=' . $i . '"><i class="fas fa-trash"></i></a>';
                                echo '
									<div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                        data-mdb-ripple-color="light">
                                        <img src="' . $hinh . '" class="w-100" alt="' . $cart[1] . '">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong>' . $cart[1] . '</strong></p>
                                    <p>' . $cart[2] . '<span>.000đ</span></p>

                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i> ' . $xoasp . '
                                    </button>

                                    <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip" title="Move to the wish list">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <!-- Data -->
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- so_luong -->
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn btn-primary px-3 ms-2" href="giohang.php?act=themsoluong&idcart=' . $mycart . '">+</button>

                                        <div class="form-outline">
                                            <input id="form1" min="0" name="so_luong" value="' . $cart[4] . '" type="number" class="form-control" />
                                            <label class="form-label" for="form1">' . $cart[2] . '<span>.000đ</span></label>
                                        </div>
                                        <button class="btn btn-primary px-3 ms-2" href="giohang.php?act=themsoluong&idcart=' . $mycart. '">+</button>
                                    </div>
                                    <!-- so_luong -->

                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>' . $cart[2] . '</strong>
                                    </p>
                                    <!-- Price -->
                                </div>
                            </div>';
                                $i++;
                            }
                            ?>

                            <!-- Single item -->

                            <!-- Single item -->

                            <hr class="my-4" />

                            <!-- Single item -->
                            <!-- <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                  Image -->

                            <!-- Single item -->
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
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>$53.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Gratis</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong><?php echo $tong; ?></strong></span>
                                </li>
                            </ul>

                            <a href="giohang.php?act=bill"><button type="button" class="btn btn-primary btn-lg btn-block">
                                Go to checkout
                            </button></a>
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
