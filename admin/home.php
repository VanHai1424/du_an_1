<?php 
    if(isset($_SESSION['user']) && ($_SESSION['role'] == 0)) {
        echo '<h1>Xin chào '.$_SESSION['user'].'</h1>';
        echo '<a href="/FPT/du_an_1/index.php?act=dangxuat">Đăng xuất</a>';
    }
?>