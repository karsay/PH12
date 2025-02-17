<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");

function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
?>
<?php
//  処理部
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
  <title>ログイン認証</title>
</head>

<body>
  <?php
  //  表示部

  include("db_ini.php");

  //MySqlサーバ接続
  $db_link = mysqli_connect($host, $user, $pass);

  if ($db_link == false) {
    print "MySqlサーバー接続に失敗しました。";
    exit;
  }

  //charset指定
  mysqli_set_charset($db_link, "utf8");

  //データベース接続
  $db_flg = mysqli_select_db($db_link, $db_name);

  if ($db_flg == false) {
    print "データベース接続に失敗しました。";
    exit;
  }

  // ログイン画面から受け取り
  $stdId = $_POST["txtID"];
  $stdPass = $_POST["txtPASS"];

  //SQL文の作成
  // $strSQL  = " select * from meibo_tbl where cus_id = '$stdId' and cus_pas = '' or A '";
  $strSQL = " SELECT cus_pas, cus_name, cus_id FROM meibo_tbl WHERE cus_id = '$stdId'";
  //SQL文を実行する。
  $db_result = mysqli_query($db_link, $strSQL);
  //取得したデータ件数を調べる
  $db_cnt = mysqli_num_rows($db_result);
  //一致したレコードを取得
  $db_row = mysqli_fetch_array($db_result);
  // 入力されたIDと取得されたレコードのIDを比較
  if ($db_row["cus_id"] === $stdId) {
    // パスワードが一致したら実行
    if ($db_row["cus_pas"] === $stdPass) {
      print "ようこそ" . $db_row["cus_name"] . "さん";
    } else {
      // パスワードが違うとき
      print "<font color=red>";
      print "パスワードが違います";
      print "</font>";
    }
  } else {
    //入力されたIDと取得されたレコードのIDが違うとき
    print "<font color=red>";
    print "IDが違います";
    print "</font>";
  }

  mysqli_free_result($db_result);
  //MySqlサーバ切断
  mysqli_close($db_link);

  ?>

</body>

</html>