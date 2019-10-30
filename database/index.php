<?php


// phpinfo();

//서버정보
$config = include "dbconf.php";
require "database.php";
require "Table.php";

$db = new Database($config);


        $query = "SHOW TABLES";
        $result  = $db->queryExecute($query);

        $count = mysqli_num_rows($result);

        for($i = 0; $i < $count; $i++){
            $row = mysqli_fetch_object($result);
            echo $row->Tables_in_php."<br>";
        
    }