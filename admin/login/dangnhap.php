<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/admin.css">
    <title>Dự án 1</title>
</head>
<body>
    <div class="container">
        <div class="login-body">
            <div class="login-admin">
                <h1>ADMIN</h1>
                <form action="index.php?act=dangnhap" class="login-admin__form" method="POST">
                    <div class="login-admin__row">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" name="user" id=""> 
                    </div>
                    <div class="login-admin__row">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="pass" id="">
                    </div>
                    <input type="submit" name="submit" value="Đăng Nhập"> <br>
                    <p style="color: red; margin: -15px;"><?= (isset($loginMess) && $loginMess!= "") ? $loginMess : '';?></p>
                </form>
            </div>
        </div>
        
    </div>
    <script src="main.js"></script>
</body>
</html>