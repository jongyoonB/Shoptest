<?php

include (dirname(__FILE__)."/../commonDataMainView.php");

$mainMenuShortNum = intval($action/100);
$subMenuShortNum = intval($action%100);

//action != null -> print left menu
if($action){
    for($count = 1 ; $count <= 5 ; $count++) {
        $codeNum = $mainMenuShortNum * 100 + $count * 10;

        echo "<a href = '../controller/main_CTL.php?action=$codeNum' >";


        if ($subMenuShortNum == $count * 10) {
            echo "<img class = 'left' src = '../../img/Main/Menu/Left/" . $codeNum . "_select.png'>";
        } else {
            echo "<img class='left' src = '../../img/Main/Menu/Left/$codeNum.png'>";
        }

        echo "</a><br><br>";
    }
}