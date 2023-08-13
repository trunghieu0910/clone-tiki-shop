<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tiki/cart/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="tiki/cart/css/elegant-icons.css" type="text/css">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../tiki/css/index.css">
    <style>
        .container {
            margin-top: 20px;
            background-color: #eee;
        }

        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: 1rem;
        }
    </style>
</head>

<body class="">
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
    <?php
    include "../../model/cart.php";
    include "../../model/pdo.php";
    $id_user = 'id_user';
    $bills = loadone_hoadon($id_user);
    foreach ($bills as $bill) {
        extract($bill);
    }
    $chitietbill = loadall_hoadon($id_HD);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-title ml-20">
                            <h4 class="float-end font-size-15">Clone Tiki Shop<span
                                    class="badge bg-success font-size-12 ms-2">Paid</span></h4>
                            <div class="mb-4">
                                <h2 class="mb-1 text-muted text-xl font-bold">Khách hàng</h2>
                            </div>
                            <div class="text-muted w-8/12">
                                <div class="flex mb-2 border-b border-black border-dotted ">
                                    <div class="w-80">
                                        <span class="">Tên Khách hàng: </span>
                                    </div>
                                    <span class="text-orange-600">
                                        <?php echo $ten_user ?>
                                    </span>
                                </div>
                                <div class="flex mb-2 border-b border-black border-dotted">
                                    <div class="w-80">
                                        <span class="">Địa chỉ: </span>
                                    </div>
                                    <span class="text-orange-600">
                                        <?php echo $diachi ?>
                                    </span>
                                </div>
                                <div class="flex mb-2 border-b border-black border-dotted">
                                    <div class="w-80">
                                        <span class="">Số điện thoại: </span>
                                    </div>
                                    <span class="text-orange-600">
                                        <?php echo $dienthoai ?>
                                    </span>
                                </div>
                                <div class="flex border-b border-black border-dotted">
                                    <div class="w-80">
                                        <span class="">Email: </span>
                                    </div>
                                    <span class="text-orange-600">
                                        <?php echo $email ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-sm-6 ml-20">
                                <div class="text-muted">
                                    <div class="mb-4">
                                        <h2 class="mb-1 text-muted text-xl font-bold">Hóa đơn</h2>
                                    </div>
                                    <div class="text-muted">
                                        <div class="flex mb-2 border-b border-black border-dotted">
                                            <div class="w-80">
                                                <span class="">Mã hóa đơn: </span>
                                            </div>
                                            <span class="text-orange-600">HD
                                                <?php echo $id_HD ?>
                                            </span>
                                        </div>
                                        <div class="flex mb-2 border-b border-black border-dotted">
                                            <div class="w-80">
                                                <span class="">Ngày xuất hóa đơn: </span>
                                            </div>
                                            <span class="text-orange-600">
                                                <?php echo $Ngay ?>
                                            </span>
                                        </div>
                                        <div class="flex mb-2 border-b border-black border-dotted">
                                            <div class="w-80">
                                                <span class="">Phương thức thanh toán: </span>
                                            </div>
                                            <span class="text-orange-600">
                                                <?php echo $pttt ?>
                                            </span>
                                        </div>
                                        <div class="flex border-b border-black border-dotted    ">
                                            <div class="w-80">
                                                <span class="">Tổng tiền: </span>
                                            </div>
                                            <span class="text-orange-600">
                                                <?php echo $Tongtien ?>.000đ
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- end col -->
                            <!-- <div class="col-sm-6">
                                <div class="text-muted text-sm-end">
                                    <div>
                                        <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                        <p>#DZ0112</p>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                        <p>12 Oct, 2020</p>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="font-size-15 mb-1">Order No:</h5>
                                        <p>#1123456</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="py-2 mx-20">
                            <h5 class="font-size-15 text-xl font-bold">Chi tiết đơn hàng</h5>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;">id</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Ảnh</th>
                                            <th class="text-end" style="width: 120px;">Tổng tiền</th>
                                        </tr>
                                    </thead><!-- end thead -->
                                    <tbody>
                                        <?php
                                        foreach ($chitietbill as $ctbill) {
                                            extract($ctbill);
                                            echo '<tr>
                                                    <th scope="row">'.$id_HDchitiet.'</th>
                                                    <td>
                                                        <div>
                                                            <h5 class="text-truncate font-size-14 mb-1">'.$Ten_hanghoa.'</h5>
                                                            <p class="text-muted mb-0">Watch, Black</p>
                                                        </div>
                                                    </td>
                                                    <td>'.$dongia.'.000đ</td>
                                                    <td>'.$soluong.'</td>
                                                    <td><img src="../'.$image_sp.'" width=40></td>
                                                    <td class="text-end">'.$thanh_tien.'.000đ</td>
                                                </tr>
                                                ';
                                        }
                                        ?>
                                        <!-- end tr -->
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div><!-- end table responsive -->
                            <div class="d-print-none mt-4">
                                <div class="float-end">
                                    <a href="javascript:window.print()" class="btn btn-success me-1"><i
                                            class="fa fa-print"></i></a>
                                    <a href="#" class="btn btn-primary w-md">In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
    </div>
</body>

</html>