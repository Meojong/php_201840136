<?php

include "function_11.php"; // 함수를 선언한다.
include "function_11.php"; // 함수 중복 처리 한다.
list($name, $num) = daelim("머림이", 201840206);
// $name <--- $name[0]
// $num <--- $name[1]
//print_r($name);
echo $name . " = " . $num;