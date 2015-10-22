<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오후 7:38
 */

define("ADD", "localhost");
define("USER", "root");
define("PASSWD", "DB!");
define("DB_NAME", "board");
define("per_page", 5);

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


function select_Query ($argTableName, $argPage, $argPid){
    session_start();
    //echo "<script>alert('$argPage')</script>";
    $query = "select * from $argTableName";
    $numOfRows = getDB_rows(transmit_Query($query));

    $_SESSION['numbOfPage'] = ($numOfRows % per_page ==0) ? floor($numOfRows / per_page) : floor($numOfRows / per_page) +1;

    if($argPid){
        $query.=" where contents_id = "."$argPid";
    }

    else{
        $query .= " limit " . (($argPage - 1) * per_page) . "," . per_page;
    }
    //echo $query;

    return transmit_Query($query);
}




?>