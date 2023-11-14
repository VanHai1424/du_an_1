<div class="rowheader">
    <h1>Thêm vé máy bay</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="./index.php?act=addcb" method="post" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">Tên máy bay</label>
        </div>
        <input name="name" value="" class="" type="text">
        <br>
        <br>
        <div class="content-text">
            <label for="">Điểm đi</label>
        </div>
        <select name="diemdi" id="" class="">
            <?php 
                foreach ($listDiaDiem as $value) {
                    extract($value);
                    echo '<option value="'.$id.'">'.$ten.'</option>';
                }
            ?>
        </select>
        <br>
        <br>
        <div class="content-text">
            <label for="">Điểm đến</label>
        </div>
        <select name="diemden" id="" class="">
            <?php 
                foreach ($listDiaDiem as $value) {
                    extract($value);
                    echo '<option value="'.$id.'">'.$ten.'</option>';
                }
            ?>
        </select>
        <br>
        <br>
        <div class="content-text">
            <label for="">Ngày khởi hành</label>
        </div>
        <input name="ngay_kh" value="" class="" type="date">
        <br>
        <br>
        <div class="content-text">
            <label for="">Thời gian đi</label>
        </div>
        <input name="thoi_gian_di" value="" class="" type="datetime-local">
        <br>
        <br>
        <div class="content-text">
            <label for="">Thời gian đến</label>
        </div>
        <input name="thoi_gian_den" value="" class="" type="datetime-local">
        <br>
        <br>
        <div class="content-text">
            <label for="">Trạng thái</label>
        </div>
        <input name="trang_thai" value="" class="" type="text">
        <br>
        <br>
        <div class="but">
            <input type="submit" name="submit" value="Thêm Mới" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="index.php?act=listcb" class=""><input type="button" value="Danh sách"></a>

        </div>
        <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
    </form> 
    
</div>