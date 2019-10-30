<?php
const  su = 3.14;
echo "원둘레 = " .hello(3);
function hello($radius){
    return 2 * su * $radius;
}

hello();
