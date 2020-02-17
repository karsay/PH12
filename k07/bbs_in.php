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
    <title>投稿画面</title>
  </head>
<body>
  <br>
  <h1>投稿画面</h1>
  <br><br>
  <form method="post" action="bbs_incheck.php">
    ハンドルネーム:<input type="text" name="post-name" size="20" maxlength="20">
    <br><br>
    投稿内容:
    <br>
    <textarea name="post-title" rows="6" cols="40"></textarea>
    <br><br>
    削除キー:<input type="text" name="post-delkey" size="20" maxlength="20">
    <br><br>
    <input type="submit" value="書き込み">
    <input type="reset" value="リセット">
    <br><br>
  </form>
  <a href="bbs_show.php">一覧へ戻る</a>
</body>
<style>
  * {
    text-align: center;
    margin: 0 auto;
  }
</style>

</html>