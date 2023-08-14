<?php
session_start();
ob_start();
include "../global.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/thuonghieu.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../model/binhluan.php";
include "header.php";
// if(!isset($_SESSION['user'])){
//     header('Location: ../index.php');
// }
// if(isset($_SESSION['user'])&&($_SESSION['user']['role']!=1)){
//     header('Location: ../index.php');
// }
//controller
if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $error = array();
                $Ten_danhmuc = $_POST['Ten_danhmuc'];
                // upload file hình cần bổ sung
                $image_dm = $_FILES['image_dm']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image_dm"]["name"]);
                move_uploaded_file($_FILES["image_dm"]["tmp_name"], $target_file);
                if ($image_dm == "") {
                    $error['image_dm'] = "Không để trống hình ảnh";
                }
                $imageFileType = strtolower(pathinfo($image_dm, PATHINFO_EXTENSION));
                if ($image_dm != "" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $error['image_dm'] = "Chỉ file JPG, JPEG, PNG & GIF files được cho phép";
                }
                if (strlen($Ten_danhmuc) == 0) {
                    $error['Ten_danhmuc'] = "Không để trống tên danh mục!";
                }
                if (!$error) {
                    $is_inserted = insert_danhmuc($Ten_danhmuc, $image_dm);
                    if ($is_inserted) {
                        $thongbao = "Thêm Danh Mục Thành Công";
                    }
                } else {
                    $thongbao = "Thêm Bài Danh Mục Thất Bại";
                }

                // $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'dsdm':
            //function loaddall_danhmuc tra ve 1 mang (co lenh return)
            //khai bao 1 bien chua cac gia tri tra ve cua function loadall_danhmuc
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'addth':
            // kiểm tra có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $error = array();
                $Ten_thuonghieu = $_POST['Ten_thuonghieu'];
                // upload file hình cần bổ sung
                $img_thuonghieu = $_FILES['img_thuonghieu']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img_thuonghieu"]["name"]);
                move_uploaded_file($_FILES["img_thuonghieu"]["tmp_name"], $target_file);
                if ($img_thuonghieu == "") {
                    $error['img_thuonghieu'] = "Không để trống hình ảnh";
                }
                $imageFileType = strtolower(pathinfo($img_thuonghieu, PATHINFO_EXTENSION));
                if ($img_thuonghieu != "" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $error['img_thuonghieu'] = "Chỉ file JPG, JPEG, PNG & GIF files được cho phép";
                }
                if (strlen($Ten_thuonghieu) == 0) {
                    $error['Ten_thuonghieu'] = "Không để trống tên danh mục!";
                }
                if (!$error) {
                    $is_inserted = insert_thuonghieu($Ten_thuonghieu, $img_thuonghieu);
                    if ($is_inserted) {
                        $thongbao = "Thêm Danh Mục Thành Công";
                    }
                } else {
                    $thongbao = "Thêm Bài Danh Mục Thất Bại";
                }

                // $thongbao = "Thêm thành công";
            }
            include "thuonghieu/add.php";
            break;
        case 'dsth':
            //function loaddall_danhmuc tra ve 1 mang (co lenh return)
            //khai bao 1 bien chua cac gia tri tra ve cua function loadall_danhmuc
            $listth = loadall_thuonghieu();
            include "thuonghieu/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] > 0) {
                delete_danhmuc($_GET['id_danhmuc']);
            }
            $listdm = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;

        case 'suadm':
            if (isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] > 0) {
                $danhmuc = loadone_danhmuc($_GET['id_danhmuc']);
            }
            include 'danhmuc/update.php';
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $Ten_danhmuc = $_POST['Ten_danhmuc'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $old_image_dm = isset($_POST["old_image_dm"]) ? $_POST["old_image_dm"] : "";
                // upload file hình cần bổ sung
                if (isset($_FILES['image_dm']) && $_FILES['image_dm']['error'] === UPLOAD_ERR_OK) {
                    // Tệp mới đã được tải lên, lưu vào thư mục upload và cập nhật đường dẫn mới
                    $new_image_path = "../upload/" . $_FILES['image_dm']['name'];
                    move_uploaded_file($_FILES['image_dm']['tmp_name'], $new_image_path);
                    $image_dm = $new_image_path;
                } else {
                    // Không có tệp mới được tải lên, giữ lại hình ảnh cũ
                    $image_dm = $old_image_dm;
                }
                update_danhmuc($id_danhmuc, $Ten_danhmuc, $image_dm);
                $thongbao = 'Cập nhật thành công';
            }
            $listdm = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;

        case 'xoath':
            if (isset($_GET['id_thuonghieu']) && $_GET['id_thuonghieu'] > 0) {
                delete_thuonghieu($_GET['id_thuonghieu']);
            }
            $listth = loadall_thuonghieu();
            include 'thuonghieu/list.php';
            break;

        case 'suath':
            if (isset($_GET['id_thuonghieu']) && $_GET['id_thuonghieu'] > 0) {
                $thuonghieu = loadone_thuonghieu($_GET['id_thuonghieu']);
            }
            include 'thuonghieu/update.php';
            break;

        case 'updateth':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $Ten_thuonghieu = $_POST['Ten_thuonghieu'];
                $id_thuonghieu = $_POST['id_thuonghieu'];
                // upload file hình cần bổ sung
                $old_img_thuonghieu = isset($_POST["old_img_thuonghieu"]) ? $_POST["old_img_thuonghieu"] : "";
                // upload file hình cần bổ sung
                if (isset($_FILES['img_thuonghieu']) && $_FILES['img_thuonghieu']['error'] === UPLOAD_ERR_OK) {
                    // Tệp mới đã được tải lên, lưu vào thư mục upload và cập nhật đường dẫn mới
                    $new_image_path = "../upload/" . $_FILES['img_thuonghieu']['name'];
                    move_uploaded_file($_FILES['img_thuonghieu']['tmp_name'], $new_image_path);
                    $img_thuonghieu = $new_image_path;
                } else {
                    // Không có tệp mới được tải lên, giữ lại hình ảnh cũ
                    $img_thuonghieu = $old_img_thuonghieu;
                }
                update_thuonghieu($id_thuonghieu, $Ten_thuonghieu, $img_thuonghieu);
                $thongbao = 'Cập nhật thành công';
            }
            $listth = loadall_thuonghieu();
            include 'thuonghieu/list.php';
            break;

        // Controller Sản Phẩm
        case 'addsp':
            // kiểm tra có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $error = array();
                $id_danhmuc = $_POST['id_danhmuc'];
                $id_thuonghieu = $_POST['id_thuonghieu'];
                $Ten_hanghoa = $_POST['Ten_hanghoa'];
                $don_gia = $_POST['don_gia'];
                $giamgia = $_POST['giamgia'];
                $so_luong = $_POST['so_luong'];
                $ngaynhap = $_POST['ngaynhap'];
                if (isset($_POST['hot'])) {
                    $hot = $_POST['hot'];
                } else {
                    $hot = "0"; // Giá trị mặc định nếu không tồn tại phần tử 'hot'
                }
                $soluongban = $_POST['soluongban'];
                $soluotxem = $_POST['soluotxem'];
                $motangan = $_POST['motangan'];
                $motadai = $_POST['motadai'];
                // upload file hình cần bổ sung
                $image_sp = $_FILES['image_sp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image_sp"]["name"]);
                move_uploaded_file($_FILES["image_sp"]["tmp_name"], $target_file);
                if ($image_sp == "") {
                    $error['image_sp'] = "Không để trống hình ảnh";
                }
                $imageFileType = strtolower(pathinfo($image_sp, PATHINFO_EXTENSION));
                if ($image_sp != "" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $error['image_sp'] = "Chỉ file JPG, JPEG, PNG & GIF files được cho phép";
                }
                if (strlen($Ten_hanghoa) == 0) {
                    $error['Ten_hanghoa'] = "Không để trống tên sản phẩm!";
                }
                if (strlen($don_gia) == 0) {
                    $error['don_gia'] = "Không để trống giá sản phẩm!";
                }
                if (strlen($motangan) == 0) {
                    $error['motangan'] = "Không để trống thông tin sản phẩm!";
                }
                if (!$error) {
                    $is_inserted = insert_sanpham($soluotxem, $soluongban, $Ten_hanghoa, $don_gia, $giamgia, $hot, $ngaynhap, $so_luong, $id_thuonghieu, $id_danhmuc, $motangan, $motadai, $image_sp);
                    if ($is_inserted) {
                        $thongbao = "Thêm Sản Phẩm Thành Công";
                    }
                } else {
                    $thongbao = "Thêm Sản Phẩm Thất Bại";
                }

                // $thongbao = "Thêm thành công";
            }
            $listdm = loadall_danhmuc();
            $listth = loadall_thuonghieu();
            include "sanpham/add.php";
            break;

        case 'dssp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $id_danhmuc = $_POST['id_danhmuc'];
                $Ten_hanghoa = $_POST['keyword'];
            } else {
                $Ten_hanghoa = '';
                $id_danhmuc = 0;
            }
            $listdm = loadall_danhmuc();
            $listth = loadall_thuonghieu();
            $listsp = loadall_sanpham($Ten_hanghoa, $id_danhmuc);

            $img = load_img($id_danhmuc);
            include "sanpham/list.php";
            break;
        case 'imgsp':
            if (isset($_GET['id_SP']) && ($_GET['id_SP'] > 0)) {
                $id_SP = $_GET['id_SP'];
                $listimg = loadall_img_id($id_SP);
            }
            $sp = loadOne_sanpham($id_SP);
            include "sanpham/listimg.php";
            break;
        case 'addimgsp':
            // kiểm tra có click vào nút add hay không

            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $error = array();
                $id_SP = $_POST['id_SP'];
                $duong_dan_anh = $_FILES['duong_dan_anh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["duong_dan_anh"]["name"]);
                move_uploaded_file($_FILES["duong_dan_anh"]["tmp_name"], $target_file);
                if ($duong_dan_anh == "") {
                    $error['duong_dan_anh'] = "Không để trống hình ảnh";
                }
                $imageFileType = strtolower(pathinfo($duong_dan_anh, PATHINFO_EXTENSION));
                if ($duong_dan_anh != "" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $error['duong_dan_anh'] = "Chỉ file JPG, JPEG, PNG & GIF files được cho phép";
                }
                if (!$error) {
                    $is_inserteds = insert_imgsp($id_SP, $duong_dan_anh);
                    // header('Location: ../admin/sanpham/listimg.php?id_SP=' . $id_SP . '');
                } else {
                    $thongbao = "Thêm Bài Danh Mục Thất Bại";
                }

                if (isset($_GET['id_SP'])) {
                    $id_SP = $_GET['id_SP'];
                } else {
                    $id_SP = $_POST['id_SP'];
                }
                $listimg = loadall_img_id($id_SP);
                $sp = loadOne_sanpham($id_SP);
                include "sanpham/listimg.php";
                break;
            }
            if (isset($_GET['id_SP'])) {
                $id_SP = $_GET['id_SP'];
            } else {
                $id_SP = $_POST['id_SP'];
            }
            $listimg = loadall_img_id($id_SP);
            $sp = loadOne_sanpham($id_SP);
            include "sanpham/addimgsp.php";

            break;
        case 'xoaimg':
            if (isset($_GET['id_img']) && ($_GET['id_img'] > 0)) {
                $id_img = $_GET['id_img'];
                delete_img($id_img);
            }
            if (isset($_GET['id_SP'])) {
                $id_SP = $_GET['id_SP'];
            } else {
                $id_SP = $_POST['id_SP'];
            }
            $listimg = loadall_img_id($id_SP);
            include "sanpham/listimg.php";
            break;

        case 'xoasp':
            if (isset($_GET['id_SP']) && ($_GET['id_SP'] > 0)) {
                delete_sanpham($_GET['id_SP']);
            }
            $listsp = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id_SP']) && ($_GET['id_SP'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id_SP']);
            }
            $listdm = loadall_danhmuc();
            $listth = loadall_thuonghieu();
            $listimg = load_img_id();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_SP = $_POST['id_SP'];
                $giamgia = $_POST['giamgia'];
                $hot = isset($_POST['hot']) ? $_POST['hot'] : 0;
                $so_luong = $_POST['so_luong'];
                $id_thuonghieu = $_POST['id_thuonghieu'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $motangan = $_POST['motangan'];

                // Tiếp tục với đoạn mã cập nhật sản phẩm
                $Ten_hanghoa = $_POST['Ten_hanghoa'];
                $don_gia = $_POST['don_gia'];
                $motadai = $_POST['motadai'];
                // upload file hình cần bổ sung
                $old_image_sp = isset($_POST["old_image_sp"]) ? $_POST["old_image_sp"] : "";
                // upload file hình cần bổ sung
                if (isset($_FILES['image_sp']) && $_FILES['image_sp']['error'] === UPLOAD_ERR_OK) {
                    // Tệp mới đã được tải lên, lưu vào thư mục upload và cập nhật đường dẫn mới
                    $new_image_path = "../upload/" . $_FILES['image_sp']['name'];
                    move_uploaded_file($_FILES['image_sp']['tmp_name'], $new_image_path);
                    $image_sp = $new_image_path;
                } else {
                    // Không có tệp mới được tải lên, giữ lại hình ảnh cũ
                    $image_sp = $old_image_sp;
                }
                update_sanpham($id_SP, $Ten_hanghoa, $don_gia, $giamgia, $hot, $so_luong, $id_thuonghieu, $id_danhmuc, $motangan, $image_sp, $motadai);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = loadall_danhmuc();
            $listth = loadall_thuonghieu();
            $listsp = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        // khách hàng
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                delete_taikhoan($_GET['id_user']);
            }
            // $sql= "select * from taikhoan order by name";
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'suatk';
            // trường (field) id ở đây trong bảng user mình thiết lập A.I (auto increment)
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id_user']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/update.php";
            break;
        case 'updatetk';
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_user = $_POST['ten_user'];
                $Mat_khau = $_POST['Mat_khau'];
                $email = $_POST['email'];
                $sdt = $_POST['dienthoai'];
                $diachi = $_POST['diachi'];
                $id_user = $_POST['id_user'];
                // Cập nhật tài khoản
                update_user($id_user, $ten_user, $Mat_khau, $email, $diachi, $sdt);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: http://localhost:3000/index.php');
            break;
        case 'listbill':
            $listbill = loadall_bill(0);
            include "bill/listbill.php";
            break;
        case 'ctdh';
            if (isset($_POST['ctdh']) && ($_POST['ctdh'])) {
                $id_HD = $_POST['id_HD'];
                $bills = loadone_hoadons($id_HD);
                $listbill = loadall_cthd($id_HD);
                include 'bill/ctdh.php';
                break;
            }
        case 'xoadh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_donhang($_GET['id']);
            }
            $listbill = loadall_bill(0);
            include "bill/listbill.php";
            break;
        case 'listcomment':
            include "comment/listcomment.php";
            break;
        case 'deletecmt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $delete_comment = deletecomment_blog($_GET['id']);
            }
            include "comment/listcomment.php";
            break;
        default:
            include "dashboard.php";
            break;
    }
} else {
    include "dashboard.php";
}
include "footer.php";