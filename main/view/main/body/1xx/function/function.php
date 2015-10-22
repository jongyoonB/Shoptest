<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-22
 * Time: 오후 11:18
 */

session_start();
include dirname(__FILE__)."/../../../../commonDataMainView.php";

$value = $_SESSION['board_value'];
//var_dump($_SESSION['board_value']);
?>


<title>글 내YONG</title>
<style>
    table{
        width: 650px;
        border-collapse: collapse;
    }
    tr.bg{
        background-color: lightgray;
    }
    th{
        width: 260px;
    }
    td, th{
        border : 1px solid;
        text-align: center;
    }
    table {
        background: url("http://img2.ruliweb.daum.net/mypi/gup/a/3/35/o/34948076721.jpg") no-repeat;
        background-size: 100%;

    }
    td, {
        font-size: 30px;
        color: #3b30ff;
    }
    a{
        text-decoration: none;
        color: black;
    }
    p{
        text-align: center;
    }
</style>
</head>

<body>
<table align="center">
    <tr class="bg">
        <th>글번호 : <?php echo $value[0]['contents_id'] ?></th>
        <th>조회수 : <?php echo $value[0]['hits'] ?></th>
        <th>작성자 : <?php echo $value[0]['user_name'] ?></th>
        <th>작성 일자 : <br><?php echo substr($value[0]['reg_date'],2,2)."년 ".substr($value[0]['reg_date'],5,2)."월 ".substr($value[0]['reg_date'],8,2)."일&nbsp&nbsp<br>".(int)substr($value[0]['reg_date'],-8,2)."시 ".substr($value[0]['reg_date'],-5,2)."분"; ?></th>
    </tr>

    <tr class="bg">
        <th colspan="4"><?php echo $value[0]['subject']?></th>
    </tr>

    <tr>
        <td colspan="4" height="600px"><?php echo $value[0]['contents'] ?></td>
    </tr>
    <tr>
        <td colspan="4">
            <a href = "../controller/main_CTL.php?action=110&page=<?php echo $page?>">글 목록&nbsp&nbsp</a>
            <a href = "../controller/main_CTL.php?action=113&pid=<?php echo $value[0]['contents_id']?>">글 수정&nbsp&nbsp</a>
            <a href = "../controller/main_CTL.php?action=114&pid=<?php echo $value[0]['contents_id']?>">글 삭제</a>
        </td>
    </tr>
</table>


</body>
