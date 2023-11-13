<?php 
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    include "../model/diadiem.php";
    include "../model/chuyenbay.php";
    if(isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        switch($act) {
            case 'home':
                include 'header.php';
                include 'home.php';
                break;

            case 'dangnhap':
                if(isset($_POST['submit'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $loginMess = dangnhap($user, $pass, 0);
                    if($loginMess == "") {
                        header("Location: index.php?act=home");
                    } else {
                        include "login/dangnhap.php";
                    } 
                }
                break;
            case 'dangxuat':
                dangxuat('admin');
                include "login/dangnhap.php";
                break;

            // Tai khoan
            case 'listtk':
                include 'header.php';
                $listTaiKhoan = loadall_taikhoan();
                include 'taikhoan/list.php';
                break;

            case 'addtk':
                include 'header.php';
                if(isset($_POST['submit'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    insert_taikhoan($user, $pass, $email, $role);
                    $thongBao = "Thêm tài khoản thành công";
                }
                include 'taikhoan/add.php';
                break;

            case "updatetk":
                include 'header.php';
                if(isset($_GET['id']) && ($_GET['id'])){
                    $tk = loadone_taikhoan($_GET['id']);
                }
                include "taikhoan/update.php";
                break;
            
            case "suatk":
                include 'header.php';
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    update_taikhoan($user, $pass, $email, $role, $id);
                    $thongBao = 'Cap nhat thanh cong!';
                }
                $listTaiKhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;

            case 'deltk':
                include 'header.php';
                if(isset($_GET['id']) && ($_GET['id'])){
                    delete_taikhoan($_GET['id']);
                }
                $listTaiKhoan = loadall_taikhoan();
                include 'taikhoan/list.php';
                break;

            // Dia diem
            case 'listdd':
                include 'header.php';
                $listDiaDiem = loadall_diadiem();
                include 'diadiem/list.php';
                break; 
                
            case 'adddd':
                include 'header.php';   
                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $fileName = basename($_FILES['img']['name']);
                    $targetFile = '../upload/'.$fileName;
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $targetFile)){
                        // echo "Thành công";
                    } else echo "Lỗi";
                    insert_diadiem($name, $fileName);
                    $thongBao = "Thêm địa điểm thành công";
                }
                include 'diadiem/add.php';
                break;

            case "updatedd":
                include 'header.php';
                if(isset($_GET['id']) && ($_GET['id'])){
                    $dd = loadone_diadiem($_GET['id']);
                }
                include "diadiem/update.php";
                break;
            
            case "suadd":
                include 'header.php';
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $fileName = basename($_FILES['img']['name']);
                    $target_file = '../upload/'.$fileName;
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        // echo "Thành công!";
                    } else {
                        // echo "Lỗi!";
                    }
                    update_diadiem($name, $fileName, $id);
                    $thongBao = 'Cap nhat thanh cong!';
                }
                $listDiaDiem = loadall_diadiem();
                include "diadiem/list.php";
                break;

            case 'deldd':
                include 'header.php';
                if(isset($_GET['id']) && ($_GET['id'])){
                    delete_diadiem($_GET['id']);
                }
                $listDiaDiem = loadall_diadiem();
                include 'diadiem/list.php';
                break;    

            // Chuyen bay
            case 'listcb':
                include 'header.php';
                $listChuyenBay = loadadll_chuyenbay();
                include 'chuyenbay/list.php';
                break; 

            case 'addcb':
                include 'header.php';   
                $listDiaDiem = loadall_diadiem();
                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $id_diemDi = $_POST['diemdi'];
                    $id_diemDen = $_POST['diemden'];
                    $ngay_kh = $_POST['ngay_kh'];
                    $thoi_gian_di = $_POST['thoi_gian_di'];
                    $thoi_gian_den = $_POST['thoi_gian_den'];
                    $trang_thai = $_POST['trang_thai'];
                    insert_chuyenbay($name, $id_diemDi, $id_diemDen, $ngay_kh, $thoi_gian_di, $thoi_gian_den, $trang_thai);
                    $thongBao = "Thêm chuyến bay thành công";                    
                }
                include 'chuyenbay/add.php';
                break;

            case "updatecb":
                include 'header.php';
                $listDiaDiem = loadall_diadiem();
                if(isset($_GET['id']) && ($_GET['id'])){
                    $cb = loadone_chuyenbay($_GET['id']);
                }
                include "chuyenbay/update.php";
                break;
            
            case "suacb":
                include 'header.php';
                $listDiaDiem = loadall_diadiem();
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $id_diemDi = $_POST['diemdi'];
                    $id_diemDen = $_POST['diemden'];
                    $ngay_kh = $_POST['ngay_kh'];
                    $thoi_gian_di = $_POST['thoi_gian_di'];
                    $thoi_gian_den = $_POST['thoi_gian_den'];
                    $trang_thai = $_POST['trang_thai'];
                    update_chuyenbay($name, $id_diemDi, $id_diemDen, $ngay_kh, $thoi_gian_di, $thoi_gian_den, $trang_thai, $id);
                    $thongBao = 'Cap nhat thanh cong!';
                }
                $listChuyenBay = loadadll_chuyenbay();
                include 'chuyenbay/list.php';
                break;

            case 'delcb':
                include 'header.php';
                if(isset($_GET['id']) && ($_GET['id'])){
                    delete_chuyenbay($_GET['id']);
                }
                $listChuyenBay = loadadll_chuyenbay();
                include 'chuyenbay/list.php';
                break;     

            // Bieu do
            case 'bieudo':
                include 'header.php';
                include 'bieudo.php';
                break;
            default:
                include 'login/dangnhap.php';
                break;
        }
    } else {
        include 'login/dangnhap.php';
    }
    include 'footer.php';
?>
