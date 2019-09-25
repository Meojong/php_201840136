<?php

abstract class greeting
{   
    //여기는 꼭 만들어야 한다.
    abstract public function hello();

    public function pages()
    {
        echo "페이지 출력";
    }
}

// 인터페이스를 구현해서 클래스를 만들어.. 강제명령.
class daelim extends greeting
{
    public function hello()
    {
        echo "그냥 해...";
    }
}
$obj = new daelim;
$obj->hello();
$obj->pages();