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
// 表示部
// インデックス配列
$array_fruit = array("リンゴ", "みかん", "バナナ");
$count = count($array_fruit);

for($i = 0; $i < $count; $i++)
{
  print($array_fruit[$i] . "<br>");
}
?>
</body>
</html>