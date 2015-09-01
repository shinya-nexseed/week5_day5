<?php
    // 外部phpファイルの読み込み
    // 大きなサービスになってくると、機能ごとにファイルをわけ、
    // 必要なタイミングでrequireする実装が多くなります。
    require('../dbconnect.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>会員登録</title>
</head>
<body>
  <h1>会員登録</h1>
  <p>次のフォームに必要事項をご記入下さい。</p>
  <!-- 自分自身にデータを送信したい場合はactionを空にしても良い -->
  <!-- 画像ファイルなどを送信する際は、enctypeが必要 -->
  <form action="" method="post" enctype="multipart/form-data">
    <dl>
      <dt>ニックネーム</dt>
      <dd><input type="text" name="name" size="35" maxlength="255"></dd>

      <dt>メールアドレス</dt>
      <dd><input type="text" name="email" size="35" maxlength="255"></dd>

      <dt>パスワード</dt>
      <dd><input type="password" name="password" size="10" maxlength="20"></dd>

      <dt>写真など</dt>
      <dd><input type="file" name="image" size="35" value="test"></dd>
    </dl>
    <div><input type="submit" value="入力内容を確認する"></div>
  </form>
</body>
</html>
