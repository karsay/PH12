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
    print "大吉";
    break;
  case 1:
    print "中吉";
    break;
  case 2:
    print "吉";
    break;
  case 3:
    print "小吉";
    break;
  case 4:
    print "凶";
    break;
  case 5:
    print "大凶";
    break;
  default:
    print "error";
    break;
}
print "</font></h1>";
?>
</body>
</html>