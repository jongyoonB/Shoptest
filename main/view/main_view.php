<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오전 11:30
 */
include "commonDataMainView.php";
?>

<html>

    <head>
        <link rel = "stylesheet" href="../../css/aLinkNoUnderLine.css">
        <link rel = "stylesheet" href="../../css/img_Size_Menu.css">
        <link rel = "stylesheet" href="../../css/table_bgColor.css">
    </head>

    <body>

        <table width="800" height="600" border="1">

            <tr>
                <td colspan="2" width="800" height="100"><?php include './main/title.php' ?></td>
            </tr>

            <tr>
                <td class = "main_menu" colspan="2" width="800" height="50"><?php include './menu/main_menu.php'?></td>
            </tr>

            <tr>
                <td class = "left_menu" width="150" height="400"><?php include './menu/left_menu.php'?></td>
                <td width="650" height="200"><?php include './main/main.php' ?></td>
            </tr>

            <tr>
                <td colspan="2"><?php include './menu/copyrights.php'?></td>
            </tr>

        </table>
    </body>
</html>
