<?php
session_start();
echo $_SESSION["username"]. " 로그인 합니다.<br>";
echo "학번 = " . $_COOKIE["mynum"] . " 입니다";