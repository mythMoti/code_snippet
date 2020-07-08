# includeで共通headerを使うときに、表示を調整する場合の分岐

## 概要
- menu.phpを後で変更する必要がないパターン
- includeする前に、どこのメニューをactiveにするのか変数に持たせる

## 作業メモ
- srtpos参考
    - https://www.php.net/manual/ja/function.strpos.php
    - https://qiita.com/kazu56/items/2c72d187438de07c2503
- https://xn--web-oi9du9bc8tgu2a.com/php-web-server/ を参考にローカルでphpの動作の確認。
    - php -v でphpのバージョン確認
    - php -S 127.0.0.1:8080 でビルトインウェブサーバーの実行
    - ↑を実行したフォルダがcode_snipetの場合、　http://127.0.0.1:8080/active_menu_php/ になる。
