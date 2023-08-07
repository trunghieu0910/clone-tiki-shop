<?php
function insert_thuonghieu($Ten_thuonghieu, $img_thuonghieu)
{
    $sql = "insert into thuonghieu(Ten_thuonghieu, img_thuonghieu) value ('$Ten_thuonghieu', '$img_thuonghieu')";
    pdo_execute($sql);
}
function delete_thuonghieu($id_thuonghieu) {
    // Xóa các hàng con trong bảng "sanpham" liên kết với "id_thuonghieu" trong bảng "thuonghieu"
    $sql_delete_sanpham = "DELETE FROM sanpham WHERE id_thuonghieu = " . $id_thuonghieu;
    pdo_execute($sql_delete_sanpham);

    // Xóa hàng từ bảng "thuonghieu" sau khi không còn liên kết với bất kỳ hàng con nào
    $sql_delete_thuonghieu = "DELETE FROM thuonghieu WHERE id_thuonghieu = " . $id_thuonghieu;
    pdo_execute($sql_delete_thuonghieu);
}

function loadall_thuonghieu()
{
    $sql = "select * from thuonghieu order by id_thuonghieu desc";
    $listth = pdo_query($sql);
    return $listth;
}
function loadone_thuonghieu($id_thuonghieu)
{
    $sql = "select * from thuonghieu where id_thuonghieu=" . $id_thuonghieu;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_thuonghieu($id_thuonghieu, $Ten_thuonghieu, $img_thuonghieu)
{
    $sql = "UPDATE thuonghieu SET Ten_thuonghieu='" . $Ten_thuonghieu . "', img_thuonghieu='" . $img_thuonghieu . "' WHERE id_thuonghieu=" . $id_thuonghieu;
    pdo_execute($sql);
}