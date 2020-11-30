<?php


namespace app\index\controller;


class common
{
    private static function _filerStr($var){
        //$err = "insert|update|delete|select|union|limit|\/\*|\*\/|--";
        //$var = eregi_replace($err, '', $var);
        //return str_replace(array('&amp;', '&nbsp;', "'", '<', '>', "\t", "\r", '  '),array('&', ' ', '&#39;', '&lt;', '&gt;', '&nbsp; &nbsp;', '', '&nbsp;'), $var);
        return addslashes(trim($var));
    }

    public static function gInt($var) 	{ return isset($_GET[$var]) ? (int)trim($_GET[$var]) : 0; }
    public static function gFloat($var) { return floatval(isset($_GET[$var])?trim($_GET[$var]):0); }
    public static function gStr($var) 	{ return isset($_GET[$var]) ? self::_filerStr($_GET[$var]) : ''; }

    public static function pInt($var) 	{ return isset($_POST[$var])?(int)trim($_POST[$var]):0; }
    public static function pFloat($var) { return floatval(isset($_POST[$var])?trim($_POST[$var]):0); }
    public static function pStr($var) 	{ return isset($_POST[$var]) ? self::_filerStr($_POST[$var]) : ''; }


    public static function qStr($val){
        $s = self::pStr($val);
        if (!isset($s) || empty($s)){
            $s = self::gStr($val);
        }
        return $s;
    }

    public static function qInt($val){
        $s = self::pInt($val);
        if ($s === 0){
            $s = self::gInt($val);
        }
        return $s;
    }

    public static function qFloat($val){
        $s = self::pFloat($val);
        if($s == 0) {
            $s = self::gFloat($val);
        }
        return $s;
    }
}