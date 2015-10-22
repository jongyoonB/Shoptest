<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오후 7:42
 */

$id = isset($_POST['id']) ? $_POST['id'] : null;
$passwd = isset($_POST['passwd']) ? $_POST['passwd'] : null;

class loginC {

    function login($argId, $argPasswd){

        DB_connect();

        $query = "select * from user_info where id = '".$argId."'";
        $query_Result = getDB_value(transmit_query($_SESSION['conn'],$query));
        if($query_Result['id'] === $argId){
            if($query_Result['passwd'] === $argPasswd){
                return 0;
            }
            else{
                return 1;
            }
        }
        else {
            return 2;
        }

    }
}