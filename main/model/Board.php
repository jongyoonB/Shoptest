<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오후 9:23
 */

include "DB_Function.php";


class FreeBoard{
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
}

?>