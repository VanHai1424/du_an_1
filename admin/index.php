<?php 
    if(isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        switch($act) {
            case 'home':
                include 'header.php';
                include 'home.php';
                break;
            case 'listkh':
                include 'header.php';
                include 'khachhang/list.php';
                break;
            case 'addkh':
                include 'header.php';
                include 'khachhang/add.php';
                break;
            case 'updatekh':
                include 'header.php';
                include 'khachhang/update.php';
                break;
            case 'bieudo':
                include 'header.php';
                include 'bieudo.php';
                break;
            default:
                include 'header.php';
                include 'login/dangnhap.php';
                break;
        }
    } else {
        include 'login/dangnhap.php';
    }
    include 'footer.php';
?>
