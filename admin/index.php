<?php 
    include 'header.php';
    if(isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        switch($act) {
            case 'listkh':
                include 'khachhang/list.php';
                break;
            case 'addkh':
                include 'khachhang/add.php';
                break;
            case 'updatekh':
                include 'khachhang/update.php';
                break;
            case 'bieudo':
                include 'bieudo.php';
                break;
        }
    } else {
        include 'home.php';
    }
    include 'footer.php';

?>