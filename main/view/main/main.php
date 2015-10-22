<?php

include (dirname(__FILE__)."/../commonDataMainView.php");

$mainMenuShortNum = intval($action/100);
$subPage = intval($action/10) - intval($action/100)*10;
$menuNum = $action%10;

//main page
if(!$action){
    include "body/welcome.php";
}


else {
    if ($menuNum == 0) {
        if($subPage != 1 && $subPage != 2) {
            $action=$mainMenuShortNum*100;
        }
        include "/body/" . "$mainMenuShortNum" . "xx/Bodypage" . strval($action) . ".php";
    }
    else {
        include "body/" . "$mainMenuShortNum" . "xx/function/function.php";
    }
}


