<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">DANH SÁCH BÌNH LUẬN</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered table-info">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Nội Dung Bình Luận</th>
                    <th>Tên Người Bình Luận</th>
                    <th>Ngày Bình Luận</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $showcomment = showcomment_admin();
                    foreach($showcomment as $binhluan) {
                        // print_r($comment);
                        // echo $comment[6];
                        $xoa_comment = "index.php?act=deletecmt&id=" . $binhluan['id_binhluan'];
                        echo '
                            <tr>
                                
                                <td>'.$binhluan['id_binhluan'].'</td>
                                <td>'.$binhluan['6'].'</td>
                                <td>'.$binhluan['noidung_Bl'].'</td>
                                <td>'.$binhluan['ten_user'].'</td>
                                <td>'.$binhluan['ngaybinhluan'].'</td>
                                <td><a href="'.$xoa_comment.'"><input type="button" value="Xóa" class="btn btn-warning"></a></td>
                            </tr>
                        ';
                    }
                ?>
            </tbody>
        </table> 
    </div>            