<!doctype html>
<html lang="ja">
  <head>
    <?php include __DIR__ . '/common/head.php';?>
  </head>
  <body>
    <header>
    <?php include __DIR__ . '/common/navbar.php';?>
    </headr>
    <div class="container">
      <h1 class="mt-4 pb-4 border-bottom">顧客情報</h1>
      <div class="mt-4 offset-sm-3 col-sm-6 offset-sm-3">
        <h5 class="mt-3"><span class="col-form-label">氏名</span></h5>
        <div class="bg-light">
          <span class="display-4">山田太郎</span>
        </div>
        <h5 class="mt-4"><span class="col-form-label">氏名（カナ）</span></h5>
        <div class="bg-light">
          <span class="display-4">ヤマダタロウ</span>
        </div>
        <h5 class="mt-4"><span class="col-form-label">Eメール</span></h5>
        <div class="bg-light">
          <span class="display-4">xxxx@xxx.xxx</span>
        </div>
        <h5 class="mt-4"><span class="col-form-label">電話番号</span></h5>
        <div class="bg-light">
          <span class="display-4">090-1234-5678</span>
        </div>
        <div class="row mt-5">
          <div class="col-sm-5">
            <button type="button" onclick="location.href='<?php print_link_uri('index.php'); ?>'" class="offset-sm-1 col-sm-11 btn btn-lg btn-secondary btn-block">戻る</button>
          </div>
          <div class="offset-sm-2 col-sm-5">
            <button type="button" onclick="location.href='<?php print_link_uri('custmer_add.php?id=1'); ?>'" class="col-sm-11 btn btn-lg btn-primary btn-block">編集する</button>
            <div class="col-sm-1"></div>
          </div>
        </div>
    </div>
    <?php include __DIR__ . '/common/body_under.php';?>
  </body>
</html>
