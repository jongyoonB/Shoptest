<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오후 1:39
 */
session_start();
//include '../../../commonDataMainView.php';
include (dirname(__FILE__)."/../../../commonDataMainView.php");


//var_dump($_SESSION['board_value']);
//echo count($_SESSION['board_value'])."<br>";
$value = $_SESSION['board_value'];
//echo $value[0]['user_name'];

echo "
<table align='center' border='1'>
    <th>글 번호</th>
    <th>제목</th>
    <th>작성자</th>
    <th>조회수</th>
    <th>작성 일자</th>

";
for ($index_i = 0 ; $index_i < count($value) ; $index_i ++){
    echo "<tr>";
        echo "<td>".$value[$index_i]['contents_id']."</td>";
        echo"<td><a href = '../../../../controller/main_CTL.php?action=111&pid=".$index_i."'</a>".$value[$index_i]['subject']."</td>";
        echo"<td>".$value[$index_i]['user_name']."</td>";
        echo"<td>".$value[$index_i]['hits']."</td>";
        echo"<td>".$value[$index_i]['reg_date']."</td>";
    }

echo "
</table>";

?>
