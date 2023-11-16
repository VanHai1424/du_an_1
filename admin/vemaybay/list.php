<?php
    if (isset($_SESSION['admin'])) {
?>
    <div class="rowheader">
        <h1>Danh sách vé máy bay</h1>
    </div>
    <table>
        <tr>
            <th>Tùy chọn</th>
            <th>ID</th>
            <th>Giá vé</th>
            <th>Loại vé</th>
            <th>ID chuyến bay</th>
            <th></th>
        </tr>
        <?php 
            foreach ($listVeMayBay as $value) {
                extract($value);
                echo '
                <tr>
                    <td><input type="checkbox" name="name[]" id="check_all"></td>
                    <td>'.$id.'</td>
                    <td>'.$gia_ve.'</td>
                    <td>'.$loai_ve.'</td>
                    <td>'.$id_chuyen_bay.'</td>
                    <td class="">
                        <a href="index.php?act=updatevmb&id='.$id.'" style="color:orange">Sửa</a>
                        <a href="index.php?act=delvmb&id='.$id.'" style="color: red;margin:0 10px;" onclick="return confirm(\'Bạn có chắc xóa không\')">Xóa</a>
                    </td>
                </tr>
                ';
            }
        ?>
        

    </table>
    <div class="but">
        <input class="border-[2px] bg-[#eee] border-[#868585]" type="button" value="Chọn tất cả" id="btn1">
        <input class="border-[2px] bg-[#eee] border-[#868585]" type="button" value="Bỏ chọn tất cả" id="btn2">
        <input class="border-[2px] bg-[#eee] border-[#868585]" type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addvmb"><input type="button" value="Nhập thêm" class="border-[2px] bg-[#eee] border-[#868585]"></a>
    </div>
    <script>
        // Chức năng chọn hết
        document.getElementById("btn1").onclick = function() {
            // Lấy danh sách checkbox
            var checkboxes = document.getElementsByName('name[]');

            // Lặp và thiết lập checked
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = true;
            }
        };

        // Chức năng bỏ chọn hết
        document.getElementById("btn2").onclick = function() {
            // Lấy danh sách checkbox
            var checkboxes = document.getElementsByName('name[]');

            // Lặp và thiết lập Uncheck
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = false;
            }
        };
    </script>

<?php
    }

?>