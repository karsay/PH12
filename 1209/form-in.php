<!DOCTYPE html>
<?php
//  処理部
?>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">
<link rel="shortcut icon" href="">
</head>
<body>
<?php
// 表示部
?>
<form action="form-out.php" method="post">
  商品名：
    <input type="text" name="txtName" size="15" />
    <br /><br />
  色
    <input type="radio" name="rdoCol" value="red" />赤
    <input type="radio" name="rdoCol" value="green" checked="checked"/>緑
    <input type="radio" name="rdoCol" value="yellow" />黄
</form>
</body>
</html>
