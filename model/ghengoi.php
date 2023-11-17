<?php 
    function loadall_ghengoi() {
        $sql = "SELECT * FROM ghe_ngoi WHERE 1";
        $list = pdo_query($sql);
        return $list;
    }

    function insert_ghengoi($maGhe, $idChuyenBay, $trangThai) {
        $sql = "INSERT INTO `ghe_ngoi`(`ma_ghe`, `id_chuyen_bay`, `trang_thai`) VALUES ('$maGhe','$idChuyenBay',$trangThai)";
        pdo_execute($sql);
    }





?>