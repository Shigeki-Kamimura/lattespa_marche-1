<?php
//顧客名、タイトルサブジェクト、電話番号、投稿フォームの項目をここで用意する
$company_name = 'LATEE+SPA ビューティーオンラインマルシェ';
$title_sub = '|';
$company_tel = '03-6206-0043';
$company_mail = 'kamimura@nextreservation.jp';
//投稿項目を定義し、エラーチェックと表示に用いる
$input_list = [
	['name' => 'company_name', 'label' => '会社・サロン名', 'required' => true],
	['name' => 'name', 'label' => '氏名', 'required' => true],
	['name' => 'email', 'label' => 'メールアドレス', 'required' => false],
	['name' => 'tel', 'label' => '電話番号', 'required' => true],
];

foreach ($input_list as $data) {
	// 入力項目が定義リストと一致しない場合
	if ( !isset($_POST[$data['name']]) ) {
			echo "{$data['name']}は定義されていません。お手数ですが最初からやり直してください。";
			exit;
	}

	// 必須項目が空の場合
	if ($data['required'] === true && empty($_POST[$data['name']])) {
			echo "{$data['label']}は必須項目です。ご確認の上、再度投稿してください。";
			exit;
	}
}