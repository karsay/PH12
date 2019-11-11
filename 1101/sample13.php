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
$sei = 2;
$nen = 222;

if($sei == 2)
{
    if($nen >= 20)
    {
        print "料金は￥1000円";
    } else {
        print "料金は1500円";
    }
} else {
    print "料金は1500円";
}

?>
</body>
</html>
