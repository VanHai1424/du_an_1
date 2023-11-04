<div class="rowheader">
    <h1>Sửa USER</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="./index.php?act=update_kh" method="post" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">Họ và tên</label>
        </div>
        <input name="fullname" value="" class="" type="text">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Email</label>
        </div>
        <input name="email" value="" class="" type="email">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Mật khẩu</label>
        </div>
        <input name="password" value="" class="" type="text">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Hình ảnh</label>
        </div>
        <img src="" alt="anh lôi" class="" style="width:50px;height:50px;">
        <input type="hidden" name="img" value="">
        <input name="anh" class="" type="file">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Địa chỉ</label>
        </div>
        <input name="location" value="" class="" type="text">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Quyền truy cập</label>
        </div>
        <select name="role" id="" class="">
            <option value="user">Người dùng</option>
            <option value="admin">Quản trị</option>
        </select>
        <span class=""></span>
        <br>
        <br>
        <div class="but">
            <input type="hidden" name="ma_us" value="">
            <input type="submit" name="capnhat" value="Cập nhật" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="./index.php?act=kh" class=""><input type="button" value="Danh sách"></a>
        </div>

    </form>
</div>