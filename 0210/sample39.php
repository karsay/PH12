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
<title>名簿更新</title>
</head>
<body>
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
$strSQL  = " select * from meibo_tbl";

//SQL文を実行する。
$db_result = mysqli_query($db_link,$strSQL);

//取得したデータ件数を調べる
$db_cnt = mysqli_num_rows($db_result);

if($db_cnt == 0){
  //データが無い場合
  print "<font color=red>";
  print "名簿は存在しません。";
  print "</font>";
}else{
  //データが有る場合
  print "<table border=\"1\">";
  print "<tr><th>顧客No.</th><th>顧客ＩＤ</th><th>パスワード</th><th>氏名</th></tr>";
  while($db_row = mysqli_fetch_array($db_result)){
    print "<form action=\"sample40.php\" method=\"post\">";
    // 顧客ＮＯ（非表示）
    print "<input type=\"hidden\" value=\"".$db_row["cus_no"]."\" name=\"cus_no\">";
    //顧客ＮＯ（自動生成）
    print "<tr><td>".$db_row["cus_no"]."</td>";
    //顧客ＩＤ（ログインＩＤ）
    print "<td>".$db_row["cus_id"]."</td>";
    //顧客ＰＷ（ログインパスワード）
    print "<td>".$db_row["cus_pas"]."</td>";
    //ハンドルネーム
    print "<td>".$db_row["cus_name"]."</td>";
    // 削除ボタン
    print "<td><input type=\"submit\" value=\"変更\" name=\"subDel\"></td>";
    // print "</input>";
    print "</tr>";
    print "</form>";
  }
  print "</table>";
  mysqli_free_result($db_result);
}

//MySqlサーバ切断
mysqli_close($db_link);

?>

</body>
</html>
