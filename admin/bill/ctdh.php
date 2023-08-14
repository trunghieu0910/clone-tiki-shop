<!-- Cart Start -->
<div class="container-fluid">
        <div class="row px-xl-5">
            <h5 class="section-title position-relative text-uppercase mb-3">Thông tin đơn hàng</h5>
            <?php
                // if(isset($bills)&&(is_array($bills))){
                //     extract($bills);
                // }
            ?>
            <div class="col-lg-12 table-responsive mb-5">
                
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <?php
                        if(isset($bills) && is_array($bills)){
                            // extract($bills);
                            $pttt='';
                            if($bills['pttt']==1) {
                                $pttt = "Chuyển khoản";
                            }elseif($bills['pttt']==2){
                                $pttt = "Quét mã QR";
                            }elseif($bills['pttt']==3){
                                $pttt = "Xu tiki";
                            }else{
                                $pttt = "Tiền mặt";
                            }
                            echo '
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Tổng giá trị đơn hàng</th>
                                        <th>Phương thức thanh toán</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td class="align-middle">'.$bills['id_HD'].'</td>
                                    <td class="align-middle">'.$bills['Ngay'].'</td>
                                    <td class="align-middle">$'.$bills['Tongtien'].'</td>
                                    <td class="align-middle">'.$pttt.'</td>
                                </tr>
                            ';
                        }
                    ?>
                </table>
            </div>
            <div class="col-lg-12 table-responsive mb-5">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông tin người đặt hàng</span></h5>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <tr>
                        <td>Người đặt hàng:</td>
                        <td><?=$bills['ten_user'];?></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại:</td>
                        <td><?=$bills['dienthoai'];?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?=$bills['email'];?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td><?=$bills['diachi'];?></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-12 table-responsive mb-5">
                <h5 class="section-title position-relative text-uppercase mb-3">Chi tiết đơn hàng </h5>
<table class="table table-light table-borderless table-hover text-center mb-0">
                    <?php
                        bill_chitiet($listbill);
                    ?>
                </table>
            </div>
            <!-- <div class="col-lg-12">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Your Decision</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="pt-2">
                        <input type="submit" class="btn btn-block btn-success font-weight-bold my-3 py-3" value="Đồng ý đặt hàng" name="dongydathang">
                    </div>
                </div>
            </div> -->
            
        </div>
    
    
</div>

<!-- Cart End -->