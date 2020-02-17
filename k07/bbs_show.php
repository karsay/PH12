<?php
//  HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
?>
<?php
//  処理部
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<!--  StyleSheet記述
<link rel="stylesheet" href="./css/main.css" type="text/css" media="all" />
StyleSheet記述  -->
<!-- PAGE TITLE -->
<title>掲示板一覧</title>
</head>
<body>

<h1>掲示板一覧</h1>
<?php
//  表示部

include("db_ini.php");

//MySqlサーバ接続
$db_link = mysqli_connect
            ($host,$user,$pass);

if($db_link == false){
    print "MySqlサーバー接続に失敗しました。";
    exit;
}

//charset指定
mysqli_set_charset($db_link,"utf8");

//データベース接続
$db_flg = mysqli_select_db
            ($db_link,$db_name);

if($db_flg == false){
    print "データベース接続に失敗しました。";
    exit;
}

//SQL文の作成
$strSQL  = " select * from bbs_tbl";

//SQL文を実行する。
$db_result = mysqli_query($db_link,$strSQL);

//取得したデータ件数を調べる
$db_cnt = mysqli_num_rows($db_result);


// 件数表示
print "<p>" . $db_cnt . "件のデータが抽出されました";

if($db_cnt == 0){
  //データが無い場合
  print "<font color=red>";
  print "名簿は存在しません。";
  print "</font>";
}else{
  //データが有る場合
  print "<table border=\"1\">";
  print "<tr><th>No.</th><th>名前</th><th>タイトル</th><th>投稿日時</th><th>削除</th><th>更新</th></tr>";
  while($db_row = mysqli_fetch_array($db_result)){
    print "<form action=\"bbs_delcheck.php\" method=\"post\">";
    print "<tr><td>".$db_row["bbs_no"]."</td>";
    print "<td>".$db_row["bbs_name"]."</td>";
    print "<td>".$db_row["bbs_title"]."</td>";
    print "<td>".$db_row["bbs_date"]."</td>";
    print "<input type=\"hidden\" value=\"".$db_row["bbs_no"]."\" name=\"str_no\">";
    print "<td><input type=\"submit\" formaction='bbs_delcheck.php' value='削除' name='delkey' </td>";
    print "<td><input type=\"submit\" formaction='bbs_auth.php' value='更新' name='delkey' </td>";
    print "</tr>";
    print "</form>";
  }
  print "</table>";
  mysqli_free_result($db_result);
}

//MySqlサーバ切断
mysqli_close($db_link);

?>

<a href="bbs_in.php">新規登録画面へ</a>

</body>
<style>
* {
  text-align: center;
  /* margin:  0 auto; */
}
h1 {
  margin: 30px 0 80px;
}
table {
  margin: 30px auto;
}
</style>
</html>
