<?php
    //headerのactive用cssの変更用
    //classを表示するための変数を定義
    $menuClass01 = '';
    $menuClass02 = '';
    $menuClass03 = '';
    $menuClass04 = '';
    $menuClass05 = '';
    //activeのclassを指定する
    $menuClass = 'active';

    //$urlにurlの一部が一致する点があったら、対象にactiveクラスを追加する。
    if($active == 'index') {
        $menuClass01 = $menuClass;
    }elseif($active == 'about') {
        $menuClass02 = $menuClass;
    }elseif($active == 'info') {
        $menuClass03 = $menuClass;
    }elseif($active == 'qa') {
        $menuClass04 = $menuClass;
    }elseif($active == 'contact') {
        $menuClass05 = $menuClass;
    }
?>
<nav class="g_header_group">
    <ul>
        <li class='<?php echo $menuClass01;?>'><a href="index.php">TOP</a></li>
        <li class='<?php echo $menuClass02;?>'><a href="about.php">会社概要</a></li>
        <li class='<?php echo $menuClass03;?>'><a href="info.php">お知らせ</a></li>
        <li class='<?php echo $menuClass04;?>'><a href="qa.php">Q&A</a></li>
        <li class='<?php echo $menuClass05;?>'><a href="contact.php">お問い合わせ</a></li>
    </ul>
</nav>
