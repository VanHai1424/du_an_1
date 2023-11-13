<?php 
    if(is_array($tk)) {
        extract($tk);
    }
?>
<div class="rowheader">
    <h1>Sửa tài khoản</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="index.php?act=suatk" method="POST" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">User</label>
        </div>
        <input name="user" value="<?= $user; ?>" class="" type="text">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Email</label>
        </div>
        <input name="email" value="<?= $email; ?>" class="" type="email">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Mật khẩu</label>
        </div>
        <input name="pass" value="<?= $pass; ?>" class="" type="text">
        <br>
        <div class="content-text">
            <label for="">Quyền truy cập</label>
        </div>
        <select name="role" id="" class="">
            <option value="1" <?= ($role == 1) ? "selected" : "";?>>Người dùng</option>
            <option value="0" <?= ($role == 0) ? "selected" : "";?>>Quản trị</option>
        </select>
        <span class=""></span>
        <br>
        <div class="but">
            <input type="hidden" name="id" value="<?= $id;?>">
            <input type="submit" name="capnhat" value="Cập nhật" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="./index.php?act=listtk" class=""><input type="button" value="Danh sách"></a>
        </div>
        <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
    </form>
</div>