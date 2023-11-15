<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Dự án 1</title>
</head>
<body onload="run()">       
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="index.php">Trang Chủ</a></li>
                    <li class="nav-item"><a href="index.php?act=dscb">Chuyến Bay</a></li>
                    <li class="nav-item"><?= (isset($_SESSION['user']) ? '<a href="index.php?act=dangxuat">Đăng Xuất</a>' : '<a href="index.php?act=dangnhap">Đăng Nhập</a>') ?></li>
                </ul>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        