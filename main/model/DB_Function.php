<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오후 7:38
 */

define("ADD", "127.0.0.1");
define("USER", "root");
define("PASSWD", "tpdltja1!");
switch ($_SESSION['board_num']){
    case 1:{
        define("DB_NAME", "board");
        break;
    }

    case 2:{
        //define("DB_NAME", "Secondboard");
        //break;
    }
}


function DB_CONN(){
    return mysqli_connect(ADD, USER, PASSWD, DB_NAME);
}

function transmit_Query($argQuery){
    return mysqli_query(DB_CONN(), $argQuery);
}

function getDB_Value($argResult){
    return mysqli_fetch_array($argResult);
}

function getDB_rows($argResult){
    return mysqli_num_rows($argResult);
}


function select_all ($argTable_Num){
    switch($argTable_Num){
        case 1:{

        }

        case 2:{

        }
    }
    $query = "select * from "
}
?>