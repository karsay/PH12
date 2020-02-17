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



for($i = 0;$i < 4; $i++)
{
  $nums[$i] = rand(0,9);
}

// 配列の中身を出力
foreach ($nums as $num){  
  print($num);
}

print("<br>");

// 最大値、最小値,合計値
$min = $nums[0];
$max = $nums[0];
$goukei = 0;

for($i = 0;$i < 4;$i++)
{
  if($min > $nums[$i])
  {
    $min = $nums[$i];
  }
  if($max < $nums[$i]){
    $max = $nums[$i];
  }
  $goukei += $nums[$i];
}
print("最大値:" . $max . "<br>");
print("最小値:" . $min . "<br>");
print("合計:" . $goukei . "<br>");
print("平均値:" . $goukei / 4 . "<br>");
print("ナンバーズ4<br>");


$numbers = 0;

for($i = 0; $i < 10; $i++)
{
  for($x = 0; $x < 4; $x++)
  {
    if($nums[$x] == $i)
    {
      $numbers += 1;
    }
  }
  if($numbers != 0)
  {
    print($i . ":" . $numbers . "個<br>");
    $numbers = 0;
  }
}

$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Did nothing in $time seconds\n";
?>
</body>
</html>