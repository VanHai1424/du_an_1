<?php 
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if(is_array($ve)) {
        extract($ve);
    }
?>
<!-- content -->
<div class="bill">
            <div class="bill__header">
                <h2 class="bill__title">HÓA ĐƠN</h2>
            </div>
            <div class="info">
                <div class="row">
                    <p>Hành khách: <span><?= $hoTen ?></span></p> 
                    <p>Giới tính: <span><?= $gioiTinh ?></span></p> 
                    <p>Số điện thoại: <span><?= $sdt ?></span></p> 
                    <p>Địa chỉ: <span><?= $diaChi ?></span></p> 
                </div>
                <div class="row">
                    <p>Chuyến bay: <span><?= $id_chuyen_bay ?></span></p>
                    <span class="from"><?= preg_replace('/\([^)]*\)/', '', $diem_di) ?></span>
                    <i class="fa-solid fa-plane"></i>
                    <span class="to"><?= preg_replace('/\([^)]*\)/', '', $diem_den) ?></span>
                    <p>Tên máy bay: <span><?= $ten_may_bay ?></span></p>
                    <p>Loại vé: <span><?= ($loaiVe == 1) ? "Phổ thông" : "Thương gia" ?></span></p>
                    <p>Mã ghế: <span><?= $maGhe ?></span></p>
                    <p>Khởi hành lúc: <span><?= $thoi_gian_di ?></span></p>
                    <p>Hạ cánh lúc: <span><?= $thoi_gian_den ?></span></p>
                </div>
                <div class="row">
                    Tổng giá vé: <span class="price red"><?= $gia_ve ?> VND</span>
                    <form action="index.php?act=thanhtoan" method="POST">
                        <input type="hidden" name="id_ve" id="" value="<?= $id ?>">
                        <input type="hidden" name="id_user" id="" value="<?= $_SESSION['iduser'] ?>">
                        <input type="hidden" name="ngay_dat" id="" value="<?= date('Y-m-d') ?>">
                        <input type="hidden" name="gio_dat" id="" value="<?= date('Y-m-d H:i:s') ?>">
                        <input type="hidden" name="gia_ve" id="" value="<?= $gia_ve ?>">
                        <input type="hidden" name="ma_ghe" id="" value="<?= $maGhe ?>">
                        <input type="hidden" name="id_chuyen_bay" id="" value="<?= $id_chuyen_bay ?>">
                        <input class="bill_submit" name="submit" type="submit" value="Thanh Toán">
                    </form>
                </div>
            </div>
        </div>