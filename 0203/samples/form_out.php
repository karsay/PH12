<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
?>
<?php
//  処理部
//  配列宣言

$count = 0;
$question = "";
$fontEnd = "</font>";
//  データ受信
$name = htmlspecialchars($_POST["txtName"]);
$color = $_POST["rdoCol"];
$size = $_POST["selSiz"];

//  デザインにチェックが入っているかの判定
if(isset($_POST["chk_1"])){
  $question = "「デザイン」";
  $count++;
}

//  色にチェックが入っているかの判定
if(isset($_POST["chk_2"])){
  $question .= "「色」";
  $count++;
}

//  価格にチェックが入っているかの判定
if(isset($_POST["chk_3"])){
  $question .= "「価格」";
  $count++;
}

//  説明にチェックが入っているかの判定
if(isset($_POST["chk_4"])){
  $question .= "「説明」";
  $count++;
}

//  保証にチェックが入っているかの判定
if(isset($_POST["chk_5"])){
  $question .= "「保証」";
  $count++;
}

//  メーカーにチェックが入っているかの判定
if(isset($_POST["chk_6"])){
  $question .= "「メーカー」";
  $count++;
}

$comment = htmlspecialchars($_POST["txtaComment"]);
//$comment = $_POST["txtaComment"];

//  名前が未入力だった場合のメッセージ作成
if($name == ""){
  $name = "(名無し)";
}


//アンケートが未チェックの場合($question変数に何も入ってない状態)
if($question == ""){
  $question = "無回答";
}


//ご意見が未チェックの場合($comment変数に何も入ってない状態)
if($comment == ""){
  $comment = "無回答";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
               "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<link rel="stylesheet" href="css/php.css" type="text/css" media="all" />
<title>WP15　データ受信</title>
</head>
<body>
<?php
//  表示部
?>
<h1>「商品アンケート」</h1>
商品名<?php print $name; ?><br />
色：<?php print $color; ?><br />
サイズ：<?php print $size; ?><br />
アンケート：<?php print $question; ?><br />
件数：<?php print $count; ?><br />
ご意見：<?php print $comment; ?><br />
<br />
<a href="form_in.php">入力画面に戻る</a>
</body>
</html>
