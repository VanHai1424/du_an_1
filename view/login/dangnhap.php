<div class="content2">
    <div class="form-register2">
        <form action="index.php?act=dangnhap" class="form-login" method="POST">
            <h2>Đăng Nhập</h2>
            <div class="row-input">
                <i class="fa-solid fa-user"></i>
                <input placeholder="Tên đăng nhập" name="user" type="text" class="o-input">
                <p class="content2-text"></p>
            </div>
            <div class="row-input">
                <i class="fa-solid fa-lock"></i>
                <input placeholder="Mật khẩu" name="pass" type="password" class="o-input">
                <p class="content2-text"></p>
            </div>
            <div class="row-input">
                <a href="index.php?act=dangky">Đăng ký tài khoản</a>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </div>
            <p style="color: red; text-align: center; margin: 4px 0;"><?= (isset($loginMess) && $loginMess!= "") ? $loginMess : '';?></p>
            <button type="submit" name="submit" class="form-login-btn">Đăng Nhập</button>
        </form>
    </div>

</div>