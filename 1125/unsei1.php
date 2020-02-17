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
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="">
</head>
<body>
<?php
print "<h1>今日の運勢は</h1>";
$unseiNum = rand(0,5);
$unseis = array("大吉", "中吉", "吉", "小吉", "凶", "大凶");

print("<h1><font style='color:red'>" . $unseis[$unseiNum] . "</font></h1>");
?>
</body>
</html>