<?php
//在庫情報 CSV
const PRODUCT_LIST_CSV = './lesson06.csv';

/* get通信：*/
//商品一覧表示
function showProductList():void{
    
}   
/* POST通信：*/
// 新規登録

// 削除

// 更新

//ダウンロード


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>消費登録</h1>
    <form id="setProduct" action="" method="post">
        商品名：<input type="text" name="productName" id=""><br>
        金額：<input type="number" name="productPrice" id=""><br>
        在庫数：<input type="number" name="productStock" id=""><br>
        <button type="submit">登録</button>
    </form>
<div>
    <form method="post">
    <button type="submit" name="action" value="download">
        CSVをダウンロード
    </button>
    </form>
</div>
    <h2>商品一覧</h2>
    <table>
        <th>
            <td>商品名</td>
            <td>金額</td>
            <td>在庫</td>
            <td>アクション</td>
        </th>
        <!-- td で在庫表示 -->
        <?php showProductList() ?>
    </table>
</body>
</html>