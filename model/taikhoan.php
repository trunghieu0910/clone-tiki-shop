<?php
function insert_user($ten_user, $Mat_khau, $email) {
    $sql = "INSERT INTO user (ten_user, Mat_khau, email) VALUES ('$ten_user', '$Mat_khau', '$email')";
    pdo_execute($sql);
}

function loadone_user($id_user) {
    $sql = "SELECT * FROM user WHERE id_user = '$id_user'";
 $kttk = pdo_query_one($sql);
 return $kttk;
}


function check_user($ten_user) {
    // You need to establish a database connection first using PDO before executing this query.
    $sql = "SELECT * FROM user WHERE ten_user = :username";
    $params = array(':username' => $ten_user);
    $result = pdo_query_one1( $sql,$params);
    return $result;
}
function checkid_user($ten_user, $Mat_khau) {
    $sql = "SELECT * FROM user WHERE ten_user = '$ten_user' AND Mat_khau = '$Mat_khau'";
    return pdo_query_one($sql);
}
function update_user($id_user, $ten_user, $Mat_khau, $email, $img) {
    $sql = "UPDATE user SET ten_user='$ten_user', email='$email', Mat_khau='$Mat_khau', img ='$img' WHERE id_user='$id_user'";
    pdo_execute($sql);
}      
    
?>