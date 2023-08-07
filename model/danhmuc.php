<?php
function insert_danhmuc($Ten_danhmuc, $image_dm) {
    $sql = "insert into danhmuc(Ten_danhmuc, image_dm) value ('$Ten_danhmuc', '$image_dm')";
    pdo_execute($sql);
}
function delete_danhmuc($id_danhmuc) {
    // Xóa các hàng con trong bảng "sanpham" liên kết với "id_danhmuc" trong bảng "danhmuc"
    $sql_delete_sanpham = "DELETE FROM sanpham WHERE id_danhmuc = " . $id_danhmuc;
    pdo_execute($sql_delete_sanpham);

    // Xóa hàng từ bảng "danhmuc" sau khi không còn liên kết với bất kỳ hàng con nào
    $sql_delete_danhmuc = "DELETE FROM danhmuc WHERE id_danhmuc = " . $id_danhmuc;
    pdo_execute($sql_delete_danhmuc);
}

function loadall_danhmuc() {
    $sql="select * from danhmuc order by id_danhmuc desc";
    $listdm = pdo_query($sql);
    return $listdm;
}
function loadone_danhmuc($id_danhmuc) {
    $sql = "select * from danhmuc where id_danhmuc=" . $id_danhmuc;
    $danhmuc=pdo_query_one($sql);
    return $danhmuc;
}
function update_danhmuc($id_danhmuc,$Ten_danhmuc, $image_dm) {
    $sql = "update danhmuc set Ten_danhmuc='".$Ten_danhmuc."', image_dm='".$image_dm."' where id_danhmuc=" . $id_danhmuc;
    pdo_execute($sql);
}
?>