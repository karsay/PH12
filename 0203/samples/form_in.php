<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
?>
<?php
//  処理部
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <meta http-equiv="content-style-type" content="text/css" />
    <link rel="stylesheet" href="css/php.css" type="text/css" media="all" />
    <title>WP15　入力フォーム</title>
  </head>
  <body>
<?php
//  表示部
?>
<!-- コンテナ -->
    <form action="form_out.php" method="post">
      商品名：
        <input type="text" name="txtName" size="15" />
        <br /><br />
      色：
        <input type="radio" name="rdoCol" value="red" />赤　
        <input type="radio" name="rdoCol" value="green" checked="checked"/>緑
        <input type="radio" name="rdoCol" value="yellow" />黄
        <br /><br />
      サイズ：
        <select name="selSiz">
          <option value="S">S</option>
          <option value="M" selected="selected">M</option>
          <option value="L">L</option>
          <option value="LL">LL</option>
        </select>
        <br /><br />
      アンケート（何が気に入りましたか）　複数解答可：<br />
        <input type="checkbox" name="chk_1" value="c1" />デザイン
        <input type="checkbox" name="chk_2" value="c2" />色
        <input type="checkbox" name="chk_3" value="c3" />価格
        <input type="checkbox" name="chk_4" value="c4" />説明
        <input type="checkbox" name="chk_5" value="c5" />保証
        <input type="checkbox" name="chk_6" value="c6" />メーカー
        <br /><br />
      ご意見：
        <textarea name="txtaComment" rows="5" cols="30"></textarea>
        <br /><br />
      <input type="submit" value="データ送信" />
      <input type="reset" value="リセット" />
    </form>
  </body>
</html>
