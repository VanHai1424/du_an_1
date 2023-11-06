<div class="content">
            <div class="banner">
                <img id="id-banner" src="./img/ban1.png" alt="Banner">
                <i class="fa-solid fa-angle-right next" onclick="next()"></i>
                <i class="fa-solid fa-angle-left prev" onclick="prev()"></i>
            </div>
            <!-- Info -->
            <div id="info" class="info">
                <h1 class="info-header">Giới Thiệu</h1>
                <div class="info-content">
                    <div class="text">
                        <p>Chào mừng đến với trang web bán vé máy bay của chúng tôi! Chúng tôi cung cấp dịch vụ đặt vé máy bay trực tuyến với đầy đủ các hãng hàng không lớn và nhỏ trên khắp thế giới. Với hệ thống tìm kiếm thông minh, bạn có thể dễ dàng tìm kiếm các chuyến bay phù hợp với nhu cầu của mình và đặt vé chỉ trong vài phút. Chúng tôi cũng cung cấp các ưu đãi và khuyến mãi hấp dẫn cho các hành trình khác nhau, giúp bạn tiết kiệm chi phí và có trải nghiệm du lịch tuyệt vời hơn. Với đội ngũ nhân viên hỗ trợ khách hàng chuyên nghiệp và nhiệt tình, chúng tôi cam kết mang đến cho bạn dịch vụ đặt vé tốt nhất. Ngoài ra, trang web của chúng tôi còn cung cấp các công cụ hữu ích giúp bạn theo dõi và quản lý các chuyến bay của mình, bao gồm cập nhật lịch trình, thông tin về sân bay và thời gian bay. Bạn cũng có thể tìm kiếm và đặt phòng khách sạn hoặc dịch vụ đưa đón sân bay để có một kỳ nghỉ hoàn hảo. Hãy truy cập trang web của chúng tôi để đặt vé và khám phá thế giới ngay hôm nay!</p>
                    </div>
                    <div class="img" style="position: relative;">
                        <img src="./img/sale1.png" alt="Sale">
                    </div>
                </div>
            </div>
            <!-- Tickets -->
            <div id="tickets" class="tickets">
                <div class="tickets-content">
                    <form action="" class="tickets-form">
                            <div class="box">
                                <label>FROM</label>
                                <select name="" id="">
                                    <option value="0">Địa Điểm</option>
                                    <option value="1">Hà Nội</option>
                                    <option value="2">TP.Hồ Chí Minh</option>
                                    <option value="3">Đà Nẵng</option>
                                </select>
                            </div>
                            <div class="box">
                                <label>TO</label>
                                <select name="" id="">
                                    <option value="0">Địa Điểm</option>
                                    <option value="1">Hà Nội</option>                                               
                                    <option value="2">TP.Hồ Chí Minh</option>
                                    <option value="3">Đà Nẵng</option>
                                </select>
                            </div>
                            <div class="box">
                                <label>DEPART</label>
                                <input type="date" class="from">
                            </div>

                            <div class="box">
                                <label>TICKET</label>
                                <select name="" id="">
                                    <option value="0">Loại vé</option>
                                    <option value="1">Phổ thông</option>
                                    <option value="2">Thương gia</option>
                                </select>
                            </div>
                            <input type="submit" value="Search" class="btn-search">
                    </form>
                    <div class="tikets-buy">
                        <div class="row-item">
                            <div class="item">
                                <img src="./img/anh1.png" alt="">
                                <div class="item-text">
                                    <h3>Hà Nội (HAN) đến TP.Hồ Chí Minh (SGN)</h3>
                                    <p class="date">Ngày đi: 24/03/2023</p>
                                </div>
                                <p class="price">999,000 VND</p>
                                <button class="btn-buy">Đặt Vé</button>
                            </div>
                            <div class="item">
                                <img src="./img/anh4.png" alt="">
                                <div class="item-text">
                                    <h3>TP.Hồ Chí Minh (SGN) đến Hà Nội (HAN)</h3>
                                    <p class="date">Ngày đi: 23/03/2023</p>
                                </div>
                                <p class="price">888,000 VND</p>
                                <button class="btn-buy">Đặt Vé</button>
                            </div>
                            <div class="item">
                                <img src="./img/anh2.png" alt="">
                                <div class="item-text">
                                    <h3>TP.Hồ Chí Minh (SGN) đến Hà Nội (HAN)</h3>
                                    <p class="date">Ngày đi: 25/03/2023</p>
                                </div>
                                <p class="price">777,000 VND</p>
                                <button class="btn-buy">Đặt Vé</button>
                            </div>
                            <div class="item">
                                <img src="./img/anh3.png" alt="">
                                <div class="item-text">
                                    <h3>TP.Hồ Chí Minh (SGN) đến Đà Nẵng (DAD)</h3>
                                    <p class="date">Ngày đi: 26/03/2023</p>
                                </div>
                                <p class="price">666,000 VND</p>
                                <button class="btn-buy">Đặt Vé</button>
                            </div>
                        </div>
                        <div class="row-item">
                            <div class="item">
                                <img src="./img/anh5.png" alt="">
                                <div class="item-text">
                                    <h3>TP.Hồ Chí Minh (SGN) đến Đà Lạt (DLI)</h3>
                                    <p class="date">Ngày đi: 27/03/2023</p>
                                </div>
                                <p class="price">555,000 VND</p>
                                <button class="btn-buy">Đặt Vé</button>
                            </div>
                            <div class="item">
                                <img src="./img/anh7.png" alt="">
                                <div class="item-text">
                                    <h3>TP.Hồ Chí Minh đến Quy Nhơn</h3>
                                    <p class="date">Ngày đi: 28/03/2023</p>
                                </div>
                                <p class="price">444,000 VND</p>
                                <button class="btn-buy">Đặt Vé</button>
                            </div>
                            <div class="item">
                                <img src="./img/anh6.png" alt="">
                                <div class="item-text">
                                    <h3>Nha Trang (CXR) đến Hải Phòng (HPH) </h3>
                                    <p class="date">Ngày đi: 29/03/2023</p>
                                </div>
                                <p class="price">333,000 VND</p>
                                <button class="btn-buy">Đặt Vé</button>
                            </div>
                            <div class="item">
                                <img src="./img/anh8.png" alt="">
                                <div class="item-text">
                                    <h3>Hà Nội (HAN) đến Côn Đảo (VCS)</h3>
                                    <p class="date">Ngày đi: 30/03/2023</p>
                                </div>
                                <p class="price">222,000 VND</p>
                                <button class="btn-buy">Đặt Vé</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact -->