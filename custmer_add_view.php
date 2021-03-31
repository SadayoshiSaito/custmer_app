<!doctype html>
<html lang="ja">
  <head>
    <?php include __DIR__ . '/common/head.php';?>
  </head>
  <body>
    <header>
    <?php include __DIR__ . '/common//navbar.php';?>
    </headr>
    <div class="container">
      <h1 class="mt-4 pb-4 border-bottom">新規登録</h1>
      <form action="<?php print_link_uri('custmer_add.php'); ?>" method="POST">
        <div class="mt-4 offset-sm-3 col-sm-6 offset-sm-3">
          <div class="form-group">
            <h5 class="mt-3"><span class="col-form-label">氏名</span><span class="badge bg-danger">必須</span></h5>
            <input name="custmer_name" class="form-control form-control-lg" type="text" placeholder="山田　太郎">
            <?php if($custmer_name_error) { print '<p class="text-danger">' . $custmer_name_error_message . '</p>'; } ?>
          </div>
          <div class="form-group">
            <h5 class="mt-3"><span class="col-form-label">氏名（カナ）</span></h5>
            <input name="custmer_name_kana" class="form-control form-control-lg" type="text" placeholder="ヤマダ　タロウ">
          </div>
          <div class="form-group">
            <h5 class="mt-3"><span class="col-form-label">Eメール</span></h5>
            <input name="custmer_email" class="form-control form-control-lg" type="email" placeholder="xxxx@xxx.xxx">
          </div>
          <div class="form-group">
            <h5 class="mt-3"><span class="col-form-label">電話番号</span></h5>
            <input name="custmer_phone_number" class="form-control form-control-lg" type="text" placeholder="090-1234-5678">
          </div>
          <div class="row mt-5">
            <div class="col-sm-5">
              <button type="button" onclick="location.href='<?php print_link_uri('index.php'); ?>'" class="offset-sm-1 col-sm-11 btn btn-lg btn-secondary btn-block">戻る</button>
            </div>
            <div class="offset-sm-2 col-sm-5">
              <button type="submit" class="col-sm-11 btn btn-lg btn-primary" name="<?php print $button_naame; ?>">登録</button>
              <div class="offset-sm-1"></div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <?php include __DIR__ . '/common/body_under.php';?>
  </body>
</html>
