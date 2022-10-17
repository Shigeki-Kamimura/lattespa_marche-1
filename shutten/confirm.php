<?php
$base = '../';
require_once('./contact_header.php');
require_once('./contact-libs.php');

/*
不正なアクセスはリダイレクトさせる
*/
// POST送信でない場合
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ./', true, 303);
    exit;
}
?>
<html lang="ja">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>出展者向けページ - LATEE+SPA ビューティーオンラインマルシェ</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="">
<meta property="og:type" content="website">
<meta property="og:site_name" content="LATEE+SPA ビューティーオンラインマルシェ-出展者向けページ">
<meta property="og:url" content="https:///">
<meta property="og:title" content="出展者向けページ">
<meta property="og:description" content="">
<meta property="og:image" content="https://">
<meta name="twitter:card" content="summary_large_image">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="<?= $base ?>style-ozawa.css">
<link rel="stylesheet" href="<?= $base ?>style-muramatsu.css">
<link rel="stylesheet" href="style-shutten.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">
<meta name="robots" content="noindex">
<script>
// function onSubmit(token) {
//     if(document.getElementById("contact-form").reportValidity()) {
//         document.getElementById("contact-form").onsubmit();
//     }
//}
</script>
</head>
<body>
    <?php include_once($base . 'header.php') ?>
<div id="main-content">
    <main id="main-column" class="basic_block contact_by_form submit_page">
        <h1>入力内容のご確認</h1>
        <div class="content">
            <p>入力内容についてご確認いただき、よろしければ<span class="font_bold">「送信する」</span>を押してください。</p>
            <p>修正したい場合は、「入力内容を修正」を押してください</p>
        </div>
        <form action="./submit.php" id="contact-form" method="post">
<?php foreach($input_list as $data) { //フォームで入力された項目をhiddenフィールドに格納 ?>
            <input type="hidden" name="<?= h($data['name']) ?>" value="<?= h($_POST[$data['name']]) ?>">
<?php } ?>
            <dl class="form_list">
<?php foreach($input_list as $data) { //フォームで入力された項目の表示?>
                <div>
                    <dt><?= $data['label'] ?></dt>
                    <dd><?= !empty($_POST[$data['name']]) ? nl2br(h($_POST[$data['name']])) : '（入力なし）'?></dd>
                </div>
<?php } ?>
            </dl>
            <div class="btn_wrapper">
                <button class="btn_1 fix_btn" type="button" onclick="history.back();">入力内容を修正</button>
                <button class="btn_1 submit_btn g-recaptcha" data-sitekey="" data-callback="onSubmit" data-action="submit" type="submit">送信する</button>
            </div>
        </form>
    </main>
    <?php include_once($base . 'footer.php') ?>
</div>
</body>