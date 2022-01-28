<?php

require_once('funcs.php');

//1. POSTデータ取得
$bookName = $_POST['bookName'];
$bookUrl = $_POST['bookUrl'];
$bookComment = $_POST['bookComment'];
$id = $_POST['id'];

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare('UPDATE
                        gs_bm_table
                    SET
                        bookName = :bookName,
                        bookUrl = :bookUrl,
                        bookComment = :bookComment,
                        indate = sysdate()
                    WHERE
                        id = :id;
                    ');

//  2. バインド変数を用意
$stmt->bindValue(':bookName', $bookName, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookUrl', $bookUrl, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookComment', $bookComment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}