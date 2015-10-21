<?php

include (dirname(__FILE__)."/../commonDataMainView.php");

$mainMenuShortNum = intval($action/100);
$codeNum = $mainMenuShortNum * 100;

if($action) {
    include "body/" . "$mainMenuShortNum" . "xx/Bodypage" . strval($codeNum) . ".php";
}


//main page
else{
    include "body/welcome.php";
}