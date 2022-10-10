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
<link rel="stylesheet" href="<?= $base ?>style-ozawa.css">
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
            <div class="img_wrapper">
                <img src="pink_border.png" alt="">
            </div>
            <h1>出展者向けページ</h1>
            <h2>
                <img class="left" src="left_pink_dark.png" alt="">
                <span>LATEE+SPAビューティオンラインマルシェ</span><br>
                に出展してみませんか？
                <img class="right" src="right_pink_dark.png" alt="">
            </h2>
        </div>
        <section id="genre">
            <div class="bg_white">
                <h3>こんな出展ができます！</h3>
                <p>
                    LATEE+SPAビューティオンラインマルシェでは、「スクール」「ショップ」「ワークショップ(技術発信)」の３つに分けたジャンルで出展が可能なことを紹介する。(80字程度)
                </p>
                <div class="flexbox">
                    <div class="content">
                        <h4>スクール</h4>
                        <p>文章が入ります。</p>
                        <div class="img_wrapper">
                            <img src="school.png" alt="school">
                        </div>
                    </div>
                    <div class="content">
                        <h4>ショップ</h4>
                        <p>文章が入ります。</p>
                        <div class="img_wrapper">
                            <img src="shop.png" alt="shop">
                        </div>
                    </div>
                    <div class="content">
                        <h4>
                            ワークショップ<br>
                            (技術発信)
                        </h4>
                        <p>文章が入ります。</p>
                        <div class="img_wrapper">
                            <img src="work_shop.png" alt="work_shop">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="flow">
            <div class="bg_white">
                <h3>出展の流れ</h3>
                <div>
                    <div class="content">
                        <span>01</span><h4>出展申し込み</h4>
                        <p>文章が入ります。</p>
                    </div>
                    <img src="" alt="">
                    <div class="content">
                        <span>02</span><h4>個人ページ制作のための取材</h4>
                        <p>文章が入ります。</p>
                    </div>
                    <img src="" alt="">
                    <div class="content">
                        <span>03</span><h4>個人ページ制作・完成</h4>
                        <p>文章が入ります。</p>
                    </div>
                    <img src="" alt="">
                    <div class="content">
                        <span>04</span><h4>出展開始</h4>
                        <p>文章が入ります。</p>
                    </div>
                </div>
                <p class="check">ご出展を申し込む前に注意事項をご確認ください。</p>
                <a class="btn" href="">
                    確認する
                    <img class="arrow" src="<?= $base ?>yajirushi.png" alt="">
                </a>
            </div>
        </section>
        <section id="campaign">
            <div class="bg_white">
                <h3>現在、キャンペーン中！</h3>
                <p>LATEE+SPAビューティオンラインマルシェ初開催を記念して、出展・取材費用として2万円かかるところが...</p>
                <p>先着5件までは無料で実施！！</p>
                <a class="btn" href="">
                    お問い合わせへ
                    <img class="arrow" src="<?= $base ?>yajirushi.png" alt="">
                </a>
            </div>
        </section>
        <section id="attention">
            <div class="bg_white">
                <h3>出展する上での注意事項</h3>
            </div>
        </section>
        <section id="form">
            <div class="bg_white">
                <h3>ご出展申し込みフォーム</h3>
                <a class="btn" href="">
                    確認する
                    <img class="arrow" src="<?= $base ?>yajirushi.png" alt="">
                </a>
            </div>
        </section>
    </main>
<?php include_once($base . 'footer.php'); ?>
</body>
</html>