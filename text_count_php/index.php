<?php
    $text = 'つたえたいてきすとつたえたいてきすとつたえたいてきすとつたえたいてきすとつたえたいてきすとつたえたいてきすとつたえたいてきすと';

    //文字列の長さを取得
    if(mb_strlen($text) > 50){
        //50文字以上は省略用...を追加する
        $mainText = mb_substr($text, 0, 50) . '…';
        echo $mainText;
    } else {
        //50文字まではそのまま出力
        echo $mainText;
    }
?>
