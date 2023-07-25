<?php
include 'trangchu/header.php';
include 'trangchu/home.php';
include 'trangchu/foodter.php';
include 'BAOSTORE_FINAL/model/danhmuc.php';

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}



$dsdm = loadAll_danhmuc();
?>