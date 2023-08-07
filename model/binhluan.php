<?php
    function insert_binhluan($noidung_Bl,$id_user,$id_SP,$ngaybinhluan) {
        $sql = "insert into binhluan (noidung_Bl,id_user,id_SP,ngaybinhluan) values('$noidung_Bl','$id_user','$id_SP','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($id_SP) {
        $sql="select * from binhluan where 1";
        if($id_SP>0) $sql.=" AND id_SP='".$id_SP."'";
        $sql.=" order by id_binhluan desc";
        $listbl = pdo_query($sql);
        return $listbl;
    }
    function delete_binhluan($id_binhluan) {
        $sql = "delete from binhluan where id_binhluan=".$id_binhluan;
        pdo_execute($sql);
    }


    function sentcomment($id_user,$noidung_Bl,$id_SP,$ngaybinhluan){
        $sql = "insert into comment(id_user,id_SP,noidung_Bl,ngaybinhluan) values('$id_user','$id_SP','$noidung_Bl','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function showcomment($id_bl){
        $sql = "SELECT * FROM binhluan
        JOIN sanpham ON binhluan.id_SP = sanpham.id_SP
        JOIN user ON binhluan.id_user = user.id_user 
        WHERE binhluan.id_SP= '$id_bl' ORDER BY ngaybinhluan DESC";
        $showcomment = pdo_query($sql);
        return $showcomment;
    }
    function showcomment_admin(){
        $sql = "SELECT * FROM binhluan
        JOIN sanpham ON binhluan.id_SP = sanpham.id_SP
        JOIN user ON binhluan.id_user = user.id_user 
        ORDER BY ngaybinhluan DESC";
        $showcomment = pdo_query($sql);
        return $showcomment;
    }
    function getprofile($id_user){
        $sql = "SELECT * FROM user WHERE id_user ='$id_user'";
        $showprofile = pdo_query($sql);
        return $showprofile;
    }
    function deletecomment($id_binhluan){
        $sql = "DELETE FROM binhluan WHERE id_binhluan='$id_binhluan'";
        pdo_execute($sql);
    }
    function deletecomment_blog($id_binhluan){
        $sql = "delete from binhluan where id_binhluan='$id_binhluan'";
        pdo_execute($sql);
    }
?>