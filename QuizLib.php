<?php

class QuizLib
{
    /**
     * 表示する時のエスケープ処理関数
     *
     * @param string $str チェックする文字列。
     * @return string     エスケープ処理後の文字列
     */
    public function checkEscape($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    
     /**
     * 入力チェック関数(文字列用)
     *
     * @param string $str チェックする文字列。
     * @return boolean $result 文字列が正常であればtrue, 異常であればfalse。
     */
    public function checkString($str)
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

     /**
     * 入力チェック関数(配列用)
     *
     * @param array|int $array チェックする配列。
     * @return boolean $result 配列が正常であればtrue, 異常であればfalse。
     */
    public function checkArray($array)
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
}

