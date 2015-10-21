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
    echo "main = " . $main . "<br>";

    $sub = intval(($action - $main * 100) / 10);
    echo "sub = " . $sub . "<br>";

    $fuc = $action - $main * 100 - $sub * 10;
    echo "fuc = " . $fuc . "<br>";

    switch ($main) {
        case 1:{

            /* Boards
             *              110 - Free
             *              120 - Picture
             */
            switch ($sub) {

                // Free talk
                case 1:{
                    $_SESSION['board_num'] = 1;
                    break;
                }

                //Picture
                case 2:{
                    $_SESSION['board_num'] = 2;
                    break;
                }

                default:
            }


            /* Board's Function
            *              xx1 - Write
            *              xx2 - Modify
            *              xx3 - Delete
            *              xx4 - Search
            */
            switch ($fuc) {

                //Write
                case 1:{

                    break;
                }

                //Modify
                case 2:{

                    break;
                }

                //Delete
                case 3:{

                    break;
                }

                //Search
                case 4:{

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

    //header("location:../view/main_view.php?action=$action");
}
