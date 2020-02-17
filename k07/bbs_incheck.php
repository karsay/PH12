<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
?>
<?php
  include("db_ini.php");

  //タイムゾーンの指定s
  date_default_timezone_set('Asia/Tokyo');

  //MySqlサーバ接続
  $db_link = mysqli_connect($host, $user, $pass);

  if ($db_link == false) {
    print "MySqlサーバー接続に失敗しました。";
    exit;
  }

  //データベース接続
  $db_flg = mysqli_select_db($db_link, $db_name);

  if ($db_flg == false) {
    print "データベース接続に失敗しました。";
    exit;
  }

  //charset指定
  mysqli_set_charset($db_link, "utf8");

  // 投稿画面から受け取り
  $name = $_POST["post-name"];
  $title = $_POST["post-title"];
  $ddlkey = $_POST['post-delkey'];
  $date = date("Y/m/d H:i:s");

  // $selectSQL = "select cus_id from meibo_tbl";
  // $db_result = mysqli_query($db_link, $selectSQL);
  // $flag = true;

  //MySqlサーバ切断
  mysqli_close($db_link);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta http-equiv="content-script-type" content="text/javascript" />
  <meta http-equiv="content-style-type" content="text/css" />
  <!--  StyleSheet記述
<link rel="stylesheet" href="./css/main.css" type="text/css" media="all" />
StyleSheet記述  -->
  <!-- PAGE TITLE -->
  <title>投稿確認</title>
</head>

<body>
  <br>
  <h1>投稿確認画面</h1>
  <br>
  <h2>こちらの内容で投稿しますか？</h2>
  <br>
  ハンドルネーム: <?php print $name ?>
  <br><br>
  投稿内容: <?php print $title ?>
  <br><br>
  削除キー: <?php print $ddlkey ?>
  <br><br>
  <form action="bbs_out.php" method="post">
    <input type="hidden" value="<?php print $name ?>" name="name">
    <input type="hidden" value="<?php print $title ?>" name="title">
    <input type="hidden" value="<?php print $date ?>" name="date">
    <input type="hidden" value="<?php print $ddlkey ?>" name="ddlkey">
    <input type="submit" value="書き込み" name="submit">
  </form>
  <br>
  <a href="bbs_in.php">投稿画面に戻る</a>
</body>
<style>
 * {
   text-align:  center;
   margin: 0 auto;
 }
</style>
</html>