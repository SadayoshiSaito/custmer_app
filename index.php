<?php

  require_once(__DIR__ . '/../models/custmer.php');
  require_once(__DIR__ . '/common_function.php');

  // 一覧データ取得
  $result = get_custmer_list();

  // 画面表示部分の読み込み
  include __DIR__ . '/views/custmer_list_view.php';

?>

