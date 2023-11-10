<!-- content -->
<div class="formdatve-content">
    <div class="ticket">
        <div class="img">
            <img src="img/anh1.png" alt="">
        </div>
        <div class="info">
            <div class="row">
                <p>Tên máy bay: <span>A1</span></p>
            </div>
            <div class="row">
                <p>Từ: <span>Hà Nội</span></p>
                <p>Đến: <span>TP.Hồ Chí Minh</span></p>
            </div>
            <div class="row">
                <p>Giờ đi: <span class="red">16:50</span></p>
                <p>Giờ đến: <span class="red">19:50</span></p>
            </div>
            <div class="row">
                <p>Ngày đi: 24/03/2023</span></p>
            </div>
        </div>
    </div>
    <!-- Form ticket -->
    <div class="form-ticket">
        <h2 class="form-ticket__header">Thông Tin Khách Hàng</h2>
        <form action="index.php?act=hoadon" class="ticket-form" method="POST">
            <div class="form-ticket__input">
                <div class="form-ticket__input-item">
                    <p>Họ Tên:</p>
                    <input type="text" placeholder="Nhập họ tên">
                </div>
                <div class="form-ticket__input-item">
                    <p>Giới Tính:</p>
                    <select name="" id="">
                        <option value="">Chọn</option>
                        <option value="nam">Nam</option>
                        <option value="nu">Nữ</option>
                        <option value="khac">Khác</option>
                    </select>
                </div>
                <div class="form-ticket__input-item">
                    <p>Email:</p>
                    <input type="email" placeholder="Nhập email">
                </div>
                <div class="form-ticket__input-item">
                    <p>Số Điện Thoại:</p>
                    <input type="text" placeholder="Nhập số điện thoại">
                </div>
                <div class="form-ticket__input-item">
                    <p>Địa Chỉ:</p>
                    <input type="text" placeholder="Nhập địa chỉ">
                </div>
            </div>

            <div class="form-ticket__select-slot">
                <fieldset>
                    <legend>Chọn loại vé</legend>
                    <div class="radio-block">
                        <input type="radio" value="2" name="select_slot" id="animations-on" checked onclick="toggleForm('slot_tg', 'slot_pt')" />
                        <label for="animations-on">Thương gia</label>
                        <input type="radio" value="1" name="select_slot" id="animations-off" onclick="toggleForm('slot_pt', 'slot_tg')" />
                        <label for="animations-off" class="off-label">Phổ thông</label>
                        <span class="selected" aria-hidden="true"></span>
                    </div>
                </fieldset>
            </div>

            <div class="form-ticket__slot-tg" id="slot_tg">

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
            </div>

            <div class="form-ticket__button">
                <input style="margin-bottom: 20px;" type="submit" name="submit" value="TIẾP TỤC">
            </div>
        </form>
    </div>
</div>