<?php
// 1단계 선언 하드디스크에 저장되어있음
class foo
{
    //변수, 함수
    public $name;
    public static $daelim = "머림머학교";
    public function hello()
    {
        echo self::$daelim.">> ";
        echo $this->name. "짱이에요<br>";
        return $this;
    }
    public function greeting()
    {
        echo $this->name. "반가워요<br>";
        return $this;
    }
}

// 2단계 생성
$obj1 = new foo;
$obj1->name = "대림이"; //객체 프러퍼티 값을 저장
$obj1->hello();

$obj2 = new foo;
$obj2->name = "대숙이"; //객체 프러퍼티 값을 저장
$obj2->hello();

foo::$daelim = "우주최강";
$obj1->hello();
$obj2->hello();
/*
// 3단계 호출
$result = $obj->hello(); //this 리턴
$obj->hello()->greeting();

echo "====<br>";

$obj2 = new foo;
$obj->name = "대숙이";
$result = $obj->hello();

class bar
{
    public static $name;

    public static function username()
    {
        echo self::$name. "입니다. ";
    }
}
bar::$name = "고정값";
bar::username();
*/