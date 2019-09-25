<?php
// include "class01.php";
// include "class02.php";
// greeting();
include "autoload.php";
$obj1 = new left;
$obj1->greeting();
$obj1->daelim();

// $를 안쓴다.
$obj1->name = "대림이";
var_dump($obj1);
echo "<br>";

$property = "name";
echo $obj1->$property . " 입니다.<br>";
echo "영어 코드는 = ". $obj1::ENGLISH . "<br>";

$obj2 = new right;
$obj2->name = "머숙이";
$result = $obj2->greeting();
var_dump($result);
echo "<br>";

$obj2->daelim();
$result->daelim();

echo "<br>---<br>";
$obj2->greeting()->daelim()->foo()->bar();

echo "---<br>";
echo foo::$aaa;

foo::hello();