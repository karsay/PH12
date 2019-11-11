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
$now = time();
print $now;
print "<br>";
$timestanp = mktime(0,0,0,1,1,2000);
print $timestanp;
print "<br>";
// print(date("私の誕生日はDです", mktime(0,0,0,6,3,1998)));
?>
</body>
</html>