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
//九九計算
print "<table border='3'>";
for($i = 1; $i <= 9; $i++)
{
  print("<tr>");
  for($j = 1; $j <= 9; $j++)
  {
    if($j == 1)
    {
      print "<td style='text-align: right;'>" . "&ensp;" . $i * $j . "</td>";
    } else {
      print "<td style='text-align: right;'>" . $i * $j . "</td>";
    }
  }
  print "</tr>";
}
print "</table>";


?>
</body>
</html>
