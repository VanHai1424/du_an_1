<?php 
    include 'header.php';
    if(isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        switch($act) {
            case 'list':
                include 'list.php';
                break;
            case 'add':
                include 'add.php';
                break;
            case 'update':
                include 'update.php';
                break;
            case 'bieudo':
                include 'bieudo.php';
                break;
        }
    } else {
        include 'list.php';
    }
    include 'footer.php';

?>