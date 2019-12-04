<?php
session_start();
$_SESSION["username"] = "머남이";

setcookie("mynum","201840206",time()+(86400*30),"/");