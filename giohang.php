<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "global.php";
include "model/cart.php";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {

        case 'addcart':
            if (isset($_POST['addsp']) && $_POST['addsp']) {
                $id_SP = $_POST['id_SP'];
                $id_user = $_POST['id_user'];
                $Ten_hanghoa = $_POST['Ten_hanghoa'];
                $don_gia = $_POST['don_gia'];
                $image_sp = $_POST['image_sp'];
                $soluong = $_POST['soluong'];

                $fl = 0;

                foreach ($_SESSION['mycart'] as $i => $cart_item) {
                    if ($cart_item[0] == $id_SP) {
                        $fl = 1;
                        $soluongnew = $soluong + $cart_item[4];
                        $_SESSION['mycart'][$i][4] = $soluongnew;
                        break; // Đã tìm thấy và cập nhật số lượng, thoát khỏi vòng lặp
                    }
                }

                if ($fl == 0) {
                    $spadd = [$id_SP, $Ten_hanghoa, $don_gia, $image_sp, $soluong];
                    $_SESSION['mycart'][] = $spadd;
                }
                $users = loadone_user($id_user);
                header('Location: ./tiki/cart/cart1.php?id_user='.$id_user.'');
                exit();
            }
            break;


        case 'dellcart':
            if (isset($_POST['id_SP']) && $_POST['id_SP'] != "") {
                $id_SP_to_delete = $_POST['id_SP'];
                $id_user = $_POST['id_user'];
                foreach ($_SESSION['mycart'] as $i => $cart_item) {
                    if ($cart_item[0] == $id_SP_to_delete) {
                        unset($_SESSION['mycart'][$i]); // Xóa sản phẩm khỏi giỏ hàng
                        break; // Đã tìm thấy và xóa sản phẩm, thoát khỏi vòng lặp
                    }
                }
            }
            $users = loadone_user($id_user);
            header('Location: ./tiki/cart/cart1.php?id_user='.$id_user.'');
            break;

        case 'themsoluong':
            if (isset($_POST['id_SP']) && isset($_POST['so_luong']) && $_POST['so_luong'] > 0) {
                $id_SP_to_update = $_POST['id_SP'];
                $new_quantity = $_POST['so_luong'];
                $id_user = $_POST['id_user'];
                foreach ($_SESSION['mycart'] as $i => $cart_item) {
                    if ($cart_item[0] == $id_SP_to_update) {
                        $_SESSION['mycart'][$i][4] = $new_quantity;
                        break; // Đã tìm thấy và cập nhật số lượng, thoát khỏi vòng lặp
                    }
                }
            }
            $users = loadone_user($id_user);
            header('Location: ./tiki/cart/cart1.php?id_user='.$id_user.'');
            break;

        case 'pay':
            if (empty($_POST['ten_user']) || empty($_POST['diachi']) || empty($_POST['dienthoai']) || empty($_POST['email'])) {
                echo 'Vui lòng điền đầy đủ thông tin!';
                echo '<a href="index.php"><i class="fas fa-house-user"></i>trang chủ</a>';
                break;
            }
            if (isset($_SESSION['mycart']) && is_array($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
                // Tạo hóa đơn mới
                $error='';
                $Ngay = "2023-08-04";
                $Tongtien = $_POST['ttien']; // Tính tổng tiền từ giỏ hàng
                $id_user = $_POST['id_user']; // Thay thế bằng cách lấy ID người dùng đã đăng nhập
                $ten_user = $_POST['ten_user']; // Thay thế bằng tên người dùng đã đăng nhập
                $diachi = $_POST['diachi']; // Lấy địa chỉ từ form
                $dienthoai = $_POST['dienthoai']; // Lấy điện thoại từ form
                $pttt = $_POST['pttt']; // Lấy phương thức thanh toán từ form
                $email = $_POST['email']; // Lấy email từ form
                $addcart = insert_donhang($ten_user, $diachi, $dienthoai, $email, $Ngay, $Tongtien, $pttt, $id_user);
                    $id_HD = $addcart;
                $thanh_tien= 0;
                foreach ($_SESSION['mycart'] as $cart_item) {
                    $tongtien = $cart_item[2] * $cart_item[4]; // Tính thành tiền cho mỗi sản phẩm
                    $thanh_tien += $tongtien; // Cộng vào tổng tiền
                    $id_SP = $cart_item[0];
                    $soluong = $cart_item[4];
                    $dongia = $cart_item[2];
                    $Ten_hanghoa = $cart_item[1];
                    $image_sp = $cart_item[3];
                    insert_hoadon($id_SP, $image_sp, $Ten_hanghoa, $dongia, $soluong, $thanh_tien, $id_HD);
                }
                $users = loadone_user($id_user);
                unset($_SESSION['mycart']);
                header('Location: ./tiki/cart/bill.php?id_user='.$id_user.'');
            }else {
                echo 'Bạn không có sản phẩm nào trong giỏ!';
                echo '<a href="index.php"><i
                class="fas fa-house-user"></i>trang chủ</a>';
            }

            break;
            
        case 'bill':

            include 'tiki/cart/bill.php';
            break;



    }
}
?>