$(function(){

    $('a[href^="#"]').click(function(){
        var adjust = -50;
        var speed = 400;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top + adjust;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
});

$(function() {
    $(".schedule_date ").click(function() {
        let id = $(this).attr("id");
        $(".schedule_date").removeClass("active");
        $(this).addClass("active");
        $(".description_text").removeClass("active");
        $("#"+id+"_description").addClass("active");
    });
});

// ハンバーガーメニューの開閉とリンククリック時の処理
$(".hamburger_menu").click(function () {
    $(this).toggleClass('active');
    $('.nav-hamburger_menu').toggleClass('active');
    $(".nav").slideToggle();
});

// ナビゲーションリンクがクリックされたときの処理
$(".nav_link, nav a").click(function () {
    // ハンバーガーメニューが表示されている場合のみ閉じる
    if ($(".hamburger_menu").is(":visible")) {
        $(".hamburger_menu").removeClass('active');
        $('.nav-hamburger_menu').removeClass('active');
        $(".nav").slideUp();
    }
});

$(document).ready(function() {
    const $form = $('form');
    const $submitButton = $form.find('input[type="submit"]');

    // 送信ボタンを初期状態で非活性化
    $submitButton.prop('disabled', true).css('opacity', '0.5');
    
    validateForm();

    function validateForm() {
        let isValid = true;

        // 名前のバリデーション
        const name = $('input[name="name"]').val().trim();
        if (name === '') {
            isValid = false;
        }

        // メールアドレスのバリデーション
        const email = $('input[name="email"]').val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            isValid = false;
        }

        // 電話番号のバリデーション（入力された場合のみ）
        const tel = $('input[name="tel"]').val().trim();
        const telRegex = /^0\d{9,10}$/;
        if (tel !== '' && !telRegex.test(tel)) {
            isValid = false;
        }

        // 席の選択のバリデーション
        const seat = $('#seat').val();
        if (seat === '') {
            isValid = false;
        }

        // 送信ボタンの活性化/非活性化
        if (isValid) {
            $submitButton.prop('disabled', false).css('opacity', '1');
        } else {
            $submitButton.prop('disabled', true).css('opacity', '0.5');
        }
    }

    // フォームの入力要素にイベントリスナーを追加
    $form.find('input, select').on('input change', validateForm);

    // フォーム送信時の最終チェック
    $form.on('submit', function(e) {
        validateForm();
        if ($submitButton.prop('disabled')) {
            e.preventDefault();
            alert('フォームに入力漏れまたは誤りがあります。確認してください。');
        }
    });
});


