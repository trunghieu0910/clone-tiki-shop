<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "global.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {



        case 'sanphamchitiet':
            if (isset($_GET['id_SP']) && (isset($_SESSION['ten_user']))) {
                $id_SP = $_GET['id_SP'];
                $onesp = loadone_sanpham($id_SP);
                $loadbinhluan = loadall_binhluan($id_SP);
                $loadimg = loadall_img_id($id_SP);
                include "tiki/chitietsp.php";
            } else {
                header('Location: tiki/taikhoan/dangky.php');
            }
            break;
        case 'guibinhluan':
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $id_user = $_POST['id_user'];
                $id_SP = $_POST['id_SP'];
                $noidung_Bl = $_POST['noidung'];
                $ngaybinhluan = '2023-08-13';
                insert_binhluan($noidung_Bl,$id_user,$id_SP,$ngaybinhluan);
                $onesp = loadone_sanpham($id_SP);
                $loadbinhluan = loadall_binhluan($id_SP);
                // print('Cảm ơn bạn đã góp ý!');
                header('Location: chitietsp1.php?act=sanphamchitiet&id_SP='.$id_SP.'');
                break;
            }


    }
} else {

}





?>