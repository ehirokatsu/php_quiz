<!DOCTYPE html PUBLIC "-// W3C// DTD XHTML 1.0 Transitional// EN"
 "http:// www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:// www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHP Quiz Answer</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<br>
<br>
<div class="center">
<H1>
<font color="blue">クイズ課題 結果</font>

</H1>
<?php

//自作関数を使用する
require 'QuizLib.php';

$quizLib = new QuizLib();


echo "クイズ１：回答→";

//クイズ１回答がNULLで無いかつ文字列の場合、正誤判定を行う
$buf = filter_input(INPUT_POST, 'quiz1', FILTER_UNSAFE_RAW);
if (is_string($buf)) {
    //回答内容を表示する
    echo "[",$quizLib->checkEscape($buf),"]";
    //正誤判定を行う
    if (strcmp("HTML", $buf) === 0) {
        echo '<font color="green">   正解！</font><br><br>';
    } else {
        echo '<font color="red">  不正解！</font><br><br>';
    }
} else {
    echo '<font color="red">   回答が入力されていません！</font><br><br>';
}


echo "クイズ２：回答→";

//チェックボックスがNULLの場合
if (!isset($_POST['quiz2'])) {
    echo '<font color="red">   回答が送信されていません！</font><br><br>';
//NULLではない場合、配列チェックを行う
} elseif ($quizLib->checkArray($_POST['quiz2'])) {
    //回答内容を表示する
    foreach($_POST['quiz2'] as $value){
       echo "[",$quizLib->checkEscape($value),"]","\n";
    }
    //正誤判定を行う
    if (in_array("Apache", $_POST['quiz2'])
        && !in_array("iPhone", $_POST['quiz2'])
        && in_array("Tomcat", $_POST['quiz2'])) {
            echo '<font color="green">   正解！</font><br><br>';
    } else {
        echo '<font color="red">  不正解！</font><br><br>';
    }
}

echo "クイズ３：回答→";

//ラジオボタンがNULLの場合
if (!isset($_POST['quiz3'])) {
    echo '<font color="red">   回答が送信されていません！</font><br><br>';
//NULLではない場合、文字列チェックを行う
} elseif ($quizLib->checkString($_POST['quiz3'])) {
    //回答内容を表示する
    echo "[",$quizLib->checkEscape($_POST['quiz3']),"]";
    //正誤判定を行う
    if (strcmp("Edge", $_POST['quiz3']) === 0) {
        echo '<font color="green">   正解！</font><br><br>';
    } else {
        echo '<font color="red">  不正解！</font><br><br>';
    }
}

?>

<a href="Quiz.php">戻る</a>
<br>

</div>

</body>
</html>

