<?php 
    function loadadll_chuyenbay() {
        $sql = "SELECT * FROM `chuyen_bay` WHERE 1";
        $listChuyenBay = pdo_query($sql);
        return $listChuyenBay;
    }

    function loadone_chuyenbay($id) {
        $sql = "SELECT * FROM `chuyen_bay` WHERE id = $id";
        $cb = pdo_query_one($sql);
        return $cb;
    }

    function delete_chuyenbay($id) {
        $sql = "DELETE FROM `chuyen_bay` WHERE id = $id";
        pdo_execute($sql);
    }

    function insert_chuyenbay($name, $id_diemDi, $id_diemDen, $ngay_kh, $thoi_gian_di, $thoi_gian_den, $trang_thai) {
        $sql = "INSERT INTO `chuyen_bay`(`ten_may_bay`, `id_diemDi`, `id_diemDen`, `ngay_khoi_hanh`, `thoi_gian_di`, `thoi_gian_den`, `trang_thai`) VALUES ('$name','$id_diemDi','$id_diemDen','$ngay_kh','$thoi_gian_di','$thoi_gian_den','$trang_thai')";
        pdo_execute($sql);
    }

    function update_chuyenbay($name, $id_diemDi, $id_diemDen, $ngay_kh, $thoi_gian_di, $thoi_gian_den, $trang_thai, $id) {
        $sql = "UPDATE `chuyen_bay` SET `ten_may_bay`='$name',`id_diemDi`='$id_diemDi',`id_diemDen`='$id_diemDen',`ngay_khoi_hanh`='$ngay_kh',`thoi_gian_di`='$thoi_gian_di',`thoi_gian_den`='$thoi_gian_den',`trang_thai`='$trang_thai' WHERE id = $id";
        pdo_execute($sql);
    }
    
?>

