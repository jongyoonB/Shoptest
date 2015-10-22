<?php

include (dirname(__FILE__)."/../commonDataMainView.php");

$mainMenuShortNum = intval($action/100);
$funcNum = $action%10;
/*echo $mainMenuShortNum."<br>";
echo $codeNum."<br>";
echo "body/" . "$mainMenuShortNum" . "xx/Bodypage" . strval($codeNum) . ".php"."<br>";*/

if($action) {
    if($funcNum == 0) {
        include "body/" . $mainMenuShortNum . "xx/Bodypage" . strval($action) . ".php";
    }
    else{
        include (dirname((__FILE__))."/body/".$mainMenuShortNum."xx/function/function".$funcNum.".php");
    }
}


//main page
else{
    include "body/welcome.php";
}