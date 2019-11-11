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
$num = rand(0,50);
if($num % 2 == 1)
{
  print($num . "は奇数");
} else {
  print($num . "は偶数");
}

?>
</body>
</html>