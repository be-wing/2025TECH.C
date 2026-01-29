<?php

/*
練習問題4：JSON形式の読み込みと保存
POST通信で送信した内容をJSON形式で保存しする
GET通信の時は、投稿一覧を表示させる
*/


// JSON形式の保存先
const JSON_FILE_PATH = './lesson04.json';

// 一覧表示用の関数
function showPosts(){
    // JSONデータの取得
    
    //$json;
    //$posts;
    
    // 表示処理
    if (!empty($posts)) {

    } else {
        echo "投稿はまだありません。";
    }
}


// POST通信の場合
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // userNameの取得
    $userName;
    // userContentの取得
    $userContent;


    // userName userContentのどちらかが空の場合、GETで戻す（バリデーション）

    // --- JSON形式で保存処理 ---
    // 1. 既存のデータを読み込む

    // 2. 新しいデータを追加

    // 3. JSON形式に変換して保存

    // 保存後、リダイレクト（二重送信防止）

    exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板演習</title>
</head>
<body>
    <h1>掲示板</h1>
    <form action="" method="post">
        名前：<input type="text" name="userName"><br>
        内容：<textarea name="userContent" cols="30" rows="10"></textarea><br>
        <button type="submit">送信</button>
    </form>
    <hr>
    <h2>一覧表示</h2>
    <?php showPosts(); ?>
</body>
</html>