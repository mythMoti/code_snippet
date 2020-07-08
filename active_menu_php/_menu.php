<?php
    //headerのactive用cssの変更用
    //ドメイン以下を取得
    $url = $_SERVER["REQUEST_URI"];

    //classを表示するための変数を定義
    $menuClass01 = '';
    $menuClass02 = '';
    $menuClass03 = '';
    $menuClass04 = '';
    $menuClass05 = '';
    //activeのclassを指定する
    $menuClass = 'active';

    //$urlにurlの一部が一致する点があったら、対象にactiveクラスを追加する。
    if(strpos($url, 'about') !== false) {
        $menuClass02 = $menuClass;
    }elseif(strpos($url, 'info') !== false) {
        $menuClass03 = $menuClass;
    }elseif(strpos($url, 'qa') !== false) {
        $menuClass04 = $menuClass;
    }elseif(strpos($url, 'contact') !== false) {
        $menuClass05 = $menuClass;
    }else{
        $menuClass01 = $menuClass;
    }
?>
<p>現在のページは<?php echo $url; ?>です。<br>対応するメニューが赤くなります。</p>
<nav class="g_header_group">
    <ul>
        <li class='<?php echo $menuClass01;?>'><a href="index.php">TOP</a></li>
        <li class='<?php echo $menuClass02;?>'><a href="about.php">会社概要</a></li>
        <li class='<?php echo $menuClass03;?>'><a href="info.php">お知らせ</a></li>
        <li class='<?php echo $menuClass04;?>'><a href="qa.php">Q&A</a></li>
        <li class='<?php echo $menuClass05;?>'><a href="contact.php">お問い合わせ</a></li>
    </ul>
</nav>
