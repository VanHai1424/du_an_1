<?php 
    function loadall_ghengoi() {
        $sql = "SELECT * FROM ghe_ngoi WHERE 1";
        $list = pdo_query($sql);
        return $list;
    }

    function insert_ghengoi($maGhe, $idVe, $trangThai) {
        $sql = "INSERT INTO `ghe_ngoi`(`ma_ghe`, `id_ve`, `trang_thai`) VALUES ('$maGhe','$idVe',$trangThai)";
        pdo_execute($sql);
    }





?>