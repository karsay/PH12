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
//  表示部
/* 
2019.10.28
作成: 柏木隆賢
*/
$num1 = 8 + 5;
$num2 = 8 - 5;
$num3 = 8 * 5;
$num4 = 8 / 3;
$num5 = 8 % 5;
$num5 += 10; //$num5 = $num5 + 10と同じ

$str = "誕生日";
$str .= "おめでとう";

print $num1 . "<br>";
print $num2 . "<br>";
print $num3 . "<br>"; 
print $num4 . "<br>";
print $num5 . "<br>";

print $str . "<br>";

?>
</body>
</html>
