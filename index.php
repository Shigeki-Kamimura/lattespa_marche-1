<?php
$base = './';
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LATEE+SPA ビューティーオンラインマルシェ</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="">
<meta property="og:type" content="website">
<meta property="og:site_name" content="LATEE+SPA ビューティーオンラインマルシェ">
<meta property="og:url" content="https:///">
<meta property="og:title" content="トップページ">
<meta property="og:description" content="">
<meta property="og:image" content="https://">
<meta name="twitter:card" content="summary_large_image">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="<?= $base ?>style-ozawa.css">
<link rel="stylesheet" href="<?= $base ?>style-muramatsu.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php include_once('./header.php'); ?>
    <main>
        <div class="fv">
            <img class="pc" src="fv_pc.png" alt="">
            <img class="smart_1" src="fv_smart_1.png" alt="">
            <img class="smart" src="fv_smart.png" alt="">
            <img class="open" src="fv_open.png" alt="">
            <a class="btn" href="./shutten">
                出展者募集中！
                <img class="arrow" src="yajirushi.png" alt="">
            </a>
        </div>
        <section id="intro">
            <div class="group">
                <h1>
                    様々な分野の<br>
                    <span>美</span> が集まる<br>
                    <span>自由</span> な空間
                </h1>
                <p>
                    ここでは、そもそも「LATEE+SPAビューティオンラインマルシェ」とは何かの紹介を紹介を100字程度で行う。
                </p>
            </div>
            <a class="btn" href="./shutten">
                出展者募集中！
                <img class="arrow" src="yajirushi.png" alt="">
            </a>
        </section>
    </main>
<?php include_once('./footer.php'); ?>
</body>
</html>