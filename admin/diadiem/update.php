<?php 
    if(is_array($dd)) {
        extract($dd);
    }
    if (is_file('../upload/' . $img)) {
        $hinh = "<img src='" . ('../upload/' . $img) . "' width='100'>";
    } else {
        $hinh = "no photo";
    }
?>
<div class="rowheader">
    <h1>Sửa địa điểm</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="index.php?act=suadd" method="POST" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">Tên địa điểm</label>
        </div>
        <input name="name" value="<?= $ten; ?>" class="" type="text">
        <br>
        <div class="content-text">
            <label for="">Hình</label>
        </div>
        <?= $hinh;?>
        <input name="img" class="" type="file">
        <br>
        <div class="but">
            <input type="hidden" name="id" value="<?= $id;?>">
            <input type="submit" name="capnhat" value="Cập nhật" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="./index.php?act=listdd" class=""><input type="button" value="Danh sách"></a>
        </div>
        <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
    </form>
</div>