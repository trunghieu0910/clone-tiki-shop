<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="tiki/taikhoan/css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
  
  <style>
  .slick-initialized .slick-slide {
    margin: 0 10px;
}
.ten{
  font:30px;
  color: #11ff00;
  position: absolute;
}
</style>
</head>
<body>



<?php
if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
  extract($_SESSION['user']);
}

?>
  <header w-full>
    <div class="logo ml-20 my-3"><img src="img/logo.png" alt=""></div>
    <div class="sreach w-50 ml-20 my-3">
      <form>
        <i class="fas fa-search my-3 mx-3" style="position: absolute;"></i><input type="text" name="search"
          id="toggleButton" placeholder="Search..">

          <button class="rounded-none  ..." style="margin-left: -13%;
    border-left: 1px solid; ;">tìm kiếm</button>
        <div id="content"></div>
      </form>
    </div>
    <div class="col-1 w-32 ml-6 " style="line-height: 2.2;     color: #518cff "><i class="fas fa-house-user"></i>trang chủ</div>
    <div class="col-1 w-28 mx-3   " style="text-align: center; line-height: 2.2;color: #898982"><i class="fas fa-crown mx-1"></i>Astra</div>
    <div class="col-1 w-46" style="line-height: 2.2; color: #898982">
    <div class="ul1"><a href="index2.php?act=dangky"><i class="fas fa-smile"></i></a>
</div>
</div>
  </a>
    </div>
    <div class="col-1 w-4 mx-3  "><i class="fas fa-cart-plus" style="color: #518cff"></i></div>
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
    <div class="h3 w-96  ml-0 "><i class="fas fa-map-marker " style="color: #898982"></i><span style="color: #898982">Giao đến:</span> <u>Q. 1, P. Bến Nghé, Hồ Chí Minh</u></div>
    <div class="sale w-full" style="line-height: 2.2;">mỗi ngày, tự động áp dụng không cần săn mã</div>
  </header>

  <article w-full mt-3 id="btn1" id="content">
    <section>
      <div class="col-trai w-1/5 float-left">
        <div class="col-trai-1 w-3/4 my-3.5">
          <div class="menudoc1 menudoc">
            <h2>Trang chủ > Thông tin tài khoản</h2>
            <br>
            <div class="taikhoan">
             <img src="img/logo.png" alt="" style="width: 25%; float: left;">
             <div class="uu" style="margin-left: 35%;">  </h1></div>
            </div>
            <ul style="margin-top: 5%;">
              <li> <h2 style="    color: black;
                /* font-weight: bold; */
                font-size: 18px;
                width: 122%;
                height: 25px;
                margin-left: -11%;
                text-align: center;
                background-color: #c2bdb7;">thông tin tài khoản </h2></li>
              <li>
                <img src="img/01.webp" alt="" style="border-radius: 15px;"> <a href="#">Thông báo của tôi</a>
              </li>
              <li>
                <img src="img/02.webp" alt="" style="border-radius: 15px;"> <a href="#">Quản lý đơn hàng</a>
              </li>
              <li>
                <img src="img/03.webp" alt="" style="border-radius: 15px;"> <a href="#">
                  Quản lý đổi trả</a>
              </li>

              <li>
                <img src="img/04.webp" alt="" style="border-radius: 15px;"> <a href="#">Sổ địa chỉ</a>
              </li>
              <li>
                <img src="img/05.webp" alt="" style="border-radius: 15px;"> <a href="#">Thông tin thanh toán</a>
              </li>
              <li>
                <img src="img/06.webp" alt="" style="border-radius: 15px;"> <a href="#">
                  Đánh giá sản phẩm</a>
              </li>
              <li>
                <img src="img/07.webp" alt="" style="border-radius: 15px;"> <a href="#">Sản phẩm bạn đã xem</a>
              </li>

              <li>
                <img src="img/08.webp" alt="" style="border-radius: 15px;"> <a href="#">Sản phẩm yêu thích</a>
              </li>
              <li>
                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">Nhận xét của tôi</a>
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
                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">Mua trước trả sau
                </a>
              </li><li>
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
      <div class="col-phai w-4/5 float-right ">
        <div class="ten1s" style="margin-top: 1.5%; font-size: 25px;"><h1>Thông tin tài khoản</h1></div>
        <div class="col-phai-1 rounded-md my-4">
       
        <!-- <div class="trai">
<div class="h">quen mk </div>
<form action="index2.php?act=quenmk" method="POST">
<div class="ten5">
    <label style="margin-left: 2%;">Số diện thoại</label><br>
    <input type="text" name="ten_user" class="txt1" style="width: 75;" >
    </div>
          </div>
          <input type="submit" value="cap nhat" name="gui">
          </form> -->
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
.form-gap {
    padding-top: 70px;
}

          <div class="thongbao">
            <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
            ?>
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