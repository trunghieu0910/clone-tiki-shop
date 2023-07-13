<?php
function insert_danhmuc($tenloai){
    $sql = "insert into danh_muc(ten_danh_muc) values('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id){
    $sql = "delete  from danh_muc where id=".$id;
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql = "select * from danh_muc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql = "select * from danh_muc where id=" .$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql = "update danh_muc set ten_danh_muc='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}

?>