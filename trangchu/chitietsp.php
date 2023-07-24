<!DOCTYPE html>
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
            margin-top: 20px;
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
            background-color: #bbbcbd;
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

<body class="text-xl">
    <header w-full>
        <div class="logo ml-20 my-3"><img src="../img/logo.png" alt=""></div>
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
    </header>

    <article id="btn1" id="content">
        <div class="bg-gray-300 pl-3">
            <div class="py-3">Sách Muôn Kiếp Nhân Sinh (Bìa Mềm) - Nguyên Phong</div>
            <div class="flex w-full bg-white  rounded-xl">
                <div class="w-4/12">
                    <div class="full-image my-4">
                        <img src="../img/sach-muon-kiep-nhan-sinh-1.webp" alt="Full Image" id="fullImage">
                    </div>
                    <div class="thumbnails flex mb-4">
                        <img src="../img/sach-muon-kiep-nhan-sinh-1.webp" class="w-36 h-36" alt="Thumbnail 1"
                            onclick="showImage('../img/sach-muon-kiep-nhan-sinh-1.webp')">
                        <img src="../img/sach-muon-kiep-nhan-sinh.webp" class="w-36 h-36" alt="Thumbnail 2"
                            onclick="showImage('../img/sach-muon-kiep-nhan-sinh.webp')">
                        <img src="../img/sach-muon-kiep-nhan-sinh-1.webp" class="w-36 h-36" alt="Thumbnail 3"
                            onclick="showImage('../img/sach-muon-kiep-nhan-sinh-1.webp')">
                        <img src="../img/sach-muon-kiep-nhan-sinh.webp" class="w-36 h-36" alt="Thumbnail 4"
                            onclick="showImage('../img/sach-muon-kiep-nhan-sinh.webp')">
                        <img src="../img/sach-muon-kiep-nhan-sinh-1.webp" class="w-36 h-36" alt="Thumbnail 5"
                            onclick="showImage('../img/sach-muon-kiep-nhan-sinh-1.webp')">
                    </div>

                    <div class="ml-3 my-8">
                        <span class="text-2xl font-bold">Chia sẻ:</span>
                        <i class="fab fa-facebook text-4xl ml-3" style="color: #043995;"></i>
                        <i class="fab fa-facebook-messenger text-4xl ml-3" style="color: #4781e6;"></i>
                        <i class="fab fa-pinterest text-4xl ml-3" style="color: #ea2a2a;"></i>
                        <i class="fab fa-twitter-square text-4xl ml-3" style="color: #4b86ec;"></i>
                        <i class="fab fa-bluetooth text-4xl ml-3" style="color: #838891;"></i>
                    </div>
                    <div class="px-24">
                        <img src="../img/QC-1.webp" alt="">
                    </div>
                </div>
                <div class="w-8/12 pl-8 pt-4 border-2 border-blue-100">
                    <p class="mb-3">Tác giả: <a href="#" class="text-blue-500">Nguyên Phong</a></p>
                    <h1 class="text-4xl mb-3">Sách Muôn Kiếp Nhân Sinh (Bìa Mềm) - Nguyên Phong</h1>
                    <div class="">
                        <i class="fas fa-star" style="color: #e2b332;"></i>
                        <i class="fas fa-star" style="color: #e2b332;"></i>
                        <i class="fas fa-star" style="color: #e2b332;"></i>
                        <i class="fas fa-star" style="color: #e2b332;"></i>
                        <i class="fas fa-star" style="color: #e2b332;"></i>
                        <a href="" class="ml-2">(Xem 10 đánh gái)</a>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Đã bán 75</span>
                    </div>
                    <div class="flex mr-8">
                        <div class="w-8/12">
                            <div class="mt-8 py-4 px-4 bg-gray-100 rounded-xl">
                                <div class="flex">
                                    <h1 class="text-5xl text-red-500">110.000 <span class="underline">đ</span></h1>
                                    <span class="line-through pt-4 ml-3">150.000 đ</span>
                                    <span class="text-red-500 pt-4 ml-3">-27%</span>
                                </div>
                                <div class="flex">
                                    <div
                                        class="mt-4 py-2 bg-sky-100 w-80 pl-8 text-blue-800 border-2 border-blue-300 rounded-md">
                                        Thưởng 1,31 ASA (≈ 220đ)</div>
                                    <img src="../img/icon-new.gif" alt="" class="w-16 h-8 ml-4 mt-4">
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="text-2xl mb-4">
                                <p class="mb-3 font-bold">5 Mã Giảm Giá</p>
                                <button class="border-blue-500 rounded-xl text-blue-500 border-2 mr-2">Giảm 5k</button>
                                <button class="border-blue-500 rounded-xl text-blue-500 border-2 mr-2">Giảm 10k</button>
                                <button class="border-blue-500 rounded-xl text-blue-500 border-2 mr-2">Giảm 15k</button>
                            </div>
                            <hr class="my-4">
                            <div class="text-2xl mb-4">
                                <span>Giao đến</span>
                                <span class="underline font-bold "> Q. 1, P. Bến Nghé, Hồ Chí Minh</span>
                                -
                                <a href="" class="text-blue-500 font-bold">Đổi địa chỉ</a>
                            </div>
                            <div class="border-2 border-blue-100 rounded-xl p-3">
                                <p class="text-green-500 font-bold"><img src="../img/icon-minivan.png"
                                        class="inline-block w-10" alt=""> Thứ 3, ngày 25/07</p>
                                <span class="">Vận chuyển: 8000đ</span>
                                <span class="line-through">23.000đ</span>
                            </div>
                            <div class="my-4">
                                <span><img src="../img/icon-tich-no-bg.png" class="w-10 inline-block" alt=""> Đã giảm
                                    15.000đ freeship</span>
                            </div>
                            <hr class="my-4">
                            <p class="text-2xl font-bold">Số lượng</p>
                            <div class="quantity-selector my-4 border-2 border-black-100 w-48 rounded-md font-bold">
                                <button class="decrement-btn w-14" onclick="decrement()">-</button>
                                <input type="number" class="quantity-input border-x-2 border-black-100 w-16 h-10 pl-4"
                                    value="1" onchange="updateQuantity()">
                                <button class="increment-btn w-14" onclick="increment()">+</button>
                            </div>
                            <div class="flex">
                                <button type="button"
                                    class="btn btn-danger bg-red-500 w-80 h-20 mr-4 text-2xl rounded-xl">Chọn
                                    Mua</button>
                                <button type="button" class="btn btn-outline-primary w-80 h-20 text-2xl rounded-xl">
                                    <p>Mua trước trả sau</p><span class="text-xl">Lãi suất 0%</span>
                                </button>
                            </div>
                        </div>
                        <div class="w-4/12 ml-8 mt-8 py-4 px-4 border-2 border-blue-100 rounded-xl">
                            <div class="flex">
                                <img src="../img/logo-tiki.webp" alt="" class="w-24 h-24 overflow-hidden"
                                    style="border-radius: 50%;">
                                <div class="ml-4 mt-2">
                                    <p class="mb-2 text-2xl">Tiki Trading</p>
                                    <img src="../img/official.webp" alt="">
                                </div>
                            </div>
                            <div class="flex mt-6 text-2xl">
                                <div class="w-6/12 text-center">
                                    <span class="font-bold">4.7 / 5</span>
                                    <span><i class="fas fa-star" style="color: #e2b332;"></i></span>
                                    <p class="text-xl mt-2">5.4tr+</p>
                                </div>
                                <div class="w-6/12 text-center">
                                    <span class="font-bold">479.7k+</span>
                                    <p class="text-xl mt-2">Theo dõi</p>
                                </div>
                            </div>
                            <div class="flex my-4">
                                <button class="w-6/12 mx-2 border-2 border-blue-500 rounded-xl text-blue-500 h-16"><img
                                        src="../img/icon-home.png" alt="" class="inline-block w-10 h-10 mr-2">Xem
                                    Shop</button>
                                <button class="w-6/12 mr-2 border-2 border-blue-500 rounded-xl text-blue-500 h-16"><img
                                        src="../img/icon-sum.png" alt="" class="inline-block w-10 h-10 mr-2">Theo
                                    Dõi</button>
                            </div>
                            <hr class="mb-4">
                            <div class="mb-4">
                                <div class="flex ">
                                    <div class="w-4/12 mx-1">
                                        <div class=" justify-center flex">
                                            <img src="../img/icon-tich.png" alt="" class="">
                                        </div>
                                        <p>Hoàn tiền 111% nếu hàng giả</p>
                                    </div>
                                    <div class="w-4/12 mx-1">
                                        <div class=" justify-center flex">
                                            <img src="../img/icon-like.png" alt="" class="">
                                        </div>
                                        <p>Mở hộp kiểm tra nhận hàng</p>
                                    </div>
                                    <div class="w-4/12 mx-1">
                                        <div class=" justify-center flex">
                                            <img src="../img/icon-back.png" alt="" class="">
                                        </div>
                                        <p>Đổi trả trong 30 ngày nếu sản phẩm lỗi</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="flex">
                                <div class=" w-8/12 ml-4">
                                    <p class="text-2xl font-bold">7 nhà bán khác</p>
                                    <span>Giá từ 118.000</span>
                                    <span class="underline">đ</span>
                                </div>
                                <div class="w-4/12">
                                    <button type="button"
                                        class="btn btn-outline-primary w-40 h-16 text-2xl rounded-xl">So Sánh</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 bg-white rounded-xl">
                <div class="p-4">
                    <h1 class="text-3xl">Sản Phẩm Tương Tự</h1>
                </div>
            </div>
            <div class="flex">
                <div class=" w-9/12">
                    <div class="p-4 mt-4 bg-white  rounded-xl">
                        <h1 class="text-3xl">Thông Tin Chi Tiết</h1>
                        <div class="flex mt-4">
                            <div class="w-3/12 bg-gray-100">
                                <p class="p-3">Công ty phát hành</p>
                                <p class="p-3">Kích thước</p>
                                <p class="p-3">Loại bìa</p>
                                <p class="p-3">Số trang</p>
                                <p class="p-3">Nhà xuất bản</p>
                            </div>
                            <div class="w-9/12">
                                <p class="p-3">First News - Trí Việt</p>
                                <p class="p-3 bg-gray-100">14.5 x 20.5 cm</p>
                                <p class="p-3">Bìa gập</p>
                                <p class="p-3 bg-gray-100">408</p>
                                <p class="p-3">Nhà Xuất Bản Tổng hợp TP.HCM</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mt-4 bg-white  rounded-xl">
                        <h1 class="text-3xl">Mô Tả Sảm Phẩm</h1>
                        <div class="justify-center flex relative">
                            <img src="../img/bia-sach.jpg" class="w-9/12 " alt="">
                            <div class="h-96 w-full absolute bottom-0"
                                style="background: linear-gradient(to top, white, transparent);"></div>
                        </div>
                        <div class="justify-center flex mt-2">
                            <button type="button" class="btn btn-outline-primary h-16 w-96 text-2xl">Xem Thêm Nội
                                Dung</button>
                        </div>
                    </div>
                </div>
                <div class="w-3/12">
                    <div class=" justify-center flex mt-4">
                        <img src="../img/QC-doc-1.webp" class="w-11/12" alt="">
                    </div>
                </div>
            </div>
            <div class="mt-4 bg-white rounded-xl pb-20">
                <div class="p-4">
                    <h1 class="text-3xl">Đánh Giá - Nhận Xét Từ Khách Hàng</h1>
                </div>
                <div class="py-4 pl-24 flex">
                    <div class="w-3/12">
                        <div class="flex">
                            <h1 class=" font-bold" style="font-size: 52px;">4.8</h1>
                            <div class="ml-4">
                                <div class="flex">
                                    <i class="fas fa-star text-3xl mx-2" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-3xl mx-2" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-3xl mx-2" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-3xl mx-2" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-3xl mx-2" style="color: #e2b332;"></i>
                                </div>
                                <p class="ml-2 mt-2">581 nhận xét</p>
                            </div>
                        </div>
                        <div class="mt-4 flex">
                            <div>
                                <div class="flex my-2">
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                </div>
                                <div class="flex my-2">
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                </div>
                                <div class="flex my-2">
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                </div>
                                <div class="flex my-2">
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                </div>
                                <div class="flex my-2">
                                    <i class="fas fa-star text-xl mr-1" style="color: #e2b332;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                    <i class="fas fa-star text-xl mr-1" style="color: #b8b8b2;"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="w-96 h-3 bg-gray-300 mt-3 rounded-xl"></div>
                                <div class="w-96 h-3 bg-gray-300 mt-4 rounded-xl"></div>
                                <div class="w-96 h-3 bg-gray-300 mt-4 rounded-xl"></div>
                                <div class="w-96 h-3 bg-gray-300 mt-4 rounded-xl"></div>
                                <div class="w-96 h-3 bg-gray-300 mt-4 rounded-xl"></div>
                            </div>
                            <div class="ml-4">
                                <div class="my-2">522</div>
                                <div class="my-2">40</div>
                                <div class="my-2">8</div>
                                <div class="my-2">2</div>
                                <div class="my-2">9</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-9/12">
                        <h1 class="text-2xl font-bold">Tất cả hình ảnh (53)</h1>
                        <div class="flex my-2">
                            <img src="../img/anh-bl-1.webp" class="w-80 h-80" alt="">
                            <img src="../img/anh-bl-1.webp" class="w-80 h-80" alt="">
                            <img src="../img/anh-bl-1.webp" class="w-80 h-80" alt="">
                            <img src="../img/anh-bl-1.webp" class="w-80 h-80" alt="">
                            <img src="../img/anh-bl-1.webp" class="w-80 h-80" alt="">
                        </div>
                        <div class="flex text-2xl">
                            <span class="">Lọc xem theo:</span>
                            <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-32 text-xl mx-4">Mới
                                nhất</button>
                            <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-40 text-xl mr-4">Có
                                hình ảnh</button>
                            <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-48 text-xl mr-4">Đã mua
                                hàng</button>
                            <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-28 text-xl mr-4">5<i
                                    class="fas fa-star text-2xl ml-2" style="color: #b8b8b2;"></i></button>
                            <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-28 text-xl mr-4">4<i
                                    class="fas fa-star text-2xl ml-2" style="color: #b8b8b2;"></i></button>
                            <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-28 text-xl mr-4">3<i
                                    class="fas fa-star text-2xl ml-2" style="color: #b8b8b2;"></i></button>
                            <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-28 text-xl mr-4">2<i
                                    class="fas fa-star text-2xl ml-2" style="color: #b8b8b2;"></i></button>
                            <button type="button" class="btn btn-light bg-gray-200 rounded-3xl w-28 text-xl mr-4">1<i
                                    class="fas fa-star text-2xl ml-2" style="color: #b8b8b2;"></i></button>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="py-4 pl-24 flex">
                    <div class="w-3/12">
                        <div class="flex">
                            <img src="../img/logo-tiki.webp" class="w-20 h20" style="border-radius: 50%;" alt="">
                            <div class="ml-4">
                                <div class="flex">
                                    <h1 class="text-2xl font-bold">Lan Thái</h1>
                                </div>
                                <p class="mt-2">Đã tham gia 5 năm</p>
                            </div>
                        </div>
                        <div class="mt-4 flex">
                            <div>
                                <div class="my-2">
                                    <p class="mb-3"><img src="../img/icon-rate.png" class="w-8 inline-block mr-2"
                                            alt="">Đã viết: 6 Đánh giá</p>
                                    <p><img src="../img/icon-like-2.png" class="w-8 inline-block mr-2" alt="">Đã nhận:
                                        16 lượt cảm ơn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-9/12">
                        <div class="flex">
                            <div class="flex">
                                <i class="fas fa-star text-2xl mx-2" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-2xl mx-2" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-2xl mx-2" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-2xl mx-2" style="color: #e2b332;"></i>
                                <i class="fas fa-star text-2xl mx-2" style="color: #e2b332;"></i>
                            </div>
                            <p class="text-2xl ml-4 font-bold">Cực kì hài lòng</p>
                        </div>
                        <p class="text-green-600 my-4">Đã mua hàng</p>
                        <div class="w-11/12">
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
                                <img src="../img/comment-img-1.webp" class="w-56 h-56 mr-4" alt="">
                                <img src="../img/comment-img-1.webp" class="w-56 h-56 mr-4" alt="">
                                <img src="../img/comment-img-1.webp" class="w-56 h-56 mr-4" alt="">
                            </div>
                            <p class="text-gray-500">Đánh giá vào 2 năm trước - Đã dùng 4 giờ</p>
                            <div class="my-4">
                                <button type="button" class="btn btn-outline-primary text-xl font-bold h-16">Hữu ích
                                    (9)</button>
                                <a href="" class="font-bold text-blue-500 no-underline text-xl ml-8">Bình luận</a>
                                <a href="" class="font-bold text-blue-500 no-underline text-xl ml-8">Chia sẻ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right mr-20">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mt-3">
                            <!-- Các nút pagination sẽ được thêm bằng JavaScript sau này -->
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mt-4 bg-white rounded-xl">
                <div class="p-4">
                    <h1 class="text-3xl">Khám phá thêm</h1>
                </div>
                <div class="bg-gray-100">
                    <div class="grid grid-cols-8 gap-2 w-full">
                        <div class=" p-4 grid-cols-1 tab">
                            <a href="" class="text-black text-center ">
                                <div class="justify-center flex mb-3"><img src="../img/kham-pha-1.webp" alt=""></div>
                                <p>Dành cho bạn</p>
                            </a>
                        </div>
                        <div class=" p-4 grid-cols-1 tab">
                            <a href="" class="text-black text-center ">
                                <div class="justify-center flex mb-3"><img src="../img/kham-pha-2.webp" alt=""></div>
                                <p>Sách tư duy - kỹ năng</p>
                            </a>
                        </div>
                        <div class=" p-4 grid-cols-1 tab">
                            <a href="" class="text-black text-center ">
                                <div class="justify-center flex mb-3"><img src="../img/kham-pha-3.webp" alt=""></div>
                                <p>Sách nghệ thuật sống</p>
                            </a>
                        </div>
                        <div class=" p-4 grid-cols-1 tab">
                            <a href="" class="text-black text-center ">
                                <div class="justify-center flex mb-3"><img src="../img/kham-pha-1.webp" alt=""></div>
                                <p>Gợi ý thêm</p>
                            </a>
                        </div>
                        <div class=" p-4 grid-cols-1 tab">
                            <a href="" class="text-black text-center ">
                                <div class="justify-center flex mb-3"><img src="../img/kham-pha-4.webp" alt=""></div>
                                <p>Dịch vụ số</p>
                            </a>
                        </div>
                        <div class=" p-4 grid-cols-1 tab">
                            <a href="" class="text-black text-center ">
                                <div class="justify-center flex mb-3"><img src="../img/kham-pha-5.webp" alt=""></div>
                                <p>Rẻ mỗi ngày</p>
                            </a>
                        </div>
                        <div class=" p-4 grid-cols-1 tab">
                            <a href="" class="text-black text-center ">
                                <div class="justify-center flex mb-3"><img src="../img/kham-pha-6.webp" alt=""></div>
                                <p>Freeship</p>
                            </a>
                        </div>
                        <div class=" p-4 grid-cols-1 tab">
                            <a href="" class="text-black text-center ">
                                <div class="justify-center flex mb-3"><img src="../img/kham-pha-7.webp" alt=""></div>
                                <p>Deal Siêu hot</p>
                            </a>
                        </div>
                    </div>
                    <div class="my-4 flex">
                        <a href="" class="w-2/6 bg-white rounded-3xl overflow-hidden mr-3 tab">
                            <div class="h-96 justify-center items-center flex bg-gray-200">
                                <img src="../img/sach-van-hanh.jpg" class="" alt="">
                            </div>
                            <div class="mx-4">
                                <p class="text-3xl mt-4 font-bold">Nhà Sách Phật Giáo</p>
                                <p class="my-4">Tài trợ bởi VanHanhBook 5/5<i class="fas fa-star"
                                        style="color: #e2b332;"></i></p>
                                <div class="flex mb-4">
                                    <img src="../img/sach-muon-kiep-nhan-sinh.webp" class=" w-28 h-28" alt="">
                                    <img src="../img/sach-muon-kiep-nhan-sinh.webp" class=" w-28 h-28" alt="">
                                    <img src="../img/sach-muon-kiep-nhan-sinh.webp" class=" w-28 h-28" alt="">
                                    <button class="btn btn-primary bg-blue-500 ml-auto mt-4 w-32 h-16" type="submit">Xem
                                        thêm</button>
                                </div>
                            </div>
                        </a>
                        <a href="" class="w-1/6 bg-white rounded-3xl overflow-hidden mr-3 relative tab">
                            <div class="justify-center items-center flex">
                                <img src="../img/sach-muon-kiep-nhan-sinh.webp" class="h-80" alt="">
                            </div>
                            <div class="mx-4 tracking-widest">
                                <p class="my-3">Nhân Duyên Tiền Kiếp</p>
                                <p class="my-3">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                                </p>
                                <p class="text-red-500 text-2xl font-bold">127.000 <span
                                        class="underline ml-2 mr-3">đ</span><span
                                        class="text-xl font-normal">-35%</span> </p>
                                <p>Hoàn 1 ASA</p>
                            </div>
                            <div class="absolute bottom-0 w-full">
                                <hr>
                                <div class="flex m-3">
                                    <img src="../img/icon-now.png" alt="">
                                    <span class="ml-3">Giao siêu tốc 2h</span>
                                </div>
                            </div>
                        </a>
                        <a href="" class="w-1/6 bg-white rounded-3xl overflow-hidden mr-3 relative tab">
                            <div class="justify-center items-center flex">
                                <img src="../img/sach-muon-kiep-nhan-sinh.webp" class="h-80" alt="">
                            </div>
                            <div class="mx-4 tracking-widest">
                                <p class="my-3">Nhân Duyên Tiền Kiếp</p>
                                <p class="my-3">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                                </p>
                                <p class="text-red-500 text-2xl font-bold">127.000 <span
                                        class="underline ml-2 mr-3">đ</span><span
                                        class="text-xl font-normal">-35%</span> </p>
                                <p>Hoàn 1 ASA</p>
                            </div>
                            <div class="absolute bottom-0 w-full">
                                <hr>
                                <div class="flex m-3">
                                    <img src="../img/icon-now.png" alt="">
                                    <span class="ml-3">Giao siêu tốc 2h</span>
                                </div>
                            </div>
                        </a>
                        <a href="" class="w-1/6 bg-white rounded-3xl overflow-hidden mr-3 relative tab">
                            <div class="justify-center items-center flex">
                                <img src="../img/sach-muon-kiep-nhan-sinh.webp" class="h-80" alt="">
                            </div>
                            <div class="mx-4 tracking-widest">
                                <p class="my-3">Nhân Duyên Tiền Kiếp</p>
                                <p class="my-3">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                                </p>
                                <p class="text-red-500 text-2xl font-bold">127.000 <span
                                        class="underline ml-2 mr-3">đ</span><span
                                        class="text-xl font-normal">-35%</span> </p>
                                <p>Hoàn 1 ASA</p>
                            </div>
                            <div class="absolute bottom-0 w-full">
                                <hr>
                                <div class="flex m-3">
                                    <img src="../img/icon-now.png" alt="">
                                    <span class="ml-3">Giao siêu tốc 2h</span>
                                </div>
                            </div>
                        </a>
                        <a href="" class="w-1/6 bg-white rounded-3xl overflow-hidden mr-3 relative tab">
                            <div class="justify-center items-center flex">
                                <img src="../img/sach-muon-kiep-nhan-sinh.webp" class="h-80" alt="">
                            </div>
                            <div class="mx-4 tracking-widest">
                                <p class="my-3">Nhân Duyên Tiền Kiếp</p>
                                <p class="my-3">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                                </p>
                                <p class="text-red-500 text-2xl font-bold">127.000 <span
                                        class="underline ml-2 mr-3">đ</span><span
                                        class="text-xl font-normal">-35%</span> </p>
                                <p>Hoàn 1 ASA</p>
                            </div>
                            <div class="absolute bottom-0 w-full">
                                <hr>
                                <div class="flex m-3">
                                    <img src="../img/icon-now.png" alt="">
                                    <span class="ml-3">Giao siêu tốc 2h</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="my-4 flex">
                <a href="" class="w-6/12 rounded-3xl overflow-hidden mr-8"><img src="../img/QC-2.jpg" class="w-full"
                        alt=""></a>
                <a href="" class="w-6/12 rounded-3xl overflow-hidden"><img src="../img/QC-3.jpg" class="w-full"
                        alt=""></a>
            </div>
        </div>
    </article>

    <footer class="">
        <div class="flex p-4">
            <div class="w-1/5">
                <p class="text-2xl font-bold my-4">Hỗ trợ khách hàng</p>
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
                <p class="text-2xl font-bold my-4">Về Tiki</p>
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
                <p class="text-2xl font-bold my-4">Hợp tác và liên kết</p>
                <p>Quy chế hoạt động Sàn GDTMĐT</p>
                <p>Bán hàng cùng Tiki</p>
                <p class="text-2xl font-bold my-4">Chứng nhận bởi</p>
                <div class="flex">
                    <img src="../img/chung-nhan-1.png" class="w-12" alt="">
                    <img src="../img/chung-nhan-2.svg" alt="">
                </div>

            </div>
            <div class="w-1/5">
                <p class="text-2xl font-bold my-4">Phương thức thanh toán</p>
                <img src="../img/chung-nhan-2.svg" alt="">
                <p class="text-2xl font-bold my-4">Dịch vụ giao hàng</p>
                <img src="../img/tiki-now.webp" alt="">
            </div>
            <div class="w-1/5">
                <p class="text-2xl font-bold my-4">Kết nối với chúng tôi</p>
                <img src="../img/chung-nhan-2.svg" alt="">
                <p class="text-2xl font-bold my-4">Tải ứng dụng trên điện thoại</p>
                <div class="flex">
                    <img src="../img/qrcode.png" class="w-40" alt="">
                    <div>
                        <img src="../img/appstore.png" class="ml-3" alt="">
                        <img src="../img/playstore.png" class="ml-3 mt-4" alt="">
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