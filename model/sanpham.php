<?php
function insert_sanpham($soluotxem, $soluongban, $Ten_hanghoa, $don_gia, $giamgia, $hot, $ngaynhap, $so_luong, $id_thuonghieu, $id_danhmuc, $motangan, $motadai, $image_sp)
{
    $sql = "insert into sanpham(soluotxem, soluongban, Ten_hanghoa,don_gia,giamgia,hot,ngaynhap,so_luong,id_thuonghieu,id_danhmuc,motangan,motadai,image_sp) value ('($soluotxem','$soluongban','$Ten_hanghoa','$don_gia','$giamgia','$hot','$ngaynhap','$so_luong','$id_thuonghieu','$id_danhmuc','$motangan','$motadai','$image_sp')";
    pdo_execute($sql);
}

function insert_imgsp($id_SP, $duong_dan_anh)
{
    $sql = "INSERT INTO img_sp (id_SP, duong_dan_anh) VALUES ('$id_SP', '$duong_dan_anh')";
    pdo_execute($sql);
}
function delete_sanpham($id_SP)
{
    $sql = "delete from sanpham where id_SP=" . $id_SP;
    pdo_execute($sql);
}
function delete_img($id_img)
{
    $sql = "delete from img_sp where id_img=" . $id_img;
    pdo_execute($sql);
}
function loadall_sanpham($Ten_hanghoa, $id_danhmuc)
{
    $sql = "select * from sanpham where 1";
    if ($Ten_hanghoa != "") {
        $sql .= " and Ten_hanghoa like '%" . $Ten_hanghoa . "%'";
    }
    if ($id_danhmuc > 0) {
        $sql .= " and id_danhmuc='" . $id_danhmuc . "'";
    }
    $sql .= " order by id_danhmuc desc limit 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}

function load_sanpham()
{
    $sql = "select * from sanpham";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id_SP desc limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sanpham_home1()
{
    $sql = "select * from sanpham where 1 order by id_SP asc limit 0,10";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadOne_sanpham($id_SP) {
    $sql = "SELECT * FROM sanpham WHERE id_SP=" . $id_SP;
    $sp = pdo_query_one($sql);
    return $sp;
}

function loaall1_sanpham()
{
    $sql = "SELECT *
            FROM sanpham
            LEFT JOIN img_sp ON img_sp.id_SP = sanpham.id_SP
            WHERE sanpham.id_SP = :id_SP";
    $sp = pdo_query_sp($sql);
    return $sp;
}


function update_sanpham($id_SP, $Ten_hanghoa, $don_gia, $giamgia, $hot, $so_luong, $id_thuonghieu, $id_danhmuc, $motangan,$image_sp, $motadai)
{
    $sql = "UPDATE sanpham 
            SET sanpham.Ten_hanghoa = :Ten_hanghoa,
                sanpham.don_gia = :don_gia,
                sanpham.giamgia = :giamgia,
                sanpham.hot = :hot,
                sanpham.so_luong = :so_luong,
                sanpham.id_thuonghieu = :id_thuonghieu,
                sanpham.id_danhmuc = :id_danhmuc,
                sanpham.motangan = :motangan,
                sanpham.image_sp = :image_sp,
                sanpham.motadai = :motadai
            WHERE sanpham.id_SP = :id_SP";

    $params = array(
        ':Ten_hanghoa' => $Ten_hanghoa,
        ':don_gia' => $don_gia,
        ':giamgia' => $giamgia,
        ':hot' => $hot,
        ':so_luong' => $so_luong,
        ':id_thuonghieu' => $id_thuonghieu,
        ':id_danhmuc' => $id_danhmuc,
        ':motangan' => $motangan,
        ':image_sp' => $image_sp,
        ':motadai' => $motadai,
        ':id_SP' => $id_SP, // Thêm tham số cho id_SP
    );

    pdo_execute_sp($sql, $params);
}


function load_sanpham_cungloai($id_SP, $id_danhmuc)
{
    // $sql="select * from sanpham where id_cate ='.$iddanhmuc.' and id <>".$id;
    // $listsp = pdo_query($sql);
    $sql = "select * from sanpham where id_SP <>" . $id_SP . " and id_danhmuc ='.$id_danhmuc.' LIMIT 4";
    $spcungloais = pdo_query($sql);
    return $spcungloais;
}
function load_ten_dm($id_danhmuc)
{
    $sql = "select * from danhmuc where id_danhmuc=" . $id_danhmuc;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $Ten_danhmuc;
}


function loadall_sanpham_phantrang()
{
    $page = isset($_GET['page']) ? $_GET['page'] : "1";
    $sl = 6;
    $offset = ($page - 1) * $sl;
    $sql = "SELECT * FROM sanpham LIMIT $sl OFFSET $offset";
    $listsp = pdo_query($sql);
    return $listsp;
}

function nut_phantrang()
{
    $sql = "SELECT * FROM sanpham";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_img($id_SP)
{
    $sql = "SELECT * FROM sanpham
        WHERE id_SP= '$id_SP'";
    $img = pdo_query($sql);
    return $img;
}

function loadall_img_id($id_SP)
{
    $sql = "SELECT * FROM img_sp
        WHERE id_SP= '$id_SP'";
    $img = pdo_query($sql);
    return $img;
}

function loadalls_img_id($id_img)
{
    $sql = "SELECT * FROM img_sp
        WHERE id_img= '$id_img'";
    $img = pdo_query($sql);
    return $img;
}
function load_img_id()
{
    $sql = "SELECT * FROM img_sp
        JOIN sanpham ON img_sp.id_SP = sanpham.id_SP";
    $img = pdo_query($sql);
    return $img;
}
function loadall_sanpham1($kyw="",$iddm=24){
    $sql="select * from product where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and id_cate='".$iddm."'";
    }
    $sql.=" order by id desc limit 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}
?>