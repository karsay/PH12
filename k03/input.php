

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
// 表示部
?>

<form action="confirm.php" method="POST">
  <h1>「あなたのことを教えてください」</h1>
  <p>以下の必要事項を入力後、送信ボタンをクリックしてください。</p>
  氏名：
  <input type="text" name="name">
  <br><br>
  性別：
  <input type="radio" name="sex" value="男性" checked="checked">男性
  <input type="radio" name="sex" value="女性">女性
  <br><br>
  趣味：
  <input type="checkbox" name="chk[0]" value="読書">読書
  <input type="checkbox" name="chk[1]" value="スポーツ">スポーツ
  <input type="checkbox" name="chk[2]" value="ゲーム">ゲーム
  <input type="checkbox" name="chk[3]" value="映画鑑賞">映画鑑賞
  <input type="checkbox" name="chk[4]" value="旅行">旅行
  <br><br> 
  <input type="submit" value="データ送信">
  <input type="reset" value="リセット"> 

</form>
</body>
</html>
