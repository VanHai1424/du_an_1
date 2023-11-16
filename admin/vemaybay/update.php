<?php 
    if(is_array($vmb)) {
        extract($vmb);
    }
?>
<div class="rowheader">
    <h1>Sửa vé máy bay</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="index.php?act=suavmb" method="POST" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">Giá vé</label>
        </div>
        <input name="giave" value="<?= $gia_ve; ?>" class="" type="number">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Loại vé</label>
        </div>
        <select name="loaive" id="" class="">
            <option value="1" <?= ($loai_ve == 1) ? "selected" : "";?>>Phổ thông</option>
            <option value="2" <?= ($loai_ve == 2) ? "selected" : "";?>>Thương gia</option>
        </select>
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">ID chuyến bay</label>
        </div>
        <select name="idchuyenbay" id="" class="">
            <?php 
                foreach ($listChuyenBay as $value) {
                    
                    echo '<option ' . (($value['id'] == $id_chuyen_bay) ? 'selected' : '') . ' value="' . $value['id'] . '">' . $value['id'] . '</option>';
                }
            ?>

        </select>
        <span class=""></span>
        <br>

        <div class="but">
            <input type="hidden" name="id" value="<?= $id;?>">
            <input type="submit" name="capnhat" value="Cập nhật" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="./index.php?act=listvmb" class=""><input type="button" value="Danh sách"></a>
        </div>
        <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
    </form>
</div>