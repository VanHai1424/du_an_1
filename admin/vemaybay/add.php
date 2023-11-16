<div class="rowheader">
    <h1>Thêm vé máy bay</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="./index.php?act=addvmb" method="post" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">Giá vé</label>
        </div>
        <input name="giave" value="" class="" type="number">
        <br>
        <br>
        <div class="content-text">
            <label for="">Loại vé</label>
        </div>
        <select name="loaive" id="" class="">
            <option value="1">Phổ thông</option>
            <option value="2">Thương gia</option>
        </select>
        <br>
        <br>
        <div class="content-text">
            <label for="">ID chuyến bay</label>
        </div>
        <select name="idchuyenbay" id="" class="">
            <?php 
                foreach ($listChuyenBay as $value) {
                    extract($value);
                    echo '<option value="'.$id.'">'.$id.'</option>';
                }
            ?>
        </select>
        <br>
        <br>
        <div class="but">
            <input type="submit" name="submit" value="Thêm Mới" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="index.php?act=listvmb" class=""><input type="button" value="Danh sách"></a>

        </div>
        <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
    </form> 
    
</div>