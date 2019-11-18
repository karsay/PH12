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
print "<h1>今日の運勢は" . "<font style='color:red'>";
$unseiNum = rand(0,5);
switch($unseiNum) {
  case 0:
    print "<img src='./image/$unseiNum.png' height='64px' width='64px'>";
    break;
  case 1:
    print "<img src='./image/$unseiNum.png' height='64px' width='64px'>";
    break;
  case 2:
    print "<img src='./image/$unseiNum.png' height='64px' width='64px'>";
    break;
  case 3:
    print "<img src='./image/$unseiNum.png' height='64px' width='64px'>";
    break;
  case 4:
    print "<img src='./image/$unseiNum.png' height='64px' width='64px'>";
    break;
  case 5:
    print "<img src='./image/$unseiNum.png' height='64px' width='64px'>";
    break;
  default:
    print "error";
    break;
}
print "</font></h1>";
?>
</body>
</html>