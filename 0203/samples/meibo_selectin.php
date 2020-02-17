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
<h2>ログイン画面</h2>
<form method="post" action="meibo_selectout.php">
<table>
<tr>
<td>ユーザID</td>
<td><input type="text" name="txtID"></input>
</td>
</tr><tr><td>パスワード</td>
<td><input type="text" name="txtPASS"></input>
</td>
</tr><tr><td colspan=2 align=center>
<input type="submit" name="subSend" method="POST"
   value="ログイン" ></input>
<input type="reset" value="リセット"></input>
</td>
</tr>
</table>
</form>
</body>
</html>
