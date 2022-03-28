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

    //表示する時のエスケープ処理関数
    function checkEscape($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    
    //入力チェック関数(文字列用)
    function checkString($str)
    {
        //戻り値用
        $result = false;
        
        if ($str === '') {
            echo '<font color="red">   回答が入力されていません！</font><br><br>';
        } elseif (!is_string($str)) {
            echo '<font color="red">   回答が不正送信されました！</font><br><br>';
        } else {
            $result = true;
        }
        return $result;
    }

    //入力チェック関数(配列用)
    function checkArray($array)
    {
        //戻り値用
        $result = false;
        //配列の不正判定用
        $frag = false;

        if (!is_array($array)) {
            echo '<font color="red">   回答が入力されていません！</font><br><br>';
        } else {
            foreach ($array as $value) {
                if (!is_string($value)) {
                    echo '<font color="red">   回答が不正送信されました！</font><br><br>';
                    $frag = true;
                }
            }
            if (!$frag) {
                $result = true;
            }
        }
        return $result;
    }
    
    //クイズ１の回答チェック
    echo "クイズ１：回答→";
    //quiz1がnullの場合、checkString($_POST['quiz1'])を呼び出すとundefined array keyエラーが発生する
    if (!isset($_POST['quiz1'])) {
        echo '<font color="red">   回答が送信されていません！</font><br><br>';
    } elseif (checkString($_POST['quiz1'])) {
        echo "[",checkEscape($_POST['quiz1']),"]";
        if (strcmp("HTML", $_POST['quiz1']) === 0) {
            echo '<font color="green">   正解！</font><br><br>';
        } else {
            echo '<font color="red">  不正解！</font><br><br>';
        }
    }

    //クイズ２の回答チェック
    echo "クイズ２：回答→";
    if (!isset($_POST['quiz2'])) {
        echo '<font color="red">   回答が送信されていません！</font><br><br>';
    } elseif (checkArray($_POST['quiz2'])) {
        foreach($_POST['quiz2'] as $value){
           echo "[",checkEscape($value),"]","\n";
        }
        if (in_array("Apache", $_POST['quiz2'])
            && !in_array("iPhone", $_POST['quiz2'])
            && in_array("Tomcat", $_POST['quiz2'])) {
                echo '<font color="green">   正解！</font><br><br>';
        } else {
            echo '<font color="red">  不正解！</font><br><br>';
        }
    }

    //クイズ３の回答チェック
    echo "クイズ３：回答→";
    if (!isset($_POST['quiz3'])) {
        echo '<font color="red">   回答が送信されていません！</font><br><br>';
    } elseif (checkString($_POST['quiz3'])) {
        echo "[",checkEscape($_POST['quiz3']),"]";
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

