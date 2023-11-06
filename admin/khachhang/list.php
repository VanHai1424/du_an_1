<div class="rowheader">
    <h1>Danh sách khách hàng</h1>
</div>
<table>
    <tr>
        <th>Tùy chọn</th>
        <th>ID</th>
        <th>User</th>
        <th>email</th>
        <th>Password</th>
        <th>Hình</th>
        <th>Địa chỉ</th>
        <th>Quyền</th>
        <th></th>
    </tr>

    <tr>
        <td><input type="checkbox" name="name[]" id="check_all"></td>
        <td>ma_us</td>
        <td>fullname</td>
        <td>email</td>
        <td>password</td>
        <td><img src="" alt="" class="h-10 w-10" style="width:100px;"></td>
        <td>location</td>
        <td>role</td>
        <td class="">
            <a href="index.php?act=updatekh&id=<?= $data['ma_us'] ?>" style="color:orange">Sửa</a>
            <a href="index.php?act=delkh&id=<?= $data['ma_us'] ?>" style="color: red;margin:0 10px;" onclick="return confirm('Bạn có chắc xóa không')">Xóa</a>
        </td>
    </tr>

</table>
<div class="but">
    <input class="border-[2px] bg-[#eee] border-[#868585]" type="button" value="Chọn tất cả" id="btn1">
    <input class="border-[2px] bg-[#eee] border-[#868585]" type="button" value="Bỏ chọn tất cả" id="btn2">
    <input class="border-[2px] bg-[#eee] border-[#868585]" type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=addkh"><input type="button" value="Nhập thêm" class="border-[2px] bg-[#eee] border-[#868585]"></a>
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