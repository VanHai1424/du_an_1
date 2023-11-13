<?php 
    function loadall_diadiem() {
        $sql = "SELECT * FROM `dia_diem` WHERE 1";
        $listDiaDiem = pdo_query($sql);
        return $listDiaDiem;
    }

    function loadone_diadiem($id) {
        $sql = "SELECT * FROM `dia_diem` WHERE id = $id";
        $dd = pdo_query_one($sql);
        return $dd;
    }

    function insert_diadiem($name, $img) {
        $sql = "INSERT INTO `dia_diem`(`ten`, `img`) VALUES ('$name','$img')";
        pdo_execute($sql);
    }

    function update_diadiem($name, $fileName, $id) {
        if($fileName != "") {
            $sql = "UPDATE `dia_diem` SET `ten`='$name',`img`='$fileName' WHERE id = $id";
        } else 
            $sql = "UPDATE `dia_diem` SET `ten`='$name' WHERE `id`= $id";
        pdo_execute($sql);
    }

    function delete_diadiem($id) {
        $sql = "DELETE FROM `dia_diem` WHERE id = $id";
        pdo_execute($sql);
    }


?>