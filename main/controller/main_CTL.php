<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오전 11:22
 */

include "../view/commonDataMainView.php";
include "../model/DB_Function.php";
include "../model/login.php";
include "../model/board.php";

//echo "<script>alert('current value of action : ".$action."')</script>";

if(!$action){
    header("location:../view/main_view.php?action=");
}

/*
 * 1xx 게시판
 *
 *
 *
 * 2xx 에세이 : 210 - 독서
 *              220 - 잠언
 *              230 - 사진
 *              240 - 인생
 *              250 - 예술
 *
 * 3xx
 */
else {

    /*
     * main : x00
     * sub  : 0x0
     * fuc  : 00x
     */
    $main = intval($action / 100);
    $sub = intval(($action - $main * 100) / 10);
    $fuc = $action - $main * 100 - $sub * 10;
    $page = isset($_GET['page']) ? $_GET['page'] : null;
    $pid = isset($_GET['pid']) ? $_GET['pid'] : null;

    //echo "<script>alert('$page')</script>";
    /*echo "main = " . $main . "<br>";
    echo "sub = " . $sub . "<br>";
    echo "fuc = " . $fuc . "<br>";*/

    switch ($main) {
        case 1:{

            /* Boards
             *              110 - Free
             *              120 - Picture
             */

            switch ($sub) {

                // Free talk
                case 1: {
                    $tableName = "FreeBoard";
                    break;
                }

                //Picture
                case 2: {
                    $board_num = "Picture";
                    break;
                }

                default:
            }
            getBoardValue($tableName, $page, null);




            /* Board's Function
            *              xx1 - view
            *              xx2 - Write
            *              xx3 - Modify
            *              xx4 - Delete
            *              xx5 - Search
            */
            switch ($fuc) {

                //view
                case 1:{
                    getBoardValue($tableName, $page, $pid);
                    break;
                }

                //Write
                case 2:{

                    break;
                }

                //Modify
                case 3:{

                    break;
                }

                //Delete
                case 4:{
                    delete_contents($tableName, $page, $pid);
                    $action=110;
                    break;
                }

                //Search
                case 5:{

                    break;
                }

                default :
            }
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


        default:
    }

    header("location:../view/main_view.php?action=$action&page=$page");

}
