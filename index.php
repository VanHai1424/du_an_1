<?php 
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/chuyenbay.php";
    include "model/diadiem.php";
    include "model/vemaybay.php";
    include "model/ghengoi.php";
    include "model/datve.php";
    include 'view/header.php';
    $listCbHome = load_cb_home();
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
                    $cb = loadone_chuyenbay($_GET['id'], 'user');
                    $listGheNgoi = loadall_ghengoi();
                    $listVe = get_all_ve($_GET['id']);
                    include 'view/datve/formdatve.php';
                }
                break;

            case 'hoadon':
                if(isset($_POST['submit'])) {
                    $hoTen = $_POST['ten'];
                    $gioiTinh = $_POST['gioitinh'];
                    $sdt = $_POST['sdt'];
                    $diaChi = $_POST['diachi'];
                    $loaiVe = $_POST['select_slot'];
                    $maGhe = $_POST['slot'];
                    $idChuyenBay = $_POST['id'];
                    $ve = get_one_ve($idChuyenBay, $loaiVe);

                }
                include 'view/datve/hoadon.php';
                break;

            case 'thanhtoan':
                if(isset($_POST['submit'])) {
                    // $idVe = $_POST['id_ve'];
                    // $idUser = $_POST['id_user'];
                    // $ngayDat = $_POST['ngay_dat'];
                    // $gioDat = $_POST['gio_dat'];
                    // $giaVe = $_POST['gia_ve'];
                    // $maGhe = $_POST['ma_ghe'];
                    // include 'view/datve/thanhtoan.php';
                    $_SESSION['payment_data'] = [
                        'id_ve' => $_POST['id_ve'],
                        'id_user' => $_POST['id_user'],
                        'ngay_dat' => $_POST['ngay_dat'],
                        'gio_dat' => $_POST['gio_dat'],
                        'gia_ve' => $_POST['gia_ve'],
                        'ma_ghe' => $_POST['ma_ghe']
                    ];
                    // include 'view/datve/thanhtoan.php';
                    header("Location: ./vnpay_php/vnpay_create_payment.php");
                }
                break;
    
            case 'thanhtoantc':
                // if(isset($_POST['submit'])){
                //     $idVe = $_POST['id_ve'];
                //     $idUser = $_POST['id_user'];
                //     $ngayDat = $_POST['ngay_dat'];
                //     $gioDat = $_POST['gio_dat'];
                //     $giaVe = $_POST['gia_ve'];
                //     $maGhe = $_POST['ma_ghe'];
                //     insert_datve($idVe, $idUser, $ngayDat, $gioDat, $giaVe);
                //     insert_ghengoi($maGhe, $idVe, 0);
                // }
                // include 'view/datve/datvethanhcong.php';
                if (isset($_SESSION['payment_data']) && $_GET['vnp_ResponseCode'] == 0) {
                    $paymentData = $_SESSION['payment_data'];
                    
                    insert_datve($paymentData['id_ve'], $paymentData['id_user'], $paymentData['ngay_dat'], $paymentData['gio_dat'], $paymentData['gia_ve']);
                    insert_ghengoi($paymentData['ma_ghe'], $paymentData['id_ve'], 0);
                
                    unset($_SESSION['payment_data']);
                    include 'view/datve/datvethanhcong.php';
                } else {
                    include 'view/home.php';
                }
                
                break;

            case 'dangnhap':
                if(isset($_POST['submit'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $loginMess = dangnhap($user, $pass);
                    if($loginMess == "") {
                        if($_SESSION['role'] == 0) header("Location: admin/index.php");
                        else header("Location: index.php");
                    }
                }
                include 'view/login/dangnhap.php';
                break;

            case 'dangxuat':
                dangxuat();
                header("Location: index.php");
                break;
            
            case 'dangky':
                if(isset($_POST['submit'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    insert_taikhoan($user, $pass, $email);
                    header('Location: index.php?act=dangnhap');
                }
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