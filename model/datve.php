<?php 
    function insert_datve($idVe, $idUser, $ngayDat, $gioDat, $giaVe) {
        $sql = "INSERT INTO `dat_ve`(`id_ve`, `id_user`, `ngay_dat`, `gio_dat`, `gia_ve`) VALUES ('$idVe','$idUser','$ngayDat','$gioDat','$giaVe')";
        pdo_execute($sql);
    }


?>