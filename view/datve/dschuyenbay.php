<!-- content -->
<div class="content">
    <!-- Tickets -->
    <div id="tickets" class="tickets">
        <h1><?= (isset($mess)) ? $mess : "Danh Sách Chuyến Bay";?></h1>
        <div class="tickets-content">
            <div class="tikets-buy">
                <div class="row-item">
                    <?php
                    $i = 1;
                    foreach ($listCb as $value) {
                        extract($value);
                    ?>
                        <div class="item">
                            <img src="upload/<?= $img_den ?>" alt="ảnh lỗi">
                            <div class="item-text">
                                <h3><?= $diem_di ?> đến <?= $diem_den ?></h3>
                                <p class="date">Ngày đi: <?= date('d/m/Y', strtotime($ngay_khoi_hanh)) ?></p>
                            </div>
                            <a href="<?= (isset($_SESSION['user']) ? "index.php?act=datve&id=$id" : "index.php?act=dangnhap") ?>" class="btn-buy">Đặt Vé</a>
                        </div>
                        <?php if ($i % 4 == 0) { ?>
                </div>
                <div class="row-item">
            <?php }
                        $i++;
                    }
            ?>
                </div>
            </div>
        </div>
    </div>
</div>