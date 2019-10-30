<?php


// phpinfo();

//서버정보
$config = include "dbconf.php";

require "database.php";
require "Table.php";
$config = [
    "host"=>$host,
    "user"=>$user,
    "passwd"=>$passwd,
    "database"=>$database];
$db = new Database($config);
$table = new Table($db);
// 테이블 객체를 생성해서 연결
 // 연결된 객체 읽어
// $db->setTable(new Table($db))->getTable()->createTable(); 
$db->getTable()->createTable("members3", 
[
    'Last'=>"varchar(50)",
    'First'=>"varchar(50)",
    'Age'=>"varchar(50)", 
]); 


if($db->isTable("members"))
{
    echo "테이블이 존재합니다";
}else
{
    echo "테이블이 없어유";
}
// //mysql 접속
// $connect = mysqli_connect($host, $user, $passwd, $database);

// // 성공 : connect_errno = 0 ! = 1
// // 실패 : connect_errno = 1 ! = 0
// if(!$connect->connect_errno){
//     echo "DB 접속 성공";
// }else{
//     echo "접속이 안되요.";
// }

// $query = "
//     CREATE TABLE `members` (
//         `id` int(11) NOT NULL AUTO_INCREMENT,
//         `LastName` varchar(255),
//         `FirstName` varchar(255),
//         PRIMARY KEY(`id`)
//         ) ENGINE=innodb default charset=utf8;
    
// ";

// if(mysqli_query($connect, $query)){
//     echo "테이블 생성 성공";
// }else{
//     print "테이블 생성 실패";
// }
