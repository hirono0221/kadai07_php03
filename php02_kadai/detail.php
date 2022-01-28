<?php

$id = $_GET['id'];

// DBに接続
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    // ここを修正
    sql_error($stmt);
} else {
    //データが取得できたら。
    $view = $stmt->fetch();
}

?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブックマークDBデータ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">Bookマーク</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method='post' action='insert.php'>
        <div class="jumbotron">
            <fieldset>
                <legend>Bookマーク内容更新</legend>
                <label>書籍名：<input type="text" name="bookName" value=<?= $view['bookName'] ?>></label><br>
                <label>書籍URL：<input type="text" name="bookUrl" value=<?= $view['bookUrl'] ?>></label><br>
                <label>書籍コメント<textarea name="bookComment" rows="4" cols="40"><?= $view['bookComment'] ?></textarea></label><br>
                <input type="hidden" name="id" value=<?= $view['id'] ?>><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>