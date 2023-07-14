<?php 
include 'trangchu/header.php';
include 'trangchu/home.php';
include 'trangchu/foodter.php';
include 'model/pdo.php';


if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}


$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dsview = loadAll_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
};
?>