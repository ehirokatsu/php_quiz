<!DOCTYPE html PUBLIC "-// W3C// DTD XHTML 1.0 Transitional// EN"
 "http:// www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:// www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHP Calendar</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

$quiz1 = $_POST['quiz1'];
$quiz2 = $_POST['quiz2'];
$quiz3 = $_POST['quiz3'];

//var_dump($quiz3);

$quiz1_Ans="SMTP";
$quiz3_Ans="192.168.1.255";

if (strcmp($quiz1_Ans, $quiz1) == 0) {
echo "OK";
} else {
echo "NG";
}

if (in_array("IPアドレス", $quiz2) && !in_array("ポート番号", $quiz2) && in_array("TTL", $quiz2)) {
echo "OK";
} else {
echo "NG";
}

if (strcmp($quiz3_Ans, $quiz3) == 0) {
echo "OK";
} else {
echo "NG";
}


?>


</body>
</html>

