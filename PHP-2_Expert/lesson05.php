<?php
declare(strict_types=1);
/* 
問題5：静的（static）プロパティ・メソッド
【要件】

AppInfo クラスを作成してください。

private static string $version = "1.0.0" という静的プロパティを定義してください。

インスタンス化せずにこのバージョンを取得できる public static function getVersion(): string メソッドを作成してください。

※ヒント：メソッド内では $this ではなく self:: を使います。

クラス名から直接 echo AppInfo::getVersion(); を実行してください。
*/