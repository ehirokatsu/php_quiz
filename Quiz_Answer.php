<!DOCTYPE html PUBLIC "-// W3C// DTD XHTML 1.0 Transitional// EN"
 "http:// www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:// www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHP Calendar</title>
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




$quiz1_Ans="SMTP";
$quiz3_Ans="192.168.1.255";



echo "クイズ１：回答→";
if (isset($_POST['quiz1']) && strcmp("", $_POST['quiz1'])) {
    echo $quiz1;
    if (strcmp($quiz1_Ans, $_POST['quiz1']) === 0) {
        echo " OK";
    } else {
        echo " NG";
    }
} else {
?>
    <font color="red">   回答が入力されていません！</font>
    <br>
    <br>
<?php
}
//var_dump($_POST['quiz2']);
echo "クイズ２：回答→";
if (isset($_POST['quiz2']) && is_array($_POST['quiz2'])) {

    foreach($_POST['quiz2'] as $value){
       echo $value;
       echo "\n";
    }
    if (in_array("IPアドレス", $_POST['quiz2'])
        && !in_array("ポート番号", $_POST['quiz2'])
        && in_array("TTL", $_POST['quiz2'])) {
        echo " OK";
    } else {
        echo " NG";
    }
} else {
?>
    <font color="red">   回答が入力されていません！</font>
<?php
}


if (in_array("IPアドレス", $quiz2) && !in_array("ポート番号", $quiz2) && in_array("TTL", $quiz2)) {
echo "quiz2OK";
} else {
echo "quiz2NG";
}


if (strcmp($quiz3_Ans, $quiz3) == 0) {
echo "quiz3OK";
} else {
echo "quiz3NG";
}


?>

<a href="Quiz.php">戻る</a>
<br>

</div>


</body>
</html>

