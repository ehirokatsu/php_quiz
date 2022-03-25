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
<form action="/Quiz_Answer.php" method="post">
    <!-- フォームの部品 -->
        <div>
            <label for="quiz1">クイズ１：メールを送信するプロトコルは何でしょうか？</label>
            <br>
            <input type="text" id="quiz1" name="quiz1">
        </div>
        <br>
        <div>
            <label for="quiz2">クイズ２：IPヘッダに存在する項目はどれでしょうか？</label>
            <br>
            <input type="checkbox" name="quiz2[]" value="IPアドレス">
            <label for="quiz2_1">IPアドレス</label>
            <br>
            <input type="checkbox" name="quiz2[]" value="ポート番号">
            <label for="quiz2_2">ポート番号</label>
            <br>
            <input type="checkbox" name="quiz2[]" value="TTL">
            <label for="quiz2_3">TTL</label>
            <br>
        </div>
        <br>
        <div>
            <label for="quiz3">クイズ３：正しいIPアドレスはどれでしょうか？</label>
            <br>
            <input type="radio" name="quiz3" value="192.168.255.256"> 192.168.255.256
            <br>
            <input type="radio" name="quiz3" value="192.168.1.255"> 192.168.1.255
            <br>
            <input type="radio" name="quiz3" value="192.168.0.-1"> 192.168.0.-1
            <br>
            <br>
        </div>
        <input type="submit" value="送信する">
        <br>
        
</form>

</div>
</body>
</html>

