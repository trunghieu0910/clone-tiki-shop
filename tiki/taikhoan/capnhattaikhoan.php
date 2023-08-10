<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="tiki/taikhoan/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
       
        position: absolute;
        
    }
    </style>
</head>
<?php
include "tiki/home.php"
?>
<body>
       
    <article w-full mt-3 id="btn1" id="content">
        <section>
            <div class="col-trai w-1/5 float-left  ">
                <div class="col-trai-1 w-3/4 my-3.5">
                    <div class="menudoc1 menudoc">
                        <h2>Trang chủ > Thông tin tài khoản</h2>
                        <br>
                        <div class="taikhoan">
                            <img src="upload/<?=$img?>" alt="" style="width: 25%;float: left;height: 47px;border-radius: 50px;">
                            <div class="uu" style="margin-left: 35%;">
                                <h1>tài khoản của <br> <?=$ten_user?></h1>
                            </div>
                        </div>
                        <ul style="margin-top: 5%;">
                            <li>
                                <h2 style="    color: black;
                                                /* font-weight: bold; */
                                                font-size: 18px;
                                                width: 122%;
                                                height: 25px;
                                                margin-left: -11%;
                                                text-align: center;
                                                background-color: #c2bdb7;">thông tin tài khoản </h2>
                            </li>
                            <li>
                                <img src="img/01.webp" alt="" style="border-radius: 15px;"> <a href="#">Thông báo của
                                    tôi</a>
                            </li>
                            <li>
                                <img src="img/02.webp" alt="" style="border-radius: 15px;"> <a href="#">Quản lý đơn
                                    hàng</a>
                            </li>
                            <li>
                                <img src="img/03.webp" alt="" style="border-radius: 15px;"> <a href="#">
                                    Quản lý đổi trả</a>
                            </li>

                            <li>
                                <img src="img/04.webp" alt="" style="border-radius: 15px;"> <a href="#">Sổ địa chỉ</a>
                            </li>
                            <li>
                                <img src="img/05.webp" alt="" style="border-radius: 15px;"> <a href="#">Thông tin thanh
                                    toán</a>
                            </li>
                            <li>
                                <img src="img/06.webp" alt="" style="border-radius: 15px;"> <a href="#">
                                    Đánh giá sản phẩm</a>
                            </li>
                            <li>
                                <img src="img/07.webp" alt="" style="border-radius: 15px;"> <a href="#">Sản phẩm bạn đã
                                    xem</a>
                            </li>

                            <li>
                                <img src="img/08.webp" alt="" style="border-radius: 15px;"> <a href="#">Sản phẩm yêu
                                    thích</a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">Nhận xét của
                                    tôi</a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">
                                    Astra Rewards
                                    Bạn là Khách hàng</a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">
                                    Chia sẻ có lời</a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">
                                    Hợp đồng bảo hiểm</a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">Mua trước trả
                                    sau
                                </a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">Mã giảm giá
                                </a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">
                                    Astra của bạn
                                    0 ASA</a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">

                                    BookCare của tôi</a>
                            </li>
                            <li>
                                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">
                                    Quản lý Tiki Xu của tôi</a>
                            </li>
                    </div>
                </div>
        </section>
        <section>


        
            <?php
            if(isset($_SESSION['ten_user'])&&(is_array($_SESSION['ten_user']))){
                extract($_SESSION['ten_user']);
            }
            ?>
            <form action="index2.php?act=capnhattaikhoan" method="post">
            <div class="col-phai w-4/5 float-right ">
                <div class="ten1s" style="margin-top: 1.5%; font-size: 25px;">
                    <h1>Thông tin tài khoản</h1>
                </div>
                <div class="col-phai-1 rounded-md my-4  ">
<div class="hw ">
                    <div class="trai ">
                        <form action="index2.php?act=capnhattaikhoan"method="POST">
                        <br>
                         <label class="hieuung"> Tên Khách Hàng  </label>
                         <div class="ten4">
                         <input type="text" name="ten_user" value="<?=$ten_user?>">
                         </div>

<br>
                         <label class="hieuung "> Số Điện Thoại   </label>
                         <div class="ten4 ">
                         <input type="text" name="dienthoai" value="<?=$dienthoai?>" >
                         </div>
                         <br>
                         <label class="hieuung">Email </label>
                         <div class="ten4">
                         <input type="text" name="email"  value="<?=$email?>" >
                         </div>

<br>
                         <label class="hieuung"> Địa chỉ </label>
                         <div class="ten4">
                         <input type="text" name="diachi" value="<?=$diachi?>">
                         </div>

<br>


                         <br>

<?php if (isset($image_dm) && ($image_dm != "")): ?>
                <div class="form-group">
                    <label for="img">Hình ảnh hiện tại</label><br>
                    <img src="../upload/<?php echo $img; ?>" alt="Hình ảnh hiện tại" style="max-width: 200px;">
                </div>
                <input type="hidden" name="img" value="<?php echo $img; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="img">Cập nhật Avata</label>
              <input type="file" class="form-control"   name="img" id="img" >
            </div>
            <br>
                         <label> </label>
                         <div class="ten4">
                         <input type="hidden"  name="id_user"  value="<?=$id_user?>" >
                         <input type="submit"  name="capnhat" value="cập nhật ">
                         </div>
                       
                        </form>

                        <div class="khung"></div>

                        </form>          
</div>
<div class="phai  ">
    <h1 style="text-align: center;font-size: 20px;">Thông Tin Khách Hàng</h1>
<div class=" ten4">
<div class="lo">  <img src="upload/<?=$img?>" alt=""><p style="text-align: center;font-size: 20px;">Avata</p> </div>
<div class="ten"><i class="fas fa-users" style="color: #38c41c; padding: 13px 18px;margin-top: 3%;"> Tên Khách Hàng:<?=$ten_user?></div></i>
<br>
<div class="ten"><i class="fas fa-envelope" style="color: #78e60a; padding: 13px 18px; margin-top: 3%;">  Email:<?=$email?></div></i>
<br>
<div class="ten"><i class="fas fa-phone-volume" style="color: #78e60a; padding: 13px 18px;margin-top: 3%;"> Điện Thoại:<?=$dienthoai?></div></i>
<br>
<div class="ten"><i class="fas fa-map-pin" style="color: #78e60a; padding: 13px 18px;margin-top: 6%;"> Địa chỉ:<?=$diachi?></div></i>
</div>
</div>
        </section>
       
    </article>

    <footer class="" style="background-color:   #ededed;">
        <div class="flex p-4 w-full">
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
                    <img src="img/chung-nhan-1.png" class="w-12" alt="">
                    <img src="img/chung-nhan-2.svg" alt="">
                </div>

            </div>
            <div class="w-1/5">
                <p class="text-2xl font-bold my-4">Phương thức thanh toán</p>
                <img src="img/chung-nhan-2.svg" alt="">
                <p class="text-2xl font-bold my-4">Dịch vụ giao hàng</p>
                <img src="img/tiki-now.webp" alt="">
            </div>
            <div class="w-1/5">
                <p class="text-2xl font-bold my-4">Kết nối với chúng tôi</p>
                <img src="img/chung-nhan-2.svg" alt="">
                <p class="text-2xl font-bold my-4">Tải ứng dụng trên điện thoại</p>
                <div class="flex">
                    <img src="img/qrcode.png" class="w-40" alt="">
                    <div>
                        <img src="img/appstore.png" class="ml-3" alt="">
                        <img src="img/playstore.png" class="ml-3 mt-4" alt="">
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

</html>