<?php

require_once('funcs.php');

//1. POSTデータ取得
$bookName = $_POST['bookName'];
$bookUrl = $_POST['bookUrl'];
$bookComment = $_POST['bookComment'];

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, bookName, bookUrl, bookComment, date)VALUES(NULL, :bookName, :bookUrl, :bookComment, sysdate())");

//  2. バインド変数を用意
$stmt->bindValue(':bookName', $bookName, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookUrl', $bookUrl, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookComment', $bookComment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header('Location: index.php');
  exit();
}
?>
