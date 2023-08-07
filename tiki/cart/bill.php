<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tiki/cart/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="tiki/cart/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="tiki/cart/css/style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="checkout__form">
                <?php
                if (isset($_SESSION['user'])) {
                    $ten_user = $_SESSION['user']['ten_user'];
                    $diachi = $_SESSION['user']['diachi'];
                    $dienthoai = $_SESSION['user']['dienthoai'];
                    $email = $_SESSION['user']['email'];
                } else {
                    $ten_user = "";
                    $diachi = "";
                    $dienthoai = "";
                    $email = "";
                }
                ?>
                <div class="bread-crumb ">
                    <span><a>Trang chủ </a></span>| <span>Thanh Toán </span>
                </div>
                <h3>Thanh Toán</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>mã đơn hàng<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ và Tên Đệm<span>*</span></p>
                                        <input type="text" name="ten_user" value="<?= $ten_user ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa Chỉ<span>*</span></p>
                                <input type="text" placeholder="Tên đường" class="checkout__input__add" name="diachi"
                                    value="<?= $diachi ?>">
                                <input type="text" placeholder="Số nhà,căn hộ,chung cư, số tầng.... ">
                            </div>
                            <!-- <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" name="dienthoai" value="<?= $dienthoai ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="<?= $email ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Bạn đồng ý đặt hàng
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Tạo một tài khoản mới bằng cách điền thông tin dưới đây. Nếu bạn là khách hàng cũ vui
                                lòng đăng nhập ở trang chính.</p>
                            <div class="checkout__input">
                                <p>Tài Khoản<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Vận Chuyển Đến Một Địa Chỉ Khác ?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Ghi Chú Đơn Hàng<span>*</span></p>
                                <input type="text" placeholder="Ghi chú cho đơn hàng của bạn, ví dụ: giao hàng tận phòng...">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn Hàng Của Bạn</h4>
                                <div class="checkout__order__products">Sản Phẩm <span>Tổng Cộng</span></div>
                                <ul>
                                    <li>Cơm xà bị chưởng <span>75.000 VND</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Phụ thu <span>0 VND</span></div>
                                <div class="checkout__order__total">Total <span>75.000 VND</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Tạo tài khoản ?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Chuyển Khoản Ngân Hàng
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                    <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng
                                        Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ được giao sau khi
                                        tiền đã chuyển.</p>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Nhận Hàng Thanh Toán
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                    <p>Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng</p>
                                </div>
                                <button type="submit" class="site-btn">Thanh Toán</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
