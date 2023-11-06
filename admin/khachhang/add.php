<div class="rowheader">
    <h1>Thêm khách hàng</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="./index.php?act=add_kh" method="post" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">User</label>
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
        <input name="password" value="" class="" type="password">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Hình ảnh</label>
        </div>
        <input name="img" class="" type="file">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Địa chỉ</label>
        </div>
        <input name="location" value="" class="" type="text">
        <span class=""></span>
        <br>
        <div class="content-text">
            <label for="">Số điện thoại</label>
        </div>
        <input name="tel" value="" class="" type="text">
        <span class=""></span>
        <br>

        <div class="content-text">
            <label for="">Quyền truy cập</label>
        </div>
        <select name="role" id="" class="">
            <option value="user">Người dùng</option>
            <option value="admin">Quản trị</option>
        </select>
        <span class=" "></span>
        <br>
        <br>
        <div class="but">
            <input type="submit" name="them" value="Thêm Mới" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="index.php?act=listkh" class=""><input type="button" value="Danh sách"></a>

        </div>

    </form>
</div>