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
$week_jp = array("日","月","火","水","木","金","土");
$week_no = date("w", mktime(0,0,0,6,3,1998));
print "私の誕生日は" . $week_jp[$week_no] . "曜日です";
?>
</body>
</html>