<?php include(dirname(__FILE__) . '/header.php'); ?>

<div class="kv">
        <!-- Slider main container -->
        <div class="swiper">
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="./img/slide_1.jpg" alt="画像1">    
                </div>
                <div class="swiper-slide">
                    <img src="./img/slide_2.jpg" alt="画像2">    
                </div>
                <div class="swiper-slide">
                    <img src="./img/slide_3.jpg" alt="画像3">    
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev custom-swiper-button">
                <img src="./img/slide-btn-prev.svg" alt="前へ">
            </div>
            <div class="swiper-button-next custom-swiper-button">
                <img src="./img/slide-btn-next.svg" alt="次へ">
            </div>
        </div>
    </div>
    <div class="copy">
        <p>今年も始まる<span class="red-text">夏祭り</span></p>
    </div>
    <div class="schedule_content" id="schedule">
        <p class="schedule">スケジュール</p>
        <div class="schedule_menu">
            <div class="schedule_date active" id="sep1st">
                <p>9月1日</p>
            </div>
            <div class="schedule_date" id="sep2nd">
                <p>9月2日</p>
            </div>
            <div class="schedule_date" id="sep3rd">
                <p>9月3日</p>
            </div>
        </div>
        <div class="description">
            <p class="description_text active" id="sep1st_description">
                9月1日の内容9月1日の9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容
            </p>
            <p class="description_text" id="sep2nd_description">
                9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容
            </p>
            <p class="description_text" id="sep3rd_description">
                9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容
            </p>
        </div>
    </div>

    <div class="access" id="access">
        <p class="access_title">アクセス</p>
        <p class="address">〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
    </div>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6607.067709903906!2d134.51810734389923!3d34.107080192545055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553725a43298fb3%3A0x1bc47188f8f9226a!2z44CSNzcxLTExNTQg5b6z5bO255yM5b6z5bO25biC5b-c56We55S65p2x6LKe5pa55Y2X5bed5re1!5e0!3m2!1sja!2sjp!4v1720594626899!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="reserve" id="reserve">
        <p class="reserve_title">席予約</p>
        <form action="./confirm.php" method="post">
            <div class="form">
                <label for="name">お名前<span class="required">*必須</span></label>
                <input type="text" name="name" placeholder="例）田中太郎" required value="<?= $_POST["name"] ?>">
            </div>
            <div class="form">
                <label for="seat">席の場所<span class="required">*必須</span></label>
                <select name="seat" id="seat" required>
                    <option value="">---</option>
                        <?php
                        $seats = array ("SS席","S席","A席","B席","C席");
                        foreach ($seats as $seatOption) {
                            ?>
                            <option <?= $_POST["seat"]  == $seatOption ? "selected" : "" ?> value="<?= $seatOption ?>"><?= $seatOption ?></option>
                            <?php
                        }
                        ?>
                </select>  
            </div>
            <div class="form">
                <label for="email">メールアドレス<span class="required">*必須</span></label>
                <input type="text" name="email" placeholder="例）abcd123@example.com" required value="<?= $_POST["email"] ?>">
            </div>   
            <div class="form">
                <label for="tel">電話番号<span>*任意</span></label>
                <input type="text" name="tel" placeholder="例）09012345678" value="<?= $_POST["tel"] ?>">            
                <p class="error-message"></p>
            </div>
            <input type="submit" value="送信" disabled class="submit-button"> 
        </form> 
    </div>

<?php include(dirname(__FILE__) . '/footer.php'); ?>
