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
print "<h1>今日の運勢は";
$unseiNum = rand(0,5);
if($unseiNum == 0) {
  print "<font style='color:red'>大吉</font>" . "</h1>";
} else if($unseiNum == 1) {
  print "<font style='color:red'>中吉</font>" . "</h1>";
} else if($unseiNum == 2) {
  print "<font style='color:red'>吉</font>" . "</h1>";
}else if($unseiNum == 3) {
  print "<font style='color:red'>小吉</font>" . "</h1>";
}else if($unseiNum == 4) {
  print "<font style='color:red'>凶</font>" . "</h1>";
}else{
  print "<font style='color:red'>大凶</font>" . "</h1>";
}
print "</h1>";
?>
</body>
</html>