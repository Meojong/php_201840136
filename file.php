<?php
echo "파일 목록을 출력합니다.";
$path = "./";//global 변수, 전역변수
files($path);//전역변수

//배열로 반환한다.
// $files = scandir("./");
// print_r($files);
// for($i=0;$i<count($files);$i++){
    
//     echo $files[$i]."<br>";
// }


function files($path)//지역변수
{
    $files = scandir($path);
    // print_r($files);
    for($i=0;$i<count($files);$i++){
        if($files[$i] == ".." || $files[$i] == ".git"){
            continue;
        }
        if(is_dir($files[$i])){
            echo "<b>" . $path.$files[$i]."</b><br>";
            // files($path.$files[$i].DIRECTORY_SEPERATOR);
        }
        else{

            echo $files[$i]."<br>";
        }
        
    }
}