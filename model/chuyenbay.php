<?php 
    function loadall_chuyenbay($page) {
        if($page == "admin") $sql = "SELECT * FROM chuyen_bay WHERE 1";
        else {
            $sql = "SELECT cb.*,
            dd_di.ten AS diem_di,
            dd_den.ten AS diem_den,
            dd_den.img AS img_den
            FROM chuyen_bay cb
            JOIN dia_diem dd_di ON cb.id_diemDi = dd_di.id
            JOIN dia_diem dd_den ON cb.id_diemDen = dd_den.id
            ORDER BY cb.ngay_khoi_hanh 
            ";
        }
        $list = pdo_query($sql);
        return $list;
    }

    function search_chuyenbay($from = "", $to = "", $depart = "") {
        $sql = "SELECT cb.*, 
                dd_di.ten AS diem_di, 
                dd_den.ten AS diem_den, 
                dd_den.img AS img_den 
                FROM chuyen_bay cb 
                JOIN dia_diem dd_di ON cb.id_diemDi = dd_di.id 
                JOIN dia_diem dd_den ON cb.id_diemDen = dd_den.id 
                WHERE 1";
        
        if (!empty($from)) {
            $sql .= " AND cb.id_diemDi = $from";
        }
    
        if (!empty($to)) {
            $sql .= " AND cb.id_diemDen = $to";
        }
    
        if (!empty($depart)) {
            $sql .= " AND cb.ngay_khoi_hanh = '$depart'";
        }
    
        $sql .= " ORDER BY cb.ngay_khoi_hanh";
    
        $listChuyenBay = pdo_query($sql);
        return $listChuyenBay;
    }
    

    function load_cb_home () {
        $sql = "SELECT cb.*,
        dd_di.ten AS diem_di,
        dd_den.ten AS diem_den,
        dd_den.img AS img_den
        FROM chuyen_bay cb
        JOIN dia_diem dd_di ON cb.id_diemDi = dd_di.id
        JOIN dia_diem dd_den ON cb.id_diemDen = dd_den.id
        ORDER BY cb.ngay_khoi_hanh 
        LIMIT 8; 
        ";
        $list = pdo_query($sql);
        return $list;
    }

    function loadone_chuyenbay($id, $page) {
        if($page == 'admin') $sql = "SELECT * FROM `chuyen_bay` WHERE id = $id";
        else {
            $sql = "SELECT cb.*, 
            dd_di.ten AS diem_di, 
            dd_den.ten AS diem_den, 
            dd_den.img AS img_den
            FROM chuyen_bay cb
            JOIN dia_diem dd_di ON cb.id_diemDi = dd_di.id
            JOIN dia_diem dd_den ON cb.id_diemDen = dd_den.id
            WHERE cb.id = $id
            ";
        }
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

