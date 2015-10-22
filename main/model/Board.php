<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오후 9:23
 */

//use class not complete ye
/*class FreeBoard{
    private $contents_id;
    private $board_id;
    private $user_id;
    private $user_name;
    private $subject;
    private $contents;
    private $hits;
    private $reg_date;


    function setBoard_value(){
        $this -> user_name = '';
        $this -> subject = '';
        $this -> contents = '';
        $this -> hits = $this -> hits+1;
        $this -> reg_date = '';
    }

    function getBoard_value($argAttribute, $query){


        $result = getDB_Value(transmit_Query(DB_CONN(), $query));

        switch ($argAttribute){
            case "name":{
                return $this -> user_name;
                break;
            }

            case "subject":{
                return $this -> subject;
                break;
            }

            case contents:{
                return $this -> contents;
                break;
            }

            case hits:{
                return $this -> hits;
                break;
            }

            case reg_date:{
                return $this -> reg_date;
                break;
            }

            default:
        }
    }
}*/
session_start();
function getValueBoard($argTable_Num)
{

    switch($argTable_Num){
        case 1:{
            $tableName = "board";
            break;
        }

        case 2:{
            $tableName = "picture";
            break;
        }

        default:
    }

    $result = select_Query($tableName);
    $numRows = getDB_rows($result);

    for ($index_i = 0; $index_i < $numRows; $index_i++) {
        $arrTemp[$index_i] = getDB_Value($result);

    }

    $_SESSION['board_value'];
}


?>