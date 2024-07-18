<?php include(dirname(__FILE__) . '/header.php'); ?>
    <div class="confirm_page">
        <div class="confirm">
            <p class="confirm_title">お問い合わせ内容確認</p>
            <div class="confirm_content">
                <p>お名前</p>
                <p><?php echo $_POST["name"] ?></p>
            </div>
            <div class="confirm_content">
                <p>希望席</p>
                <p><?php echo $_POST["seat"] ?></p>
            </div>
            <div class="confirm_content">
                <p>メールアドレス</p>
                <p><?php echo $_POST["email"] ?></p>
            </div>
            <div class="confirm_content">
                <p>電話番号</p>
                <p><?php echo $_POST["tel"] ?></p>
            </div>
        </div>
        <form class="confirm_form" method="post">
            <input type="hidden" name="name" value="<?= $_POST["name"] ?>">
            <input type="hidden" name="seat" value="<?= $_POST["seat"] ?>">
            <input type="hidden" name="email" value="<?= $_POST["email"] ?>">
            <input type="hidden" name="tel" value="<?= $_POST["tel"] ?>">
            <button class="button back" type="subumit back" formaction="./index.php#reserve">戻る</button>
            <button class="button" type="subumit" id="submit" formaction="./thanks.php">送信</button>
        </form>
    </div>
<?php include(dirname(__FILE__) . '/footer.php'); ?>
