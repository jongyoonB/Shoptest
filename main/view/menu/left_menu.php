<?php

include (dirname(__FILE__)."/../commonDataMainView.php");

$mainMenuShortNum = intval($action/100);
$subMenuShortNum = intval($action%100);

switch($mainMenuShortNum){
    case 1:{
        $count = 2;
        break;
    }

    case 2:{

        break;
    }

    case 3:{

        break;
    }

    case 4:{

        break;
    }

    case 5:{

        break;
    }
}


//action != null -> print left menu
if($action){
    for($index_i = 1 ; $index_i <= $count ; $index_i++) {
        $codeNum = $mainMenuShortNum * 100 + $index_i * 10;

        echo "<a href = '../controller/main_CTL.php?action=$codeNum&page=1' >";


        if ($subMenuShortNum == $index_i * 10) {
            echo "<img class = 'left' src = '../../img/Main/Menu/Left/" . $codeNum . "_select.png'>";
        } else {
            echo "<img class='left' src = '../../img/Main/Menu/Left/$codeNum.png'>";
        }

        echo "</a><br><br>";
    }
}