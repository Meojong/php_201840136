<?php
// static = 메모리가 처음부터 할당 되어있기때문에 self를 쓴다 ==> 인스턴스할 필요없음
class foo
{
    public static $aaa = "foo hahaha";

    public static function hello()
    {
        echo self::$aaa;
    }
}