<?php

$a = 5;
echo "start = ".$a;

function num()
{
    // $a = 2;
    global $a;
    echo "num<br>".$a;

    $a = 6;
}

num();
echo "end = ".$a;

echo "<br>";
echo $_SERVER['REQUEST_URI'];