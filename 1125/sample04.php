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
$array_fruit = array(
  "lingo" => "りんご",
  "mikan" => "みかん",
  "banana" => "バナナ"
);

print( $array_fruit["lingo"] . "<br>");
print( $array_fruit["mikan"] . "<br>");
print( $array_fruit["banana"] . "<br>");

$count1 = count($array_fruit);
$count2 = sizeof($array_fruit);

print("配列の要素数は" . $count1);
print("<br>");
print("配列の要素数は" . $count2);
?>
</body>
</html>