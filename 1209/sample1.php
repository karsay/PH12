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
  if(isset($_POST["send"])) {
    print("押されてきた");
  } else {
    print("押されずにきた");
  }
?>
</body>
</html>