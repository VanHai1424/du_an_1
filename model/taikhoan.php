<?php 
    session_start();

    function dangnhap($user, $pass) {
        $sql = "SELECT * FROM tai_khoan WHERE user='$user' and pass='$pass'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            $_SESSION['user'] = $user;
            $_SESSION['iduser'] = $taikhoan['id'];
            $_SESSION['role'] = $taikhoan['role'];
        } 
        else {
            return "Thông tin tài khoản sai";
        }
    }

    function dangxuat() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            unset($_SESSION['role']);
        }
    }
    
    function loadall_taikhoan() {
        $sql = "SELECT * FROM `tai_khoan` WHERE 1";
        $listTaiKhoan = pdo_query($sql);
        return $listTaiKhoan;
    }

    function loadone_taikhoan($id) {
        $sql = "SELECT * FROM `tai_khoan` WHERE id = $id";
        $tk = pdo_query_one($sql);
        return $tk;
    }

    function insert_taikhoan($user, $pass, $email, $role = 1) {
        $sql = "INSERT INTO `tai_khoan`(`user`, `pass`, `email`, `role`) VALUES ('$user','$pass','$email','$role')";
        pdo_execute($sql);
    }

    function update_taikhoan($user, $pass, $email, $role, $id) {
        $sql = "UPDATE `tai_khoan` SET `user`='$user',`pass`='$pass',`email`='$email',`role`='$role' WHERE id= $id";
        pdo_execute($sql);
    }

    function delete_taikhoan($id) {
        $sql = "DELETE FROM `tai_khoan` WHERE id = $id";
        pdo_execute($sql);
    }


?>