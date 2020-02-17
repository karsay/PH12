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
  $cus_id = $_POST['cus_id'];
  $cus_pas = $_POST['cus_pas'];
  $cus_name = $_POST['cus_name'];


  // 入力Idのチェック
  $selectSQL = "select cus_id from meibo_tbl";
  $db_result = mysqli_query($db_link, $selectSQL);
  $flag = true;

  while($row = mysqli_fetch_array($db_result)) { 
    if($row['cus_id'] == $cus_id) { 
      $selectSQL2 = "select cus_id from meibo_tbl where cus_no = '$strNo'";
      $db_result2 = mysqli_query($db_link, $selectSQL2);
      $row2 = mysqli_fetch_array($db_result2);
        if ($row2['cus_id'] === $cus_id) {
        } else {
          $flag = false;
        }
    }
  }

  if($flag) {
    // sql文の作成
    $updateSQL ="UPDATE meibo_tbl SET cus_id='$cus_id', cus_pas='$cus_pas', cus_name='$cus_name' WHERE cus_no='$strNo'";

    // SQL分の実行
    $db_result = mysqli_query($db_link, $updateSQL);

    if($db_result == false){
      //updateの失敗
      $msg = "名簿更新が失敗しました" .$updateSQL;
    } else {
      // updateの成功
      $msg = "名簿更新が完了しました";
    }
  } else {
    $msg = "IDが重複しています";
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
  <title>顧客更新</title>
</head>

<body>
<br /><br />
<?php echo $msg; ?>
<br /><br />
<a href="sample39.php">名簿一覧に戻る</a>
</body>
<style>
  * {
    text-align: center;
    margin: 0 auto;
  }

</style>

</html>