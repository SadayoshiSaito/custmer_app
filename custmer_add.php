<?php
  require_once(__DIR__ . '/../models/custmer.php');
  require_once(__DIR__ . '/common_function.php');

  /** 登録ボタン文字列 */
  define("ADD_BUTTON", "add_button");

  $button_naame = ADD_BUTTON;

  $custmer_name_error = false;
  $custmer_name_error_message = "";
  
  // 登録ボタンが押されたのであれば登録処理を行う
  if (array_key_exists($button_naame, $_POST))
  {
    // 入力チェック

    // 氏名
    if (empty($_POST['custmer_name']))
    {
      $custmer_name_error = true;
      $custmer_name_error_message = "氏名は必須入力です。";
    }

    if (!$custmer_name_error)
    {
      // 登録処理
      add_custmer();

      // トップページに戻る
      $url = get_link_uri('index.php');
      header('Location: ' . $url, true , 301);
      exit;
    }
  }
  
  // 画面表示部分の読み込み
  include __DIR__ . '/views/custmer_add_view.php';

?>

