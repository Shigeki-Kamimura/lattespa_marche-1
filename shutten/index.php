<?php
$base = '../';
?>
<html lang="ja">
<head>
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
<link rel="stylesheet" href="<?= $base ?>style-muramatsu.css">
<link rel="stylesheet" href="style-shutten.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php include_once($base . 'header.php'); ?>
    <main>
        <div class="fv">
            <img src="" alt="">
            <h1>出展者向けページ</h1>
            <h2>
                <span>LATEE+SPAビューティオンラインマルシェ</span><br>
                に出展してみませんか？
            </h2>
        </div>
        <section id="genre">
            <h3>こんな出展ができます！</h3>
            <p>
                LATEE+SPAビューティオンラインマルシェでは、「スクール」「ショップ」「ワークショップ(技術発信)」の３つに分けたジャンルで出展が可能なことを紹介する。(80字程度)
            </p>
            <div class="flexbox">
                <div>
                    <h4>スクール</h4>
                    <p>文章が入ります。</p>
                    <img src="" alt="">
                </div>
                <div>
                    <h4>ショップ</h4>
                    <p>文章が入ります。</p>
                    <img src="" alt="">
                </div>
                <div>
                    <h4>
                        ワークショップ<br>
                        (技術発信)
                    </h4>
                    <p>文章が入ります。</p>
                    <img src="" alt="">
                </div>
            </div>
        </section>
        <section id="flow">
            <h3>出展の流れ</h3>
        </section>
        <section id="campaign">
            <h3>現在、キャンペーン中！</h3>
        </section>
        <section id="attention">
            <h3>出展する上での注意事項</h3>
        </section>
        <section id="form">
            <h3>ご出展申し込みフォーム</h3>
        </section>
    </main>
<?php include_once($base . 'footer.php'); ?>
</body>
</html>