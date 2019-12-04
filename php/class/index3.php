<?php

class daelim
{
    public function __construct()
    {
        echo __CLASS__ . "이 생성이 되었습니다.<br>";
        //$this->hello();
    }

    final public function hello()
     {
         echo "학교가 너무 높아요..";
     }
}

class food extends daelim
{
    public function menu()
    {
        echo "맛이 없어요";
    }

    // public function hello()
    //  {
    //      echo "학교가 너무 멀어요..";
    //  }
}

$obj1 = new food;
// 여기에 프로그램이 많이 작성...
$obj1->hello();
$obj1->menu();
