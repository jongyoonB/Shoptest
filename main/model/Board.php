<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오후 9:23
 */

//use class not yet...
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



function getBoardValue($argTableName, $argPage, $argPid){
    $result = select_Query($argTableName, $argPage, $argPid);

    //echo $_SESSION['numbOfPage']."<br>";

    for($index_i = 0 ; $index_i < 5 ; $index_i++){
        $arrTemp[$index_i] = getDB_Value($result);
        //var_dump($arrTemp[$index_i]);

        //echo "<br><br><br>";
    }
    /*if($argPid) {
        echo $arrTemp[0]['subject']."<br>".$arrTemp[0]['hits'];
        $query = "update ".$argTableName." set hits = ".($arrTemp[0]['hits'] + 1)." where contents_id = $argPid";
        transmit_Query($query);
        getBoardValue($argTableName, $argPage, null);
        $arrTemp[0]['hits'] += 1;
    }*/

    //var_dump($arrTemp);
    $_SESSION['board_value'] = $arrTemp;
    //var_dump($_SESSION['board_value']);
}

function delete_contents($argTableName, $argPage, $argPid){
    $query = "delete from ".$argTableName." where contents_id = ".$argPid;
    transmit_Query($query);
    getBoardValue($argTableName, $argPage, null);


}

?>