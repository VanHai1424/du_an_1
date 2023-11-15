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
                    <form action="index.php?act=search" class="tickets-form" method="POST">
                            <div class="box">
                                <label>FROM</label>
                                <select name="diemdi" id="" class="">
                                    <?php 
                                        foreach ($listDiaDiem as $value) {
                                            extract($value);
                                            echo '<option value="'.$id.'">'.$ten.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="box">
                                <label>TO</label>
                                <select name="diemden" id="" class="">
                                    <?php 
                                        foreach ($listDiaDiem as $value) {
                                            extract($value);
                                            echo '<option value="'.$id.'">'.$ten.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="box">
                                <label>DEPART</label>
                                <input name="ngaydi" type="date" class="from" min="<?= date('Y-m-d');?>">
                            </div>
                            <input type="submit" name="search" value="Search" class="btn-search">
                    </form>
                    <div class="tikets-buy">
                        <div class="row-item">
                            <?php 
                                $i = 1;
                                foreach ($listCbNew as $value) {
                                    extract($value);
                            ?>
                            <div class="item">
                                <img src="upload/<?= $img_den ?>" alt="ảnh lỗi">
                                <div class="item-text">
                                    <h3><?= $diem_di ?> đến <?= $diem_den ?></h3>
                                    <p class="date">Ngày đi: <?= date('d/m/Y', strtotime($ngay_khoi_hanh)) ?></p>
                                </div>
                                <a href="<?= (isset($_SESSION['user']) ? "index.php?act=datve&id=$id" : "index.php?act=dangnhap") ?>" class="btn-buy">Đặt Vé</a>
                            </div>
                            <?php if ($i % 4 == 0) { ?>
                                </div>
                                <div class="row-item">
                            <?php }
                                    $i++;
                                } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact -->