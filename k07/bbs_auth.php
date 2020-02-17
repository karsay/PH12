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

  $str_no = $_POST['str_no'];

  // sql文の作成
  $strSQL = " select * from bbs_tbl where bbs_no = ".$str_no; 

  // SQL分の実行
  $db_result = mysqli_query($db_link, $strSQL);

  if($db_result == false){
    //selectの失敗
    $msg = "エラー" .$strSQL;
  } else {
    // selectの成功
    // 取り出し
    $db_row = mysqli_fetch_array($db_result);
    $bbs_no = $db_row["bbs_no"];
    $name = $db_row["bbs_name"];
    $title = $db_row["bbs_title"];
    $date = $db_row["bbs_date"];
    $delkey = $db_row["bbs_delkey"];
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
  <title>名簿削除確認</title>
</head>

<body>

  <h1>投稿更新確認</h1>
  <br /><br />
  <h2>削除更新キーを入力して下さい</h2>
  <h3>投稿内容</h3>
  <?php
    print "<h2 style='color:red'>$name</h2>";
    print "<h2 style='color:red'>$title</h2>";
    print "<h2 style='color:red'>$date</h2>";
  ?>
  <br /><br />
  <form action="bbs_updcheck.php" method="post">
    <p>削除更新キー</p>
    <input type="text" name="str_del" value="">
    <input type="hidden" name="str_bbs" value="<?php print $bbs_no ?>">
    <br><br>
    <input type="submit" value="更新する" name="subDel">
  </form>
  <br /><br />
  <a href="bbs_show.php">投稿一覧へ戻る</a>
</body>
<style>
  * {
    text-align: center;
  }
</style>

</html>