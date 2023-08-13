<?php
include "model/pdo.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_comment'])) {
    $product_id = $_POST['id_SP'];
    $user_id = $_POST['id_user'];
    $comment_text = $_POST['comment_text'];

    $sql = "INSERT INTO binhluan (id_SP, id_user, ngaybinhluan, noidung_Bl) VALUES (:id_SP, :id_user, NOW(), :comment_text)";
   
    // Tạo đối tượng PDOStatement bằng phương thức prepare
    $stmt = pdo_get_connection()->prepare($sql);

    // Sử dụng bindParam để gắn giá trị vào biến tham số
    $stmt->bindParam(":id_SP", $product_id, PDO::PARAM_INT);
    $stmt->bindParam(":id_user", $user_id, PDO::PARAM_INT);
    $stmt->bindParam(":comment_text", $comment_text, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "Bình luận đã được gửi thành công.";
    } else {
        echo "Lỗi: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
}
?>
