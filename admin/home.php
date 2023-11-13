<?php 
    if(isset($_SESSION['admin'])) {
        echo '<h1>Xin chào '.$_SESSION['admin'].'</h1>';
        echo '<a href="index.php?act=dangxuat">Đăng xuất</a>';
    }
?>