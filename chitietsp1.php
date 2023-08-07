<?php 
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "global.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {



        case 'sanphamchitiet':
if(isset($_GET['id_SP'])&&($_GET['id_SP']>0)){
$id_SP=$_GET['id_SP'];
$onesp=loadone_sanpham($id_SP);
include  "tiki/chitietsp.php";
}else{
    
}
           break;



    }
} else {
    
}





?>