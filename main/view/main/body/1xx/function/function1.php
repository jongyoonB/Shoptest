<?php

session_start();
$pid = isset($_GET['pid']) ? $_GET['pid'] : null;
$var = $_SESSION['board_value'];
include (dirname(__FILE__)."/../../../../commonDataMainView.php");
?>

<html>
<head>
    <title>글 내YONG</title>
    <style>
        table{
            width: 1000px;
            border-collapse: collapse;
        }
        tr.bg{
            background-color: lightgray;
        }
        th{
            width: 250px;
        }
        td, th{
            border : 1px solid;
            text-align: center;
        }
        td {
            background: url("http://img2.ruliweb.daum.net/mypi/gup/a/3/35/o/34948076721.jpg") no-repeat;
            background-size: cover;
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
        <th>글번호 : <?php echo $var[$pid]['contents_id'] ?></th>
        <th>조회수 : <?php echo $var[$pid]['hits'] ?></th>
        <th>작성자 : <?php echo $var[$pid]['user_name'] ?></th>
        <th>작성 일자 : <?php echo $var[$pid]['reg_date'] ?></th>
    </tr>

    <tr class="bg">
        <th colspan="4"><?php echo $var[$pid]['subject']?></th>
    </tr>

    <tr>
        <td colspan="4" height="600px"><?php echo $var[$pid]['contents'] ?></td>
    </tr>
</table>

<p>
    <a href = "../../../../main_view.php?action=<?php echo $action ?>&keyword=<?php echo $keyword?>">글 목록&nbsp&nbsp</a>
    <a href = "modify.php?page=<?php echo $page ?>&pid=<?php echo $pid ?>">글 수정&nbsp&nbsp</a>
    <a href = "/PJ/board3/list/modify/delete.php?page=<?php echo $page ?>&pid=<?php echo $pid ?>">글 삭제</a>
</p>0
</body>
</html>