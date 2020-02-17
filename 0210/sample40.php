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
  $strSQL = " select * from meibo_tbl where cus_no = ".$strNo; 

  // SQL分の実行
  $db_result = mysqli_query($db_link, $strSQL);

  if($db_result == false){
    //selectの失敗
    $msg = "エラー" .$strSQL;
  } else {
    // selectの成功
    // 取り出し
    $db_row = mysqli_fetch_array($db_result);
    $cus_id = $db_row["cus_id"];
    $cus_pas = $db_row["cus_pas"];
    $cus_name = $db_row["cus_name"];
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

  <h1>顧客更新</h1>
  <form action="sample42.php" method="post">
    <input type="hidden" name="cus_no" value="<?php print $strNo; ?>">
    <table border="1">
    <tr>
     <th>項目名</th><th>内容</th>
    </tr>
    <tr>
      <td>顧客ID</td>
      <td>
        <input type="text" name="cus_id" size="41" maxlength="20" value="<?php print $cus_id ?>">
      </td>
    </tr>
    <tr>
      <td>パスワード</td>
      <td>
        <input type="text" name="cus_pas" size="41" maxlength="20" value="<?php print $cus_pas ?>">
      </td>
    </tr>
    <tr>
      <td>氏名</td>
      <td>
        <input type="text" name="cus_name" size="41" maxlength="20" value="<?php print $cus_name ?>">
      </td>
    </tr>
    </table>
    <br><br>
    <?php $msg ?>
    <input type="submit" value="更新">
    <input type="reset" value="入力クリア">
  </form>

  <br /><br />
  <a href="sample39.php">名簿一覧へ戻る</a>
</body>

<style>
  * {
    text-align: center;
    margin: 0 auto;
  }

</style>

</html>
