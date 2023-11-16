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

