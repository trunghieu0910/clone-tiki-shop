<?php
    function viewhoadon($del) {
        global $img_path;
        $tong = 0;
        $i = 0;
        if($del==1) {
            $xoasp_th= '<th>Remove</th>';
        }else{
            $xoasp_th= "";
        }
        echo '
            <thead class="thead-dark">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    '.$xoasp_th.' 
                </tr>
            </thead>
        ';

        foreach($_SESSION['myhoadon'] as $hoadon) {
            $hinh = $img_path.$hoadon[2];
            $ttien = $hoadon[3]*$hoadon[4];
            $tong += $ttien;
            if($del==1) {
                $xoasp_td= '<td class="align-middle table-primary border border-primary"><a href="index.php?act=delhoadon&idhoadon='.$i.'"><input type="button" class="btn btn-sm btn-danger" value="Xóa"></a></td>';
            }else{
                $xoasp_td= "";
            }
            echo '
                
                <tr>
                    <td class="align-middle table-primary border border-primary"><img src="'.$hinh.'" alt="" style="width: 50px;"> '.$hoadon[1].'</td>
                    <td class="align-middle table-primary border border-primary">$'.$hoadon[3].'</td>
                    <td class="align-middle table-primary border border-primary">
                        <div class="input-group quantity mx-auto" style="width: 100px;">
                            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="'.$hoadon[4].'">
                        </div>
                    </td>
                    <td class="align-middle table-primary border border-primary">$'.$ttien.'</td>
                    '.$xoasp_td.'
                    
                </tr>
            ';
            $i += 1;        
        }
        echo '
            <tr>
                <td colspan="3" class="align-middle table-primary border border-primary">Tổng đơn hàng</td>
                <td colspan="2" class="align-middle table-primary border border-primary">'.$tong.'</td>
            </tr>
        ';
    }
    
    
    function tongdonhang() {
        $tong = 0;
        foreach($_SESSION['myhoadon'] as $hoadon) {
            
            $ttien = $hoadon[3]*$hoadon[4];
            $tong += $ttien;
         
        }
        return $tong;
        
    }

    function insert_donhang($id_HD,$ten_user,$diachi,$dienthoai,$email,$Ngay,$Tongtien) {
        $sql = "insert into hoadon join chitiethoadon on chitiethoadon.id_user = hoadon.id_user (id_HD,ten_user,diachi,dienthoai,email,Ngay,Tongtien) values('$id_HD','$ten_user','$diachi','$dienthoai','$email','$Ngay','$Tongtien')";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_hoadon($id_SP,$image_sp,$Ten_hanghoa,$dongia,$soluong,$thanh_tien,$id_HDchitiet ) {
$sql = "insert into hoadonchitiet (idpro,img,name,price,soluong,thanhtien,idbill) values('$id_SP','$image_sp','$Ten_hanghoa','$dongia','$soluong','$thanh_tien','$id_HDchitiet')";
        pdo_execute($sql);
    }

    function loadone_cthd($id_HDchitiet) {
        $sql = "select * from chitiethoadon where id_HDchitiet=".$id_HDchitiet;
        $bill=pdo_query_one($sql);
        return $bill;
    }

    function loadall_hoadon($id_HDchitiet) {
        $sql = "select * from hoadon where id_HDchitiet=".$id_HDchitiet;
        $bill=pdo_query($sql);
        return $bill;
    }

    function loadall_bill($id_user) {

        $sql = "select * from hoadon where 1";
        if($id_user >0) $sql.=" AND id_user=".$id_user;
        $sql.=" order by id_user desc";

        $listbill=pdo_query($sql);
        return $listbill;
    }
    function delete_bill($id_HD){
        $sql = "delete  from hoadon where id_HD=".$id_HD;
        pdo_execute($sql);
    }

    function loadall_showbill() {
        $sql = "select * from hoadon";
        $listbill=pdo_query($sql);
        return $listbill;
    }

    function tong() {
        $sql = 'SELECT SUM(Tongtien) FROM `hoadon`';
        $tongdtdk=pdo_query_value($sql);
        return $tongdtdk;
    }

   

    function bill_chitiet($listbill) {
        global $img_path;
        $tong = 0;
        $i = 0;
        echo '
            <thead class="thead-dark">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
        ';

        foreach($listbill as $hoadon) {
            $hinh = $img_path.$hoadon['img'];
            $tong += $hoadon['thanhtien'];
            
            echo '
                <tr>
                    <td class="align-middle table-primary border border-primary"><img src="'.$hinh.'" alt="" style="width: 50px;"> '.$hoadon['name'].'</td>
                    <td class="align-middle table-primary border border-primary">$'.$hoadon['price'].'</td>
                    <td class="align-middle table-primary border border-primary">'.$hoadon['soluong'].'</td>
                    <td class="align-middle table-primary border border-primary">$'.$hoadon['thanhtien'].'</td>
                </tr>
            ';
            $i += 1;        
        }
        echo '
            <tr>
                <td colspan="3" class="align-middle table-primary border border-primary">Tổng đơn hàng</td>
                <td class="align-middle table-primary border border-primary">$'.$tong.'</td>
            </tr>
        ';
    }

    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt='Đơn hàng mới';
                break;
            case '1':
                $tt='Đang xử lý';
                break;
            case '2':
                $tt='Đang giao hàng';
                break;
            case '3':
$tt='Đã giao hàng';
                break;
            default:
                $tt='Đơn hàng mới';
                break;
        }
        return $tt;
    }

    function get_pttt($n){
        switch ($n) {
            case '1':
                $tt='Thanh toán khi nhận hàng';
                break;
            case '2':
                $tt='Chuyển khoản';
                break;
            case '3':
                $tt='Thanh toán online';
                break;
            default:
                $tt='Thanh toán khi nhận hàng';
                break;
        }
        return $tt;
    }

    function loadall_hoadon_count($id_HD) {
        $sql = "select * from hoadon where id_HD=".$id_HD;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }

    function delete_donhang($id_HD) {
        $sql= "delete from hoadon where id_HD=".$id_HD;
        pdo_execute($sql);
    }    
?>