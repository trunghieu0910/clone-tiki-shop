<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'addcart':
            if (isset($_POST['addcart']) && ($_POST['addcart'])) {
                $id_SP = $_POST['id_SP'];
                $Ten_hanghoa = $_POST['Ten_hanghoa'];
                $don_gia = $_POST['don_gia'];
                $image_sp = $_POST['image_sp'];
                $soluong = 1;
                $ttien = $soluong * $don_gia;
                $spadd = [$id_SP, $Ten_hanghoa, $don_gia, $image_sp, $soluong];
                array_push($_SESSION['mycart'], $spadd);
            }
            include 'tiki/cart/cart1.php';
            break;

        case 'dellcart':
            if (isset($_GET['id_cart'])) {
                $index = $_GET['id_cart'];
                unset($_SESSION['mycart'][$index]);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: giohang.php?act=addcart');
            break;

        case 'themsoluong':
            if (isset($_GET['idcart'])) {
                $index = $_GET['idcart'];
                if (isset($_SESSION['mycart'][$index]['so_luong']) && $_SESSION['mycart'][$index]['so_luong'] > 1) {
                    $_SESSION['mycart'][$index]['so_luong'] -= 1;
                }
            } elseif (isset($_GET['dellcart']) && $_GET['dellcart'] === 'all') {
                $_SESSION['mycart'] = [];
            }
            header('Location: giohang.php?act=addcart');
            exit; // Make sure to exit after the header redirect
            break;

            case 'bill':
               
                include 'tiki/cart/bill.php';
                break;



    }
}
?>
