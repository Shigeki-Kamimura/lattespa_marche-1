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

// reCAPTCHAによる検証
$err = [];

//recaptchaの取得
$recaptcha_code = $_POST['g-recaptcha-response'];

//recaptchaコードが検出されなければindexへリダイレクト
//  if(empty($recaptcha_code)) {
//      header('Location: ./', true, 303);
// }

$secret_recaptcha_code = '';
$res = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret_recaptcha_code}&response={$recaptcha_code}");

if(empty($res)) {
    $err[] = 'reCAPTCHAの検証に失敗しました。';
} else {
    $res_result = json_decode($res, true);
    if(!$res_result['success']) {
        $err[] = 'reCAPTCHAの検証に問題があります。：'. $res_result['error-codes'];
    }
}

//エラーがあった場合はリダイレクト
// if(count($err) > 0 ) {
//    header('Location: ./', true, 303);
//    exit;
// }

//送信内容の成形
$post_input_items = [];
foreach($input_list as $data) {
    //非必須項目について、未入力の場合は代替テキストを入れる
    if(!$data['required'] && empty($_POST[$data['name']])) {
        $post_input_items[$data['label']] = '（入力なし）';

        //それ以外は送信された値を入れる
    } else {
        $post_input_items[$data['label']] = $_POST[$data['name']];
    }
}

$input_content = "\r\n-----\r\n";
foreach($post_input_items as $label => $value) {
    $input_content .= "【{$label}】\r\n{$value}\r\n";
}
$input_content .= "\r\n-----\r\n\r\n";

//メール送信の実行
mb_language('Japanese');
mb_internal_encoding('utf-8');

//お問い合わせメールに用いるアドレス
$from = 'no-reply@lattespa.com';
$reply = $_POST['email'];
$bcc = 'info@nextreservation.jp';

//お問い合わせメールの送信
// To
$to = $company_mail;
$mime_header = mb_encode_mimeheader($company_name, 'iso-2022-jp');

// Header
$header =<<< EOM
From: {$mime_header}<{$from}>
Reply-To: {$reply}
BCC: {$bcc}
EOM;

//Subject
$subject = "【{$company_name} ホームページからお問い合わせがありました。】";

//メール本文
$message =<<< EOM
{$company_name}のお問い合わせページから下記のようにお問い合わせがありました。
内容をご確認の上、ご対応をよろしくお願いいたします。

EOM;
$message .= brReplace(periodReplace($input_content));
$mime_header = mb_encode_mimeheader($company_name, 'iso-2022-jp');

//ホームページから会社へのメール
$contact_complete = mb_send_mail($to, $subject, $message, $header);

// ホームページからお問い合わせ者
    //To
    $to = $_POST['email'];
    $mime_header = mb_encode_mimeheader($company_name, 'iso-2022-jp');  //ヘッダーのカナ漢字を7ビット文字列に変換

        // Header
        $header ="From: {$mime_header}<{$from}>";
        // Subject
        $subject = "{$company_name}ホームページよりお問い合わせいただきありがとうございます。";
        
        // メール本文
$message = <<<EOM
この度はホームページよりお問い合わせいただき、ありがとうございます。
下記の通りお問い合わせ内容を承りましたので、今一度ご確認ください。
    
EOM;
$to = $_POST['email'];

// メール本文
$message = <<<EOM
この度はホームページよりお問い合わせいただき、ありがとうございます。
下記の通りお問い合わせ内容を承りましたので、今一度ご確認ください。

EOM;
$message .= brReplace(periodReplace($input_content));

/***** ユーザーへの返信メール(ありがとうメール)のSubmit *****/
$contact_complete_user = mb_send_mail($to, $subject, $message, $header);
?>
<html lang="ja">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $contact_complete ? 'お問い合わせありがとうございます' : 'お問い合わせの送信に失敗しました' ?> - お問い合わせ - <?= $company_name ?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="<?=$company_url ?>submit.php">
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
</head>
<body onload="showEmail();">
<?php include_once($base. 'header.php') ?>
<main>
  <section class="line_img first_content end_content" id="submit_content">
    <div class="basic_block">
      <h1><?= $contact_complete ? 'お問い合わせが完了しました' : 'お問い合わせの送信に失敗しました' ?></h1>
<?php if ($contact_complete) { ?>
        <p>この度はホームページよりお問い合わせいただき、ありがとうございます。</p>
    <?php if ($contact_complete_user) { ?>
        <p>ご入力されたメールアドレス宛に確認メールを送信いたしましたので、ご確認ください。</p>
    <?php } ?>
        <p>後日、改めてご連絡させていただきますのでしばらくお待ちください。</p>
<?php } else { ?>
        <p>お問い合わせの送信に失敗しました。</p>
        <p>お手数ですが、下記のお問い合わせ方法からお問い合わせください。</p>
        <p>
            電話番号: <a href="tel:<?= h($company_tel) ?>"><?= h($company_tel) ?></a>
        </p>
        <p>
            FAX: 0268-39-8233
        </p>
        <p>
            メールアドレス: <a id="mail_link"></a>
        </p>
        </div>
<?php } ?>
        <a href="./" class="btn_2">お問い合わせページへ</a>
        <a href="../" class="btn_2">トップページへ</a>
    </div>
  </section>
<?php include_once($base. 'footer.php') ?>
<script src="./m.js"></script>
</body>