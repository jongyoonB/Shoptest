<?php

include (dirname(__FILE__)."/../commonDataMainView.php");

$mainMenuShortNum = intval($action/100);


for($count = 1 ; $count <= 5 ; $count++){
    $codeNum = $count * 100;

    echo "<a href = '../controller/main_CTL.php?action=$codeNum'>";

    if($mainMenuShortNum == $count){
        echo "<img class = 'main' src = '../../img/Main/Menu/Main/".$count."_select.png'>";
    }

    else{
        echo "<img class='main' src = '../../img/Main/Menu/Main/$count.png'>";
    }

    echo "</a>";
}