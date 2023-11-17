<?php 
    function loadall_vemaybay() {
        $sql = "SELECT * FROM `ve_may_bay` WHERE 1";
        $listVeMayBay = pdo_query($sql);
        return $listVeMayBay;
    }

    function loadone_vemaybay($id) {
        $sql = "SELECT * FROM `ve_may_bay` WHERE id = $id";
        $vmb = pdo_query_one($sql);
        return $vmb;
    }

    function get_ve($loaiVe, $idChuyenBay) {
        $sql = "SELECT vmb.*, cb.ten_may_bay, 
        cb.thoi_gian_di, cb.thoi_gian_den, 
        dd_di.ten AS diem_di, 
        dd_den.ten AS diem_den
        FROM `ve_may_bay` AS vmb
        INNER JOIN chuyen_bay cb ON vmb.id_chuyen_bay = cb.id
        INNER JOIN dia_diem dd_di ON cb.id_diemDi = dd_di.id
        INNER JOIN dia_diem dd_den ON cb.id_diemDen = dd_den.id
        WHERE vmb.loai_ve = $loaiVe AND cb.id = $idChuyenBay";
        $ve = pdo_query_one($sql);
        return $ve;
    }

    function delete_vemaybay($id) {
        $sql = "DELETE FROM `ve_may_bay` WHERE id = $id";
        pdo_execute($sql);
    }

    function insert_vemaybay($gia_ve,$loai_ve,$id_chuyen_bay) {
        $sql = "INSERT INTO `ve_may_bay`(`gia_ve`, `loai_ve`, `id_chuyen_bay`) VALUES ('$gia_ve','$loai_ve','$id_chuyen_bay')";
        pdo_execute($sql);
    }

    function update_vemaybay($gia_ve,$loai_ve,$id_chuyen_bay,$id) {
        $sql = "UPDATE `ve_may_bay` SET `gia_ve`='$gia_ve',`loai_ve`='$loai_ve',`id_chuyen_bay`='$id_chuyen_bay' WHERE id = $id";
        pdo_execute($sql);
    }
    
?>

