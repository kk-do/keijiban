<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=kudo02;host=localhost;","root","root");
$stmt = $pdo->query("select*from 4each_keijiban");


?>
<header>
<div class="logo"><img src="./4eachblog_logo.jpg"></div>

    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>

  <!--ここからメインコンテンツ-->
  <main>
    <div class="main-container">
      <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
        <div class="form">
          <h2>入力フォーム</h2>
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
          </div>
          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
          </div>
          <div>
            <label>コメント</label>
            <br>
            <textarea cols="60" rows="7" name="comments"></textarea>
          </div>
          <div>
            <input type="submit" class="submit" value="送信する">
          </div>
        </div>


<?php
while($row = $stmt->fetch()){
  echo "<div class='kiji'>";
  echo "<h3>".$row['title']."</h3>";
  echo "<div class='kijinaka'>";
  echo $row['comments'];
  echo "<div class='handlename'>posted by".$row['handlename']."</div>";
  echo "</div>";
  echo "</div>";
}
?>


      </div>
    </div>
  </form>

    <div class="right">
      <h4>人気の記事</h4>
      <ul>
        <li>PHPおススメ本</li>
        <li>PHP　MyAdminの使い方</li>
        <li>いま人気のエディタ</li>
        <li>HTMLの基礎</li>
      </ul>
      <h4>オススメリンク</h4>
      <ul>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Braketsのダウンロード</li>
      </ul>
      <h4>カテゴリ</h4>
      <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
      </ul>
    </div>
    </div>
  </main>

  <!--ここからfooter-->
  <footer>
    copyright internous | 4each blog is the one which provides A to Z about programing.
  </footer>
</body>
