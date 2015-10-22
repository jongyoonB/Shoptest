<table align="center" width="100%">
    <th>글 번호</th>
    <th>제목</th>
    <th>작성자</th>
    <th>조회수</th>
    <th>작성 일자</th>


<?php
session_start();
include dirname(__FILE__)."/../../../commonDataMainView.php";

$value = $_SESSION['board_value'];
$numOfPage = $_SESSION['numbOfPage'];
$count = count($value);


for($index_i = 0 ; $index_i < $count ; $index_i++){



    echo "<tr>";
        echo "<td>".$value[$index_i]['contents_id']."</td>";
        echo "<td><a href = '../controller/main_CTL.php?action=111&page=".$page."&pid=".$value[$index_i]['contents_id']."'>".$value[$index_i]['subject']."</a></td>";
        echo "<td>".$value[$index_i]['user_name']."</td>";
        echo "<td>".$value[$index_i]['hits']."</td>";
        echo "<td>".substr($value[$index_i]['reg_date'],2,2)."년 ".substr($value[$index_i]['reg_date'],5,2)."월 ".substr($value[$index_i]['reg_date'],8,2)."일&nbsp&nbsp".(int)substr($value[$index_i]['reg_date'],-8,2)."시 ".substr($value[$index_i]['reg_date'],-5,2)."분"."</td>";
}

echo "</tr></table>";


$start_p = ($page % 10 !=0) ? floor($page / 10)*10 +1 : floor(($page-1) / 10)*10 + 1;
$end_p = ($start_p+9 < $numOfPage) ? $start_p + 9 : $numOfPage;



$url = "../controller/main_CTL.php?action=".$action."&page=";

if($start_p == 1){
    echo "☜ ";
}
else{
    echo "<a href = ".$url.($start_p-10).">☜ </a>";
}

if($page==1){
    echo "◀ ";
}

else{
    echo "<a href = ".$url.($page-1).">◀ </a>";
}


for ($Index_i = $start_p; $Index_i <= $end_p; $Index_i++) {
    echo "<a href = ../controller/main_CTL.php?action=".$action."&page=".$Index_i.">&nbsp$Index_i&nbsp</a>";
}

/*if(!$keyword) {

    for ($Index_i = $start_p; $Index_i <= $end_p; $Index_i++) {
        echo "<a href = ".$url.$Index_i.">&nbsp$Index_i&nbsp</a>";
    }
}

else{
    for ($Index_i = $start_p; $Index_i <= $end_p; $Index_i++) {
        echo "<a href = ".$url.$Index_i."&keyword=".$keyword.">&nbsp$Index_i&nbsp</a>";
    }
}*/

if($page==$numOfPage){
    echo " ▶";
}
else{
    echo "<a href = ".$url.($page+1)."> ▶</a>";
}

if($end_p+1>$numOfPage){
    echo " ☞";
}
else{
    echo "<a href = ".$url.($end_p+1)."> ☞</a>";
}

?>