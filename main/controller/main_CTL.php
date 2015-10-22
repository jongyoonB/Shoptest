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
include "../model/Board.php";
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
    $pid = isset($_GET['pid']) ? $_GET['pid'] : null;
    $main = intval($action / 100);
    $sub = intval(($action - $main * 100) / 10);
    $fuc = $action - $main * 100 - $sub * 10;
    /*echo "main = " . $main . "<br>";
    echo "sub = " . $sub . "<br>";
    echo "fuc = " . $fuc . "<br>";*/

    switch ($main) {

        case 1:{
            $_SESSION['board_num'] = 1;
            $_SESSION['board_num'] = 2;



            if(!$fuc){
                /* Boards
                 *              110 - Free
                 *              120 - Picture
                 */
                switch ($sub) {

                    // Free talk
                    case 0:
                    case 1:{
                        getValueBoard($_SESSION['board_num'], null);
                        break;
                    }

                    //Picture
                    case 2:{

                        break;
                    }

                    default:
                }
            }

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
                    echo "!!!<br>";
                    getValueBoard($_SESSION['board_num'], $pid);
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





        //소설
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

    header("location:../view/main_view.php?action=$action");
}
