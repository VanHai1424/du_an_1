<div class="rowheader">
    <h1>Thêm địa điểm</h1>
</div>
<div class="row-content">
    <h5 class=""></h5>
    <form action="./index.php?act=adddd" method="post" enctype="multipart/form-data">
        <div class="content-text">
            <label for="">Tên địa điểm</label>
        </div>
        <input name="name" value="" class="" type="text">
        <br>
        <div class="content-text">
            <label for="">Hình</label>
        </div>
        <input name="img" value="" class="" type="file">
        <br>
        <div class="but">
            <input type="submit" name="submit" value="Thêm Mới" class="">
            <input type="reset" value="Nhập Lại" class="">
            <a href="index.php?act=listdd" class=""><input type="button" value="Danh sách"></a>

        </div>
        <?= (isset($thongBao) && ($thongBao != "")) ? $thongBao : "" ?>
    </form> 
    
</div>