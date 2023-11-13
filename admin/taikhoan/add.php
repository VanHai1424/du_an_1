<div class="rowheader">
    <h1>Thêm tài khoản</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="./index.php?act=addtk" method="post" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">User</label>
        </div>
        <input name="user" value="" class="" type="text">
        <br>
        <div class="content-text">
            <label for="">Email</label>
        </div>
        <input name="email" value="" class="" type="email">
        <br>
        <div class="content-text">
            <label for="">Mật khẩu</label>
        </div>
        <input name="pass" value="" class="" type="password">
        <br>
        <div class="content-text">
            <label for="">Quyền truy cập</label>
        </div>
        <select name="role" id="" class="">
            <option value="1">Người dùng</option>
            <option value="0">Quản trị</option>
        </select>
        <br>
        <div class="but">
            <input type="submit" name="submit" value="Thêm Mới" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="index.php?act=listtk" class=""><input type="button" value="Danh sách"></a>

        </div>
        <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
    </form> 
    
</div>