<?php

class foo
{
    public static $aaa = "foo hahaha";

    public function hello()
    {
        echo self::$aaa;        
    }
}