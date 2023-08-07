<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <style>
        #pagination {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button {
            padding: 8px 12px;
            margin: 0 5px;
            background-color: white;
            border: 1px solid #ccc;
            cursor: pointer;
            border-radius: 50%;
        }

        .pageBtn {
            background-color: #fff;
        }

        .pageBtn.active {
            background-color: #289bb8;
            /* Màu xanh cho trang hiện tại */
        }

        .tab:hover {
            background-color: #e9e2e2;
            box-shadow: 0 0 5px 5px gray;
            text-decoration: none;
            color: black;
        }

        .tab {
            background-color: white;
        }

        .tab.active {
            background-color: lightblue;
            /* Change this to your desired light blue color */
        }
    </style>
    <title>Document</title>
</head>

<body class="text-base">
    <header w-full>
        <div class="logo ml-20 my-3"><img src="tiki/img/logo.png" alt=""></div>
        <div class="sreach w-50 ml-20 my-3">
            <form>
                <i class="fas fa-search my-3 mx-3" style="position: absolute;"></i><input type="text" name="search"
                    id="toggleButton" placeholder="Search..">

                <button class="rounded-none  ..." style="border: 1px solid ;">tìm kiếm</button>
                <div id="content"></div>
            </form>


        </div>
        <div class="col-1 w-32 ml-6 " style="line-height: 2.2;"><i class="fas fa-house-user"></i>trang chủ</div>
        <div class="col-1 w-28 mx-3   " style="text-align: center; line-height: 2.2;"><i
                class="fas fa-crown mx-1"></i>Astra</div>
        <div class="col-1 w-36  " style=" line-height: 2.2;"> <a href="trangchu/taikhoan.php"><i
                    class="fas fa-smile "></i>Tài khoản</a></div>
        <div class="col-1 w-4 mx-3  "><i class="fas fa-cart-plus"></i></div>
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
        <div class="h3 w-96  ml-0 "><i class="fas fa-map-marker"></i>Giao đến: Q. 1, P. Bến Nghé, Hồ Chí Minh</div>
        <div class="sale w-full" style="line-height: 2.2;">mỗi ngày, tự động áp dụng không cần săn mã</div>
    </header> -->
<?php
   include "tiki/home.php";
    ?>
<?php
    if (is_array($onesp)) {
        extract($onesp);
        // Thực hiện các thao tác sử dụng các biến đã được tạo ra từ mảng
    } else {
        // Xử lý trường hợp $onesp không phải là mảng
    }
    ?>
<article id="btn1" id="content" class="bg-gray-100">
    <div class=" pl-3 w-10/12 m-auto text-base	">
        <div class="py-3"><?=$Ten_hanghoa?></div>
        <div class="flex w-full bg-white  rounded-xl pb-4">
            <div class="w-4/12">
                <div class="full-image my-2">
                    <?php
    $hinh = $img_path . $image_sp;
    echo '<img src="' . $hinh . '">';
?>
                </div>
                <div class="thumbnails flex mb-4">
                    <img src="tiki/img/sach-muon-kiep-nhan-sinh-1.webp" class="w-20 h-20" alt="Thumbnail 1"
                        onclick="showImage('tiki/img/sach-muon-kiep-nhan-sinh-1.webp')">
                    <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class="w-20 h-20" alt="Thumbnail 2"
                        onclick="showImage('tiki/img/sach-muon-kiep-nhan-sinh.webp')">
                    <img src="tiki/img/sach-muon-kiep-nhan-sinh-1.webp" class="w-20 h-20" alt="Thumbnail 3"
                        onclick="showImage('tiki/img/sach-muon-kiep-nhan-sinh-1.webp')">
                    <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class="w-20 h-20" alt="Thumbnail 4"
                        onclick="showImage('tiki/img/sach-muon-kiep-nhan-sinh.webp')">
                    <img src="tiki/img/sach-muon-kiep-nhan-sinh-1.webp" class="w-20 h-20" alt="Thumbnail 5"
                        onclick="showImage('tiki/img/sach-muon-kiep-nhan-sinh-1.webp')">
                </div>

                <div class="ml-3 my-3">
                    <span class="text-xl font-bold">Chia sẻ:</span>
                    <i class="fab fa-facebook text-2xl ml-3" style="color: #043995;"></i>
                    <i class="fab fa-facebook-messenger text-2xl ml-3" style="color: #4781e6;"></i>
                    <i class="fab fa-pinterest text-2xl ml-3" style="color: #ea2a2a;"></i>
                    <i class="fab fa-twitter-square text-2xl ml-3" style="color: #4b86ec;"></i>
                    <i class="fab fa-bluetooth text-2xl ml-3" style="color: #838891;"></i>
                </div>
                <div class="px-12 mt-2">
                    <img src="tiki/img/QC-1.webp" alt="">
                </div>
            </div>
            <div class="w-8/12 pl-4 pt-2 border-2 border-blue-100">
                <p class="mb-2">Tác giả: <a href="#" class="text-blue-500">Nguyên Phong</a></p>
                <h1 class="text-2xl mb-3"><?=$Ten_hanghoa?></h1>
                <div class="">
                    <i class="fas fa-star" style="color: #e2b332;"></i>
                    <i class="fas fa-star" style="color: #e2b332;"></i>
                    <i class="fas fa-star" style="color: #e2b332;"></i>
                    <i class="fas fa-star" style="color: #e2b332;"></i>
                    <i class="fas fa-star" style="color: #e2b332;"></i>
                    <a href="" class="ml-2">(Xem 10 đánh gái)</a>
                    <span class="ml-2">|</span>
                    <span class="ml-2">Đã bán <?=$soluongban?></span>
                </div>
                <div class="flex mr-8">
                    <div class="w-8/12">
                        <div class="mt-2 py-4 px-4 bg-gray-100 rounded-xl">
                            <div class="flex">
                                <h1 class="text-4xl text-red-500"><?=$don_gia?>.000<span class="underline">đ</span></h1>
                                <span class="line-through pt-4 ml-3"><?=$giamgia?>.000 đ</span>
                                <span class="text-red-500 pt-4 ml-3">-27%</span>
                            </div>
                            <div class="flex">
                                <div
                                    class="mt-3 py-1 bg-sky-100 w-80 pl-8 text-blue-800 border-2 border-blue-300 rounded-md">
                                    Thưởng 1,31 ASA (≈ 220đ)</div>
                                <img src="tiki/img/icon-new.gif" alt="" class="w-10 h-6 ml-2 mt-4">
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class=" mb-2">
                            <p class="mb-2 font-bold">5 Mã Giảm Giá</p>
                            <button class="border-blue-500 rounded-xl text-blue-500 border-1 mr-2 text-sm">Giảm
                                5k</button>
                            <button class="border-blue-500 rounded-xl text-blue-500 border-1 mr-2 text-sm">Giảm
                                10k</button>
                            <button class="border-blue-500 rounded-xl text-blue-500 border-1 mr-2 text-sm">Giảm
                                15k</button>
                        </div>
                        <hr class="my-2">
                        <div class=" mb-3">
                            <span>Giao đến</span>
                            <span class="underline font-bold "> Q. 1, P. Bến Nghé, Hồ Chí Minh</span>
                            -
                            <a href="" class="text-blue-500 font-bold">Đổi địa chỉ</a>
                        </div>
                        <div class="border-2 border-blue-100 rounded-xl p-3">
                            <p class="text-green-500 font-bold"><img src="tiki/img/icon-minivan.png"
                                    class="inline-block w-8" alt=""> Thứ 3, ngày 25/07</p>
                            <span class="">Vận chuyển: 8000đ</span>
                            <span class="line-through">23.000đ</span>
                        </div>
                        <div class="my-2">
                            <span><img src="tiki/img/icon-tich-no-bg.png" class="w-6 inline-block" alt=""> Đã giảm
                                15.000đ freeship</span>
                        </div>
                        <hr class="my-2">
                        <p class="font-bold"> số lượng <br><?=$so_luong?></p>
                        <div class="quantity-selector my-2 border-2 border-black-100 w-36 rounded-md font-bold">
                            <button class="decrement-btn w-10 border-0" onclick="decrement()">-</button>
                            <input type="number" class="quantity-input border-x-2 border-black-100 w-12 h-10 pl-3"
                                value="1" onchange="updateQuantity()">
                            <button class="increment-btn w-10 border-0" onclick="increment()">+</button>
                        </div>
                        <div class="flex">
                            <button type="button" class="btn btn-danger bg-red-500 w-60 h-14 mr-4 rounded-xl">Chọn
                                Mua</button>
                            <button type="button" class="btn btn-outline-primary w-60 h-14 rounded-xl">
                                <p>Mua trước trả sau</p><span class="">Lãi suất 0%</span>
                            </button>
                        </div>
                    </div>
                    <div class="w-4/12 ml-3 mt-4 py-3 px-3 border-2 border-blue-100 rounded-xl">
                        <div class="flex">
                            <img src="tiki/img/logo-tiki.webp" alt="" class="w-10 h-10 overflow-hidden"
                                style="border-radius: 50%;">
                            <div class="ml-4">
                                <p class="mb-2">Tiki Trading</p>
                                <img src="tiki/img/official.webp" alt="" width="70">
                            </div>
                        </div>
                        <div class="flex mt-6">
                            <div class="w-6/12 text-center">
                                <span class="font-bold">4.7 / 5</span>
                                <span><i class="fas fa-star" style="color: #e2b332;"></i></span>
                                <p class="mt-2">5.4tr+</p>
                            </div>
                            <div class="w-6/12 text-center">
                                <span class="font-bold">479.7k+</span>
                                <p class="mt-2">Theo dõi</p>
                            </div>
                        </div>
                        <div class="flex my-4">
                            <button
                                class="w-6/12 mx-2 border-2 border-blue-500 rounded-xl text-blue-500 h-8 text-sm"><img
                                    src="tiki/img/icon-home.png" alt="" class="inline-block w-5 h-5 mr-1">Xem
                                Shop</button>
                            <button
                                class="w-6/12 mr-2 border-2 border-blue-500 rounded-xl text-blue-500 h-8 text-sm"><img
                                    src="tiki/img/icon-sum.png" alt="" class="inline-block w-5 h-5 mr-1">Theo
                                Dõi</button>
                        </div>
                        <hr class="mb-4">
                        <div class="mb-4">
                            <div class="flex text-sm text-center">
                                <div class="w-4/12 mx-1">
                                    <div class=" justify-center flex">
                                        <img src="tiki/img/icon-tich.png" alt="" class="" width="40">
                                    </div>
                                    <p>Hoàn tiền 111% nếu hàng giả</p>
                                </div>
                                <div class="w-4/12 mx-1">
                                    <div class=" justify-center flex">
                                        <img src="tiki/img/icon-like.png" alt="" class="" width="40">
                                    </div>
                                    <p>Mở hộp kiểm tra nhận hàng</p>
                                </div>
                                <div class="w-4/12 mx-1">
                                    <div class=" justify-center flex">
                                        <img src="tiki/img/icon-back.png" alt="" class="" width="40">
                                    </div>
                                    <p>Đổi trả trong 30 ngày nếu sản phẩm lỗi</p>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-2">
                        <div class="flex">
                            <div class=" w-8/12 ml-2">
                                <p class="font-bold">7 nhà bán khác</p>
                                <span>Giá từ 118.000</span>
                                <span class="underline">đ</span>
                            </div>
                            <div class="w-4/12 mt-2">
                                <button type="button" class="btn btn-outline-primary w-20 h-8 rounded-md">So
                                    Sánh</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 bg-white rounded-xl">
            <div class="p-3">
                <h1 class="text-xl font-bold">Sản Phẩm Tương Tự</h1>
            </div>
        </div>
        <div class="flex">
            <div class=" w-9/12">
                <div class="p-3 mt-3 bg-white  rounded-xl">
                    <h1 class="text-xl font-bold">Thông Tin Chi Tiết</h1>
                    <div class="flex mt-4">
                        <div class="w-3/12 bg-gray-100">
                            <p class="p-2">Công ty phát hành</p>
                            <p class="p-2">Kích thước</p>
                            <p class="p-2">Loại bìa</p>
                            <p class="p-2">Số trang</p>
                            <p class="p-2">Nhà xuất bản</p>
                        </div>
                        <div class="w-9/12">
                            <p class="p-2">First News - Trí Việt</p>
                            <p class="p-2 bg-gray-100">14.5 x 20.5 cm</p>
                            <p class="p-2">Bìa gập</p>
                            <p class="p-2 bg-gray-100">408</p>
                            <p class="p-2">Nhà Xuất Bản Tổng hợp TP.HCM</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 mt-3 bg-white  rounded-xl">
                    <h1 class="text-xl font-bold"><?=$motadai?></h1>
                    <div class="justify-center flex relative">
                        <img src="tiki/img/bia-sach.jpg" class="w-9/12 " alt="">
                        <div class="h-64 w-full absolute bottom-0"
                            style="background: linear-gradient(to top, white, transparent);"></div>
                    </div>
                    <div class="justify-center flex mt-2">
                        <button type="button" class="btn btn-outline-primary h-14 w-60 text-xl">Xem Thêm Nội
                            Dung</button>
                    </div>
                </div>
            </div>
            <div class="w-3/12">
                <div class=" justify-center flex mt-4">
                    <img src="tiki/img/QC-doc-1.webp" class="w-11/12" alt="">
                </div>
            </div>
        </div>
        <div class="mt-3 bg-white rounded-xl pb-8">
            <div class="p-4">
                <h1 class="text-xl font-bold">Đánh Giá - Nhận Xét Từ Khách Hàng</h1>
            </div>
            <div class="py-4 pl-12 flex">
                <div class="w-3/12">
                    <div class="flex">
                        <h1 class=" font-bold" style="font-size: 32px;">4.8</h1>
                        <div class="ml-2">
                            <div class="flex">
                                <i class="fas fa-star text-lg mx-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-lg mx-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-lg mx-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-lg mx-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-lg mx-1" style="color: #e2b332;"></i>
                            </div>
                            <p class="ml-2 mt-1 text-sm">581 nhận xét</p>
                        </div>
                    </div>
                    <div class="mt-4 flex">
                        <div>
                            <div class="flex my-1">
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                            </div>
                            <div class="flex my-1">
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                            </div>
                            <div class="flex my-1">
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                            </div>
                            <div class="flex my-1">
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                            </div>
                            <div class="flex my-1">
                                <i class="fas fa-star text-xs mr-1" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                                <i class="fas fa-star text-xs mr-1" style="color: #b8b8b2;"></i>
                            </div>
                        </div>
                        <div class="ml-2">
                            <div class="w-32 h-3 bg-gray-300 mt-2 rounded-xl"></div>
                            <div class="w-32 h-3 bg-gray-300 mt-2 rounded-xl"></div>
                            <div class="w-32 h-3 bg-gray-300 mt-2 rounded-xl"></div>
                            <div class="w-32 h-3 bg-gray-300 mt-2 rounded-xl"></div>
                            <div class="w-32 h-3 bg-gray-300 mt-2 rounded-xl"></div>
                        </div>
                        <div class="ml-1 text-sm">
                            <div class="">522</div>
                            <div class="">40</div>
                            <div class="">8</div>
                            <div class="">2</div>
                            <div class="">9</div>
                        </div>
                    </div>
                </div>
                <div class="w-9/12 pl-3">
                    <h1 class="text-xl font-bold">Tất cả hình ảnh (53)</h1>
                    <div class="flex my-2">
                        <img src="tiki/img/anh-bl-1.webp" class="w-40 h-40" alt="">
                        <img src="tiki/img/anh-bl-1.webp" class="w-40 h-40" alt="">
                        <img src="tiki/img/anh-bl-1.webp" class="w-40 h-40" alt="">
                        <img src="tiki/img/anh-bl-1.webp" class="w-40 h-40" alt="">
                        <img src="tiki/img/anh-bl-1.webp" class="w-40 h-40" alt="">
                    </div>
                    <div class="flex">
                        <span class="mt-2">Lọc xem theo:</span>
                        <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-24 mx-1">Mới
                            nhất</button>
                        <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-32 mr-2">Có
                            hình ảnh</button>
                        <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-32 mr-2">Đã mua
                            hàng</button>
                        <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-16 mr-2">5<i
                                class="fas fa-star ml-2" style="color: #b8b8b2;"></i></button>
                        <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-16 mr-2">4<i
                                class="fas fa-star ml-2" style="color: #b8b8b2;"></i></button>
                        <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-16 mr-2">3<i
                                class="fas fa-star ml-2" style="color: #b8b8b2;"></i></button>
                        <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-16 mr-2">2<i
                                class="fas fa-star ml-2" style="color: #b8b8b2;"></i></button>
                        <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-16 mr-2">1<i
                                class="fas fa-star ml-2" style="color: #b8b8b2;"></i></button>
                    </div>
                </div>
            </div>
            <hr class="my-2">
            <div class="py-2 pl-12 flex">
                <div class="w-3/12">
                    <div class="flex">
                        <img src="tiki/img/logo-tiki.webp" class="w-12 h-12" style="border-radius: 50%;" alt="">
                        <div class="ml-2">
                            <div class="flex">
                                <h1 class=" font-bold">Lan Thái</h1>
                            </div>
                            <p class="mt-1">Đã tham gia 5 năm</p>
                        </div>
                    </div>
                    <div class="mt-2 flex">
                        <div>
                            <div class="my-1">
                                <p class="mb-2"><img src="tiki/img/icon-rate.png" class="w-6 inline-block mr-2"
                                        alt="">Đã viết: 6 Đánh giá</p>
                                <p><img src="tiki/img/icon-like-2.png" class="w-6 inline-block mr-2" alt="">Đã nhận:
                                    16 lượt cảm ơn</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-9/12">
                    <div class="flex">
                        <div class="flex">
                            <i class="fas fa-star text-sm mx-1" style="color: #e2b332;"></i>
                            <i class="fas fa-star text-sm mx-1" style="color: #e2b332;"></i>
                            <i class="fas fa-star text-sm mx-1" style="color: #e2b332;"></i>
                            <i class="fas fa-star text-sm mx-1" style="color: #e2b332;"></i>
                            <i class="fas fa-star text-sm mx-1" style="color: #e2b332;"></i>
                        </div>
                        <p class=" ml-2 font-bold">Cực kì hài lòng</p>
                    </div>
                    <p class="text-green-600 my-2">Đã mua hàng</p>
                    <div class="w-11/12 text-xs">
                        <span class="">Các tác phẩm của tác giả Nguyên Phong quyển nào cũng rất hay và sâu sắc. Đọc
                            một quyển
                            sách hay như uống đc một ly trà ngon, phải nhâm nhi từng chút. Vừa nhận được sách là đọc
                            một
                            hơi hơn trăm trang ạ. Sách nói về luật nhân quả, luật luân hồi: "Mỗi người trong chúng
                            ta
                            đến với kiếp sống này đều có bài học của riêng mình". Học từ vấp ngã, học từ khổ đau nếu
                            kiếp sống này học không xong, những kiếp sống sau chúng ta sẽ lại học tiếp. Ai đã tìm
                            hiểu
                            qua thần số học sau đó đọc quyển này thì sẽ thấy thật sự có sự liên kết gì đó về luật
                            luân
                            hồi.
                        </span>
                        <div class="flex my-4">
                            <img src="tiki/img/comment-img-1.webp" class="w-32 h-32 mr-2" alt="">
                            <img src="tiki/img/comment-img-1.webp" class="w-32 h-32 mr-2" alt="">
                            <img src="tiki/img/comment-img-1.webp" class="w-32 h-32 mr-2" alt="">
                        </div>
                        <p class="text-gray-500">Đánh giá vào 2 năm trước - Đã dùng 4 giờ</p>
                        <div class="my-2">
                            <button type="button" class="btn btn-outline-primary text-sm font-bold h-8">Hữu ích
                                (9)</button>
                            <a href="" class="font-bold text-blue-500 no-underline text-sm ml-8">Bình luận</a>
                            <a href="" class="font-bold text-blue-500 no-underline text-sm ml-8">Chia sẻ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-right mr-16">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-8">
                        <!-- Các nút pagination sẽ được thêm bằng JavaScript sau này -->
                    </ul>
                </nav>
            </div>
        </div>
        <div class="mt-3 bg-white rounded-xl">
            <div class="p-3">
                <h1 class="text-xl font-bold">Khám phá thêm</h1>
            </div>
            <div class="bg-gray-100">
                <div class="grid grid-cols-8 gap-2 w-full">
                    <div class=" p-2 grid-cols-1 tab">
                        <a href="" class="text-black text-center ">
                            <div class="justify-center flex mb-2"><img src="tiki/img/kham-pha-1.webp" alt="" width="40">
                            </div>
                            <p>Dành cho bạn</p>
                        </a>
                    </div>
                    <div class=" p-2 grid-cols-1 tab">
                        <a href="" class="text-black text-center ">
                            <div class="justify-center flex mb-2"><img src="tiki/img/kham-pha-2.webp" alt="" width="40">
                            </div>
                            <p>Sách tư duy - kỹ năng</p>
                        </a>
                    </div>
                    <div class=" p-2 grid-cols-1 tab">
                        <a href="" class="text-black text-center ">
                            <div class="justify-center flex mb-2"><img src="tiki/img/kham-pha-3.webp" alt="" width="40">
                            </div>
                            <p>Sách nghệ thuật sống</p>
                        </a>
                    </div>
                    <div class=" p-2 grid-cols-1 tab">
                        <a href="" class="text-black text-center ">
                            <div class="justify-center flex mb-2"><img src="tiki/img/kham-pha-1.webp" alt="" width="40">
                            </div>
                            <p>Gợi ý thêm</p>
                        </a>
                    </div>
                    <div class=" p-2 grid-cols-1 tab">
                        <a href="" class="text-black text-center ">
                            <div class="justify-center flex mb-2"><img src="tiki/img/kham-pha-4.webp" alt="" width="40">
                            </div>
                            <p>Dịch vụ số</p>
                        </a>
                    </div>
                    <div class=" p-2 grid-cols-1 tab">
                        <a href="" class="text-black text-center ">
                            <div class="justify-center flex mb-2"><img src="tiki/img/kham-pha-5.webp" alt="" width="40">
                            </div>
                            <p>Rẻ mỗi ngày</p>
                        </a>
                    </div>
                    <div class=" p-2 grid-cols-1 tab">
                        <a href="" class="text-black text-center ">
                            <div class="justify-center flex mb-2"><img src="tiki/img/kham-pha-6.webp" alt="" width="40">
                            </div>
                            <p>Freeship</p>
                        </a>
                    </div>
                    <div class=" p-2 grid-cols-1 tab">
                        <a href="" class="text-black text-center ">
                            <div class="justify-center flex mb-2"><img src="tiki/img/kham-pha-7.webp" alt="" width="40">
                            </div>
                            <p>Deal Siêu hot</p>
                        </a>
                    </div>
                </div>
                <div class="my-2 flex">
                    <a href="" class="w-2/6 bg-white rounded-3xl overflow-hidden mr-3 tab">
                        <div class="h-60 justify-center items-center flex bg-gray-200">
                            <img src="tiki/img/sach-van-hanh.jpg" class="" alt="">
                        </div>


                        <div class="mx-2">
                            <p class="text-xl mt-2 font-bold">Nhà Sách Phật Giáo</p>
                            <p class="my-2">Tài trợ bởi VanHanhBook 5/5<i class="fas fa-star"
                                    style="color: #e2b332;"></i></p>
                            <div class="flex mb-2">
                                <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class=" w-16 h-16" alt="">
                                <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class=" w-16 h-16" alt="">
                                <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class=" w-16 h-16" alt="">
                                <button class="btn btn-primary bg-blue-500 ml-auto mt-2 w-24 h-8" type="submit">Xem
                                    thêm</button>
                            </div>
                        </div>
                    </a>
                    <a href="" class="w-1/6 bg-white rounded-2xl overflow-hidden mr-2 relative tab">
                        <div class="justify-center items-center flex">
                            <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class="h-40" alt="">
                        </div>
                        <div class="mx-2 tracking-widest  text-sm">
                            <p class="my-2">Nhân Duyên Tiền Kiếp</p>
                            <p class="my-2">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                            </p>
                            <p class="text-red-500 text-xl font-bold mt-8">127.000 <span
                                    class="underline ml-1 mr-1">đ</span><span class=" font-normal">-35%</span> </p>
                            <p>Hoàn 1 ASA</p>
                        </div>
                        <div class="absolute bottom-0 w-full">
                            <hr>
                            <div class="flex m-3">
                                <img src="tiki/img/icon-now.png" width="30" alt="">
                                <span class="ml-2">Giao siêu tốc 2h</span>
                            </div>
                        </div>
                    </a>
                    <a href="" class="w-1/6 bg-white rounded-2xl overflow-hidden mr-2 relative tab">
                        <div class="justify-center items-center flex">
                            <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class="h-40" alt="">
                        </div>
                        <div class="mx-2 tracking-widest  text-sm">
                            <p class="my-2">Nhân Duyên Tiền Kiếp</p>
                            <p class="my-2">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                            </p>
                            <p class="text-red-500 text-xl font-bold mt-8">127.000 <span
                                    class="underline ml-1 mr-1">đ</span><span class=" font-normal">-35%</span> </p>
                            <p>Hoàn 1 ASA</p>
                        </div>
                        <div class="absolute bottom-0 w-full">
                            <hr>
                            <div class="flex m-3">
                                <img src="tiki/img/icon-now.png" width="30" alt="">
                                <span class="ml-2">Giao siêu tốc 2h</span>
                            </div>
                        </div>
                    </a>
                    <a href="" class="w-1/6 bg-white rounded-2xl overflow-hidden mr-2 relative tab">
                        <div class="justify-center items-center flex">
                            <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class="h-40" alt="">
                        </div>
                        <div class="mx-2 tracking-widest  text-sm">
                            <p class="my-2">Nhân Duyên Tiền Kiếp</p>
                            <p class="my-2">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                            </p>
                            <p class="text-red-500 text-xl font-bold mt-8">127.000 <span
                                    class="underline ml-1 mr-1">đ</span><span class=" font-normal">-35%</span> </p>
                            <p>Hoàn 1 ASA</p>
                        </div>
                        <div class="absolute bottom-0 w-full">
                            <hr>
                            <div class="flex m-3">
                                <img src="tiki/img/icon-now.png" width="30" alt="">
                                <span class="ml-2">Giao siêu tốc 2h</span>
                            </div>
                        </div>
                    </a>
                    <a href="" class="w-1/6 bg-white rounded-2xl overflow-hidden mr-2 relative tab">
                        <div class="justify-center items-center flex">
                            <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class="h-40" alt="">
                        </div>
                        <div class="mx-2 tracking-widest  text-sm">
                            <p class="my-2">Nhân Duyên Tiền Kiếp</p>
                            <p class="my-2">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                            </p>
                            <p class="text-red-500 text-xl font-bold mt-8">127.000 <span
                                    class="underline ml-1 mr-1">đ</span><span class=" font-normal">-35%</span> </p>
                            <p>Hoàn 1 ASA</p>
                        </div>
                        <div class="absolute bottom-0 w-full">
                            <hr>
                            <div class="flex m-3">
                                <img src="tiki/img/icon-now.png" width="30" alt="">
                                <span class="ml-2">Giao siêu tốc 2h</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="my-4 flex">
            <a href="" class="w-6/12 rounded-3xl overflow-hidden mr-8"><img src="tiki/img/QC-2.jpg" class="w-full"
                    alt=""></a>
            <a href="" class="w-6/12 rounded-3xl overflow-hidden"><img src="tiki/img/QC-3.jpg" class="w-full"
                    alt=""></a>
        </div>
    </div>
</article>

<footer class="">
    <div class="flex p-4">
        <div class="w-1/5">
            <p class=" font-bold my-4">Hỗ trợ khách hàng</p>
            <p>Hotline: 1900-6035</p>
            <p>(1000 đ/phút, 8-21h kể cả T7, CN)</p>
            <p>Các câu hỏi thường gặp</p>
            <p>Gửi yêu cầu hỗ trợ</p>
            <p>Hướng dẫn đặt hàng</p>
            <p>Phương thức vận chuyển</p>
            <p>Chính sách đổi trả</p>
            <p>Hướng dẫn trả góp</p>
            <p>Chính sách hàng nhập khẩu</p>
            <p>Hỗ trợ khách hàng: hotro@tiki.vn</p>
            <p>Báo lỗi bảo mật: security@tiki.vn</p>
        </div>
        <div class="w-1/5">
            <p class=" font-bold my-4">Về Tiki</p>
            <p>Giới thiệu Tiki</p>
            <p>Tiki Blog</p>
            <p>Tuyển dụng</p>
            <p>Chính sách bảo mật thanh toán</p>
            <p>Chính sách bảo mật thông tin cá nhân</p>
            <p>Chính sách giải quyết khiếu nại</p>
            <p>Điều khoản sử dụng</p>
            <p>Giới thiệu Tiki Xu</p>
            <p>Gửi Astra nhận Xu mua sắm thả ga</p>
            <p>Bán hàng doanh nghiệp</p>
            <p>Điều kiện vận chuyển</p>
        </div>
        <div class="w-1/5">
            <p class=" font-bold my-4">Hợp tác và liên kết</p>
            <p>Quy chế hoạt động Sàn GDTMĐT</p>
            <p>Bán hàng cùng Tiki</p>
            <p class=" font-bold my-4">Chứng nhận bởi</p>
            <div class="flex">
                <img src="tiki/img/chung-nhan-1.png" class="w-12" alt="">
                <img src="tiki/img/chung-nhan-2.svg" alt="">
            </div>

        </div>
        <div class="w-1/5">
            <p class=" font-bold my-4">Phương thức thanh toán</p>
            <img src="tiki/img/chung-nhan-2.svg" alt="">
            <p class=" font-bold my-4">Dịch vụ giao hàng</p>
            <img src="tiki/img/tiki-now.webp" alt="">
        </div>
        <div class="w-1/5">
            <p class=" font-bold my-4">Kết nối với chúng tôi</p>
            <img src="tiki/img/chung-nhan-2.svg" alt="">
            <p class=" font-bold my-4">Tải ứng dụng trên điện thoại</p>
            <div class="flex">
                <img src="tiki/img/qrcode.png" class="w-40" alt="">
                <div>
                    <img src="tiki/img/appstore.png" class="ml-3" alt="">
                    <img src="tiki/img/playstore.png" class="ml-3 mt-4" alt="">
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <div class="px-4">
        <p>Trụ sở chính: Tòa nhà Viettel, Số 285, đường Cách Mạng Tháng 8, phường 12, quận 10, Thành phố Hồ Chí Minh
        </p>
        <p>Tiki nhận đặt hàng trực tuyến và giao hàng tận nơi, chưa hỗ trợ mua và nhận hàng trực tiếp tại văn phòng
            hoặc trung tâm xử lý đơn hàng</p>
        <p>Giấy chứng nhận Đăng ký Kinh doanh số 0309532909 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh cấp lần
            đầu ngày 06/01/2010 và sửa đổi lần thứ 23 ngày 14/02/2022</p>
        <p>© 2022 - Bản quyền của Công ty TNHH Ti Ki</p>
    </div>
</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
    integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/script.js"></script>

</html>