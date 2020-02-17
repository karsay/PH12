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
  $strNo = $_POST['cus_no'];

  // sql文の作成
  $strSQL = " delete from meibo_tbl where cus_no = ".$strNo; 

  // SQL分の実行
  $db_result = mysqli_query($db_link, $strSQL);

  if($db_result == false){
    //deleteの失敗
    $msg = "名簿削除が失敗しました" .$strSQL;
  } else {
    // deleteの成功
    $msg = "名簿削除が完了しました。";
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
  <title>名簿削除</title>
</head>

<body>

  <h1>顧客削除</h1>
  <br /><br />
  <?php
    print $msg;
  ?>
  <br /><br />
  <a href="meibo_deletein.php">名簿一覧へ戻る</a>
</body>

</html>