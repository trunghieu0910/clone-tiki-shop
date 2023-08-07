<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">DANH SÁCH THƯƠNG HIỆU</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered table-info">
            <thead>
                <tr>
                    <th>MÃ THƯƠNG HIỆU</th>
                    <th>TÊN THƯƠNG HIỆU</th>
                    <th>ẢNH</th>    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Coi kĩ lại foreach()
                    foreach($listth as $thuonghieu) {
                        extract($thuonghieu);
                        $suath = "index.php?act=suath&id_thuonghieu=".$id_thuonghieu;
                        $xoath = "index.php?act=xoath&id_thuonghieu=".$id_thuonghieu;
                        $hinhpath = '../upload/'.$img_thuonghieu;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height = '100'>";
                        } else {
                            $hinh  = "no photo";
                        }

                        echo '<tr>
                            
                            <td>'.$id_thuonghieu.'</td>
                            <td>'.$Ten_thuonghieu.'</td>
                            <td>'.$hinh.'</td>
                          
                            <td><a href="'.$suath.'"><input type="button" value="Sửa" class="btn btn-success">
                            </a> <a href="'.$xoath.'"><input type="button" value="Xóa" class="btn btn-warning"></a></td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
        <div class="form-group">
            <!-- <input type="button" value="Chọn tất cả" class="btn btn-success" name="themmoi">
            <input type="button" value="Bỏ chọn tất cả" class="btn btn-warning">
            <input type="button" value="Xóa các mục đã chọn" class="btn btn-warning"> -->
            <a href="index.php?act=addth"><input type="button" value="Nhập thêm" class="btn btn-success"></a>
        </div>    
    </div>            