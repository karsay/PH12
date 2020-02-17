<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
?>
<?php
  include("db_ini.php");

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
  <title>名簿更新確認</title>
</head>

<body>

  <h1>投稿更新確認</h1>
  <br /><br />
  <?php

    $strDel = $_POST['str_del'];
    $bbsNo = $_POST['str_bbs'];

    // sql文の作成
    $strSQL = " select * from bbs_tbl where bbs_no = ".$bbsNo; 
    // SQL分の実行
    $db_result = mysqli_query($db_link, $strSQL);
    $db_row = mysqli_fetch_array($db_result);
    $name = $db_row["bbs_name"];
    $title = $db_row["bbs_title"];
    $date = $db_row["bbs_date"];
    $delkey = $db_row["bbs_delkey"];

    if($db_row['bbs_delkey'] === $strDel) {
      $msg = "
              <h3>投稿内容</h3>
                <form action='bbs_upd.php' method='post'>
                <input type=hidden name='bbsNo' value='$bbsNo'>
                <input type='text' name='name' value='$name'><br><br>
                <textarea name='title' rows=4 cols=40>$title</textarea><br><br>
                <input type='text' name='delkey' value='$delkey'><br><br>
                <input type='submit' value='更新する' name='subDel'>
              </form>";
    } else {
      $msg = "削除キーが間違っています";
    }
    //MySqlサーバ切断
    mysqli_close($db_link);

    print $msg;
  ?>
  <br /><br />
  
  <br /><br />
  <a href="bbs_show.php">投稿一覧へ戻る</a>
</body>
<style>
  * {
    text-align: center;
  }
</style>

</html>