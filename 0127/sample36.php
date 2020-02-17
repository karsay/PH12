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

  // ログイン画面から受け取り
  $stdId = $_POST["cus_id"];
  $stdPass = $_POST["cus_pas"];
  $strName = $_POST['cus_name'];

  // $strSQL = "insert into meibo_tbl(cus_id, cus_pas, cus_name) ";

  //SQL文の作成
  $strSQL = "insert into meibo_tbl(cus_id, cus_pas, cus_name) ";
  $strSQL .= "values('".$stdId."','".$stdPass."','".$strName."')" ;

  // SQL文を実行する
  $db_result = mysqli_query($db_link, $strSQL);

  if($db_result == false) {
    //insertの失敗
    $msg = "顧客登録が失敗しました" .$strSQL;
  } else {
    // 成功
    $msg = "顧客登録が完了しました";
  }
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
  <title>名簿追加</title>
</head>

<body>

  <h1>顧客登録</h1>
  <br><br>
  <?php
    print $msg;
  ?>
  <a href="sample35.php">登録画面に戻る</a>
</body>

</html>