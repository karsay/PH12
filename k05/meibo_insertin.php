<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
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
    <title>ログイン画面</title>
  </head>
<body>
  <h1>顧客登録</h1>
  <br><br>
  <form method="post" action="meibo_insertout.php">
    <table border="1">
      <tr>
        <th>項目名</th>
        <th>内容</th>
      </tr>
      <tr>
        <td>顧客ID</td>
        <td>
          <input type="text" name="cus_id" size="41" maxlength="20">
        </td>
      </tr>
      <tr>
        <td>パスワード</td>
        <td>
          <input type="password" name="cus_pas" size="41" maxlength="20">
        </td>
      </tr>
      <tr>
        <td>氏名</td>
        <td>
          <input type="text" name="cus_name" size="41" maxlength="20">
        </td>
      </tr>
    </table>
    <input type="submit" value="追加">
    <input type="reset" value="入力クリア">
  </form>
</body>
</html>