<!DOCTYPE html>
<?php
$sex = $_POST["sex"];
$indCount = 0;
$outCount = 0;
$message = "";

if(($_POST["name"]) != "") {
  $name = htmlspecialchars($_POST["name"]); 
} else {
  $name = "名無し";
}

if($sex == "男性") {
  $sex = "<span style='color:blue'>$sex</span>";
} else {
  $sex = "<span style='color:red'>$sex</span>";
}

if(isset($_POST["chk"])) {
  foreach($_POST["chk"] as $key => $val) {
    if($key == 0){
      $indCount++;
    } elseif($key == 1) {
      $outCount++;
    } elseif($key == 2) {
      $indCount++;
    } elseif($key == 3) {
      $indCount++;
    } elseif($key == 4) {
      $outCount++;
    }
  }

  if($indCount >= 2 && $outCount == 0){ 
    $message = "外にでること！";
  }

  $hobby = implode("/", $_POST["chk"]);

} else {
  $hobby = "無趣味";
}

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
// 表示部
?>
<h1>「あなたのことを教えてください」</h1>
ようこそ<?php echo $name?>さん
<br><br>
性別：<?php echo $sex?>
<br><br>
趣味：<?php echo $hobby?>

<h1><?php echo "$message" ?></h1>

<a href="input.php">入力画面に戻る</a>
</form>
</body>
</html>
