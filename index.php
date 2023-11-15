<?php 
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/chuyenbay.php";
    include "model/diadiem.php";
    include 'view/header.php';
    $listCbNew = load_cb_home();
    $listDiaDiem = loadall_diadiem();
    if(isset($_GET['act']) && ($_GET['act'] != '')){
        $act = $_GET['act'];
        switch ($act) {
            case 'dscb':
                $listCb = loadall_chuyenbay('user');
                include 'view/datve/dschuyenbay.php';
                break;
            case 'search':
                if(isset($_POST['search'])) {
                    $from = $_POST['diemdi'];
                    $to = $_POST['diemden'];
                    $depart = $_POST['ngaydi'];
                    $listCb = search_chuyenbay($from, $to, $depart);
                    if(!$listCb) $mess = "Không Có Chuyến Bay";
                    include 'view/datve/dschuyenbay.php';
                }
                break;    
            case 'datve':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    include 'view/datve/formdatve.php';
                }
                break;
            case 'hoadon':
                include 'view/datve/hoadon.php';
                break;
            case 'dangnhap':
                if(isset($_POST['submit'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $loginMess = dangnhap($user, $pass, 1);
                    if($loginMess == "") {
                        header("Location: index.php");
                    }
                }
                include 'view/login/dangnhap.php';
                break;
            case 'dangxuat':
                dangxuat('user');
                header("Location: index.php");
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