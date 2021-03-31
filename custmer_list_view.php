<!doctype html>
<html lang="ja">
  <head>
    <?php include __DIR__ . '/common/head.php';?>
  </head>
  <body>
    <header>
      <?php include __DIR__  . '/common/navbar.php';?>
    </headr>
    <div class="container">
      <div class="mt-3">
        <a href="<?php print_link_uri('custmer_add.php'); ?>"><button type="button" class="btn btn-primary">新規会員登録</button></a>
      </div>       
      <div class="table-responsive">
      <table class="table table-hover">
          <thead>
          <tr>
              <th>顧客ID</th>
              <th>氏名</th>
              <th>氏名（カナ）</th>
              <th>メール</th>
              <th>電話番号</th>
              <th>登録日時</th>
              <th></th>
          </tr>
          </thead>
          <tbody id="tbl">
            <?php
              if ($result) 
              {
                while ($record = mysqli_fetch_assoc($result)) {
                  $custmer_id = $record['id'];
            ?>
                <tr>
                    <td><a href="<?php print_link_uri('custmer_show.php?id=' . $custmer_id); ?>"><?php print $custmer_id; ?></a></td>
                    <td><?php print_data($record['custmer_name']); ?></td>
                    <td><?php print_data($record['custmer_name_kana']); ?></td>
                    <td><?php print_data($record['custmer_email']); ?></td>
                    <td><?php print_data($record['custmer_phone_number']); ?></td>
                    <td><?php print_data($record['created_at']); ?></td>
                    <td>
                      <form action="<?php print_link_uri('index.php'); ?>" method="post">
                        <input type="hidden" name="id" value="<?php print $custmer_id; ?>">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" name="delete_custmer" class="btn btn-danger btn-sm" value="削除">
                      </form>
                    </td>
                </tr>
            <?php   
              }
            }
            ?>
          </tbody>
      </table>
      </div>
    </div>
    <?php include __DIR__  . '/common/body_under.php';?>
  </body>
</html>
