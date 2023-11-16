<?php 
    if(is_array($cb)) {
        extract($cb);
    }
?>
<div class="rowheader">
    <h1>Sửa chuyến bay</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="./index.php?act=suacb" method="post" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">Tên máy bay</label>
        </div>
        <input name="name" value="<?= $ten_may_bay; ?>" class="" type="text">
        <br>
        <br>
        <div class="content-text">
            <label for="">Điểm đi</label>
        </div>
        <select name="diemdi" id="" class="">
            <?php 
                foreach ($listDiaDiem as $value) {
                    echo '<option ' . (($value['id'] == $id_diemDi) ? 'selected' : '') . ' value="' . $value['id'] . '">' . $value['ten'] . '</option>';
                }
            ?>

        </select>
        <br>
        <br>
        <div class="content-text">
            <label for="">Điểm đến</label>
        </div>
        <select name="diemden" id="" class="">
            <?php 
                foreach ($listDiaDiem as $value) {
                    echo '<option ' . (($value['id'] == $id_diemDen) ? 'selected' : '') . ' value="' . $value['id'] . '">' . $value['ten'] . '</option>';
                }
            ?>
        </select>
        <br>
        <br>
        <div class="content-text">
            <label for="">Ngày khởi hành</label>
        </div>
        <input name="ngay_kh" value="<?= $ngay_khoi_hanh ?>" class="" type="date" min="<?= date('Y-m-d'); ?>">
        <br>
        <br>
        <div class="content-text">
            <label for="">Thời gian đi</label>
        </div>
        <input name="thoi_gian_di" value="<?= $thoi_gian_di; ?>" class="" type="datetime-local" min="<?= date('Y-m-d\TH:i'); ?>">
        <br>
        <br>
        <div class="content-text">
            <label for="">Thời gian đến</label>
        </div>
        <input name="thoi_gian_den" value="<?= $thoi_gian_den; ?>" class="" type="datetime-local" min="<?= date('Y-m-d\TH:i'); ?>">
        <br>
        <br>
        <div class="content-text">
            <label for="">Trạng thái</label>
        </div>
        <input name="trang_thai" value="<?= $trang_thai;?>" class="" type="text">
        <br>
        <br>
        <div class="but">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <input type="submit" name="capnhat" value="Cập nhật" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="index.php?act=listcb" class=""><input type="button" value="Danh sách"></a>

        </div>
        <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
    </form> 
    
</div>