<?php 
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "global.php";
$spnew=loadall_sanpham_home();
$htdm=loadall_danhmuc();
$sp1=loadall_sanpham_home1();
include "tiki/home.php";
include "tiki/header.php";
include "tiki/foodter.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamchitiet':
         include  "tiki/chitietsp.php";
           break;



    }
} else {
    
}





?>