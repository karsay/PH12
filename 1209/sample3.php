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

$invStr = "<h1>PHP</h1>";
print $invStr;

$validStr = htmlspecialchars($invStr);
print $validStr;

?>
</body>
</html>
