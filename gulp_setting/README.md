# gulp設定

## 概要
- gulpはnode.jsを使って動く
    - node.jsのアップデート
        - nodebrewでアップデート
            - node -v　でnode.jsのバージョン確認　https://nodejs.org/ja/
            - npm -v でNode.jsをベースに動いているJavaScriptライブラリの配布・管理を行っているパッケージの確認。node.jsと一緒にインストールされる。
            - 最新アップデートは nodebrew ls-remote　でバージョンを確認。
            - 2020/07/08時点の最新にアップデート
            - nodebrew use v14.5.0 で最新に切り替え
        - インストーラーでアップデート
            - https://nodejs.org/ja/download/ こちらからダウンロード。過去のものは上書きしてくれる。
    - package.jsonを作成
        - 対象の階層でpackage.jsonを作成。　npm init -y
    - gulpインストール
        - npm i -D gulp
        - npx gulp -v　でバージョン確認。
        - 必要なパッケージをインストール
            - https://gulpjs.com/plugins/ ここで使えるものが確認できる
                - 入れたいものの参考に
                    - gulp-notify エラーメッセージ表示
                    - gulp-rev-all cssにハッシュをつけることができる
                    - gulp-imagemin 画像圧縮
        - gulpfile.jsを作成

## 作業メモ
-
