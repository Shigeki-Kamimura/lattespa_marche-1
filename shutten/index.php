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
                    LATEE+SPAビューティオンラインマルシェでは、「スクール」「ショップ」「ワークショップ(技術発信)」の３つに分けたジャンルで出展が可能です。
                </p>
                <div class="flexbox">
                    <div class="content">
                        <h4>スクール</h4>
                        <p>
                            インターネットを通じてオンラインレッスンを開講が可能です。「技術を発信したい・教えたい」とお考えの方はコチラです。
                        </p>
                        <div class="img_wrapper">
                            <img src="school.png" alt="school">
                        </div>
                    </div>
                    <div class="content">
                        <h4>ショップ</h4>
                        <p>
                            パーソナル用品やビューティーケア用品などが販売可能です。経営しているエステや美容院などで取り扱っている商品を販売してみませんか？(いくつか制約があります。)
                        </p>
                        <div class="img_wrapper">
                            <img src="shop.png" alt="shop">
                        </div>
                    </div>
                    <div class="content">
                        <h4>
                            ワークショップ<br>
                            (技術発信)
                        </h4>
                        <p>
                            参加者の主体性を重視した体験型の講座です。スクールに似ていますが、こちらは体験がメインになる出展になります。
                        </p>
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
                <div class="flexbox">
                    <div class="content">
                        <span>01</span><h4>出展申し込み</h4>
                        <p>
                            LATTE＋SPAのLINE公式アカウント、または、お問い合わせフォームから出展のお申し込みが可能です。
                        </p>
                    </div>
                    <div class="img_wrapper">
                        <img class="down" src="yajirushi_shita.png" alt="">
                    </div>
                    <div>
                        <img class="right" src="yajirushi_migi.png" alt="">
                    </div>
                    <div class="content">
                        <span>02</span><h4>個人ページ制作のための取材</h4>
                        <p>
                            販売を行う出展用ページ制作のために、出展者様に取材をさせて頂きます。(別途製作費として20,000円(税抜)を頂戴いたします)
                        </p>
                    </div>
                    <div class="img_wrapper">
                        <img class="down" src="yajirushi_shita.png" alt="">
                    </div>
                    <div>
                        <img class="right" src="yajirushi_migi.png" alt="">
                    </div>
                    <div class="content">
                        <span>03</span><h4>個人ページ制作・完成</h4>
                        <p>
                            出展用ページは運営会社側で制作を行わせて頂きます。その後、出展者様に確認して頂き、ページは完成という形になります。
                        </p>
                    </div>
                    <div class="img_wrapper">
                        <img class="down" src="yajirushi_shita.png" alt="">
                    </div>
                    <div>
                        <img class="right" src="yajirushi_migi.png" alt="">
                    </div>
                    <div class="content">
                        <span>04</span><h4>出展開始</h4>
                        <p>
                            出展用ページが完成し、公開したことで「出展」とさせて頂きます。ご購入様や参加者様との自由な出会いをお楽しみください。
                        </p>
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
                <p class="pink">
                    <img class="left" src="left_pink_light.png" alt="">
                    先着5件までは無料で実施！！
                    <img class="right" src="right_pink_light.png" alt="">
                </p>
                <p class="center">お早い出展がお得です。</p>
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
                <p>
                    ご留意事項を確認のうえ、下記のフォームに必要事項を入力し送信してください。<br>
                    <span>*マークは必須事項です</span>
                </p>
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