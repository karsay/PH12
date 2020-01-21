<?php 
// mysqliクラスのオブジェクトを作成
$mysqli = new mysqli('localhost', 'karsay', 'karsay');
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8");
    echo "ok";
}

$result = 
  mysqli_query(
    $mysqli,
    "SELECT * FROM meibo_tbl;"
  );

// ここにDB処理いろいろ書く（後述）
while($row = mysqli_fetch_array($result)) { 
  print $row["cus_name"] . "<br>";
}

// DB接続を閉じる
$mysqli->close();
?>