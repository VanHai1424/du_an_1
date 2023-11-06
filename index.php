<?php 
    include 'view/header.php';
    if(isset($_GET['act']) && ($_GET['act'] != '')){
        $act = $_GET['act'];
        switch ($act) {
            case 'dscb':
                include 'view/datve/dschuyenbay.php';
                break;
            case 'datve':
                include 'view/datve/formdatve.php';
                break;
            case 'datvetc':
                include 'view/datve/datvethanhcong.php';
                break;
            case 'dangnhap':
                include 'view/login/dangnhap.php';
                break;
            case 'dangky':
                include 'view/login/dangky.php';
                break;
            case 'quenmk':
                include 'view/login/quenmk.php';
                break;                
        }
    }else{
        include 'view/home.php';
    }
    include 'view/footer.php';

?>