<?php 
    session_start();

    function dangnhap($user, $pass, $role) {
        $sql = "SELECT * FROM tai_khoan WHERE user='$user' and pass='$pass' and role = '$role'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false && $role == 0) {
            $_SESSION['admin'] = $user;
        } else if($taikhoan != false && $role == 1) {
            $_SESSION['user'] = $user;
            $_SESSION['iduser'] = $taikhoan['id'];
        }
        else {
            return "Thông tin tài khoản sai";
        }
    }

    function dangxuat($role) {
        if($role == 'admin') {
            if (isset($_SESSION['admin'])) {
                unset($_SESSION['admin']);
            }
        }
        else if($role == 'user') {
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
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