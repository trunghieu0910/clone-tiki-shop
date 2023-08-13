<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "global.php";
$spnew = loadall_sanpham_home();
$htdm = loadall_danhmuc();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $Mat_khau = $_POST['Mat_khau'];
                $ten_user = $_POST['ten_user'];
                // Insert the user into the database
                // insert_user($ten_user, $Mat_khau, $email);
                // $thongbao = "Đăng ký thành công!";
                // Check if the username already exists
                $user = check_user($ten_user);
                if ($user) {
                    $thongbao = "Tên người dùng đã tồn tại.";
                } else {
                    insert_user($ten_user, $Mat_khau, $email);
                    $thongbao = "Đăng ký thành công!";

                }
            }
            include 'tiki/taikhoan/dangky.php';
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ten_user = $_POST['ten_user'];
                $Mat_khau = $_POST['Mat_khau'];
                $checkid_user = checkid_user($ten_user, $Mat_khau);
                if (is_array($checkid_user)) {
                    $_SESSION['ten_user'] = $checkid_user;
                    header("location:index.php");

                } else {
                    $thongbao = "tài khoản chưa đăng ký ";

                }
            }
            include 'tiki/taikhoan/home.php';
            include 'tiki/taikhoan/dangky.php';
            break;

        case 'chitiettaikhoan':
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                $id_user = $_GET['id_user'];
                $chitietuser = loadone_user($id_user);
            }
            //  $chitietuser = loadone_user($id_user);
            include "tiki/taikhoan/capnhattaikhoan.php";
            break;


        case 'capnhattaikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $email = $_POST['email'];
                $ten_user = $_POST['ten_user'];
                $dienthoai = $_POST['dienthoai'];
                $diachi = $_POST['diachi'];
                $id_user = $_POST['id_user'];
                $_SESSION['user'] = checkid_user($ten_user, $Mat_khau);
                $img = isset($_POST["img"]) ? $_POST["img"] : "";
                // upload file hình cần bổ sung
                if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                    // Tệp mới đã được tải lên, lưu vào thư mục upload và cập nhật đường dẫn mới
                    $new_image_path = "../upload/" . $_FILES['img']['name'];
                    move_uploaded_file($_FILES['img']['tmp_name'], $new_image_path);
                    $img = $new_image_path;
                } else {
                    // Không có tệp mới được tải lên, giữ lại hình ảnh cũ
                    $img = $img;
                }
                update_user($id_user, $ten_user, $email, $dienthoai, $diachi, $img);
                header("location:index2.php?act=chitiettaikhoan");
            }
            break;




        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "capnhattaikhoan/capnhattaikhoan.php";
            break;
            break;

        case 'quenmk':
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $ten_user = $_POST['ten_user'];
                $check_user = check_user($ten_user);
                if (is_array($check_user)) {
                    $thongbao = "Mat_khau của bạn là " . $check_user['Mat_khau'];
                } else {
                    $thongbao = "tên đăng nhập ko tồn tại";
                }
            }
            include 'tiki/taikhoan/quenmk.php';
            break;
        case 'thoat':
            session_unset();
            header("location:index.php");
            break;

        case 'chitietuser':
            if (isset($id_user)) {
                $chitietuser = loadone_user($id_user);
            }
            //  $chitietuser = loadone_user($id_user);
            include "tiki/taikhoan/thongtintaikhoan.php";
            include "tiki/cart/bill.php";
            break;

        case 'chitietbilluser':
            if (isset($id_user)) {
                $chitietuser = loadone_user($id_user);
            }
            //  $chitietuser = loadone_user($id_user);
            include "tiki/taikhoan/thongtintaikhoan.php";
            break;

    }
} else {

}





?>