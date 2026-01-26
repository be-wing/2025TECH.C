<?php
declare(strict_types=1);
/* 
問題10：応用（総合）
【要件】 「インターフェース」と「コンストラクタ」を組み合わせた問題です。

StorageInterface を作成し、public function save(string $data): void; を定義してください。

このインターフェースを実装した DatabaseStorage クラスを作成してください（中身は "DBに保存: $data" と表示するだけでOK）。

UserManager クラスを作成し、プロパティに $storage を持たせてください。

UserManager のコンストラクタで StorageInterface 型のオブジェクトを受け取り、プロパティに代入してください（依存性の注入）。

UserManager に execute(string $name) メソッドを作り、その中で $this->storage->save($name) を実行してください。

*/