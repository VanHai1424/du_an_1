<?php 
    function convertToHour($timeString) {
        $dateTimeObject = new DateTime($timeString);
        return $dateTimeObject->format('H:i');
    }
    
    if(is_array($cb)) {
        extract($cb);
    }
?>
<!-- content -->
<div class="formdatve-content">
    <div class="ticket">
        <div class="img">
            <img src="upload/<?= $img_den?>" alt="">
        </div>
        <div class="info">
            <div class="row">
                <p>Tên máy bay: <span><?= $ten_may_bay ?></span></p>
            </div>
            <div class="row">
                <p>Từ: <span><?= preg_replace('/\([^)]*\)/', '', $diem_di) ?></span></p>
                <p>Đến: <span><?= preg_replace('/\([^)]*\)/', '', $diem_den) ?></span></p>
            </div>
            <div class="row">
                <p>Giờ đi: <span class="red"><?= convertToHour($thoi_gian_di) ?></span></p>
                <p>Giờ đến: <span class="red"><?= convertToHour($thoi_gian_den) ?></span></p>
            </div>
            <div class="row">
                <p>Ngày đi: <?= date('d/m/Y', strtotime($ngay_khoi_hanh)) ?></span></p>
            </div>
        </div>
    </div>
    <!-- Form ticket -->
    <div class="form-ticket">
        <h2 class="form-ticket__header">Thông Tin Khách Hàng</h2>
        <form action="index.php?act=hoadon" class="ticket-form" method="POST">
            <div class="form-ticket__input">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="ten_may_bay" value="<?= $ten_may_bay ?>">
                <input type="hidden" name="diem_di" value="<?= preg_replace('/\([^)]*\)/', '', $diem_di) ?>">
                <input type="hidden" name="diem_den" value="<?= preg_replace('/\([^)]*\)/', '', $diem_den) ?>">
                <input type="hidden" name="thoi_gian_di" value="<?= date("d/m/Y H:i", strtotime($thoi_gian_di)) ?>">
                <input type="hidden" name="thoi_gian_den" value="<?= date("d/m/Y H:i", strtotime($thoi_gian_den)) ?>">
                <div class="form-ticket__input-item">
                    <p>Họ Tên:</p>
                    <input type="text" placeholder="Nhập họ tên" name="ten" required>
                </div>
                <div class="form-ticket__input-item">
                    <p>Giới Tính:</p>
                    <select name="gioitinh" id="" required>
                        <option value="">Chọn</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>
                    </select>
                </div>
                <div class="form-ticket__input-item">
                    <p>Email:</p>
                    <input type="email" placeholder="Nhập email" name="email" required>
                </div>
                <div class="form-ticket__input-item">
                    <p>Số Điện Thoại:</p>
                    <input type="text" placeholder="Nhập số điện thoại" name="sdt" required>
                </div>
                <div class="form-ticket__input-item">
                    <p>Địa Chỉ:</p>
                    <input type="text" placeholder="Nhập địa chỉ" name="diachi" required>
                </div>
            </div>

            <div class="form-ticket__select-slot">
                <fieldset>
                    <legend>Chọn loại vé</legend>
                    <div class="radio-block">
                        <input class="select_slot_thuonggia" type="radio" value="2" name="select_slot" id="animations-on" checked/>
                        <label for="animations-on">Thương gia</label>
                        <input class="select_slot_phothong" type="radio" value="1" name="select_slot" id="animations-off"/>
                        <label for="animations-off" class="off-label">Phổ thông</label>
                        <span class="selected" aria-hidden="true"></span>
                    </div>
                </fieldset>
            </div>

            <!-- <div class="form-ticket__slot-tg" id="slot_tg">

                <input type="radio" value="1" name="slot" id="1" disabled />
                <label for="1">1</label>
                <input type="radio" value="2" name="slot" id="2" />
                <label for="2">2</label>
                <input type="radio" name="slot" id="3" />
                <label for="3">3</label>
                <input type="radio" name="slot" id="4" />
                <label for="4">4</label>
                <input type="radio" name="slot" id="5" />
                <label for="5">5</label>
                <input type="radio" name="slot" id="6" />
                <label for="6">6</label>
                <input type="radio" name="slot" id="7" />
                <label for="7">7</label>
                <input type="radio" name="slot" id="8" />
                <label for="8">8</label>
                <input type="radio" name="slot" id="9" />
                <label for="9">9</label>
                <input type="radio" name="slot" id="10" />
                <label for="10">10</label>
                <input type="radio" name="slot" id="11" />
                <label for="11">11</label>
                <input type="radio" name="slot" id="12" />
                <label for="12">12</label>
            </div>

            <div class="form-ticket__slot-pt" id="slot_pt">

                <input type="radio" name="slot" id="13" />
                <label for="13">13</label>
                <input type="radio" name="slot" id="14" />
                <label for="14">14</label>
                <input type="radio" name="slot" id="15" />
                <label for="15">15</label>
                <input type="radio" name="slot" id="16" />
                <label for="16">16</label>
                <input type="radio" name="slot" id="17" />
                <label for="17">17</label>
                <input type="radio" name="slot" id="18" />
                <label for="18">18</label>
                <input type="radio" name="slot" id="19" />
                <label for="19">19</label>
                <input type="radio" name="slot" id="20" />
                <label for="20">20</label>
                <input type="radio" name="slot" id="21" />
                <label for="21">21</label>
                <input type="radio" name="slot" id="22" />
                <label for="22">22</label>
                <input type="radio" name="slot" id="23" />
                <label for="23">23</label>
                <input type="radio" name="slot" id="24" />
                <label for="24">24</label>
                <input type="radio" name="slot" id="25" />
                <label for="25">25</label>
                <input type="radio" name="slot" id="26" />
                <label for="26">26</label>
                <input type="radio" name="slot" id="27" />
                <label for="27">27</label>
                <input type="radio" name="slot" id="28" />
                <label for="28">28</label>
            </div> -->

            <div class="form-ticket__slot-tg" id="slot_tg">
                <?php
                    for ($i = 1; $i <= 12; $i++) {
                        $disabled = false;
                        foreach ($listGheNgoi as $ghe) {
                            if ($ghe['ma_ghe'] == $i && $ghe['trang_thai'] == 0 && $ghe['id_chuyen_bay'] == $id) {
                                $disabled = true;
                                break;
                            }
                        }
                        echo "
                            <input type='radio' value='$i' name='slot' id='$i' " . ($disabled ? 'disabled' : '') . " required />
                            <label for='$i'>$i</label>
                        ";
                    }
                ?>
            </div>


            <div class="form-ticket__slot-pt" id="slot_pt">
                <?php
                    for ($i = 13; $i <= 28; $i++) {
                        $disabled = false;
                        foreach ($listGheNgoi as $ghe) {
                            if ($ghe['ma_ghe'] == $i && $ghe['trang_thai'] == 0 && $ghe['id_chuyen_bay'] == $id) {
                                $disabled = true;
                                break; 
                            }
                        }
                        echo "
                            <input type='radio' value='$i' name='slot' id='$i' " . ($disabled ? 'disabled' : '') . " required />
                            <label for='$i'>$i</label>
                        ";
                    }
                ?>
            </div>


            <div class="form-ticket__button">
                <input style="margin-bottom: 20px;" type="submit" name="submit" value="TIẾP TỤC">
            </div>
        </form>
    </div>
</div>