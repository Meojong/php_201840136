<?php

if(function_exists("daelim"))
{
    echo "함수명이 있어요.<br>";
}
else
{
    function daelim($name, $num) :array 
{
    // echo "대림대학교<br>";
    //echo $name . " = " . $num;
    $arr = [$name, $num];
    return $arr;
}

}
include_once "function11.php";
list($name, $num) = daelim("대림이", 123456);
// echo $name. " = " . $name;
