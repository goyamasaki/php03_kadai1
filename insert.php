<?php
require_once('funcs.php');


//1. POSTデータ取得
$name = $_POST['name'];
$url = $_POST['url'];
$content = $_POST['content'];


$pdo = db_conn();


// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, name, url, content, date)
VALUES(NULL, :name, :url, :content, sysdate())");

//  4. バインド変数を用意
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//5．データ登録処理後
if ($status == false) {
//SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
$error = $stmt->errorInfo();
exit("ErrorMessage:" . $error[2]);
} else {
//6．index.phpへリダイレクト
header('Location: index.php'); 

}

?>
