<?php
/**
 * Created by PhpStorm.
 * User: JongYoon
 * Date: 2015-10-21
 * Time: 오후 1:39
 */
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 110;

echo "Body Page Number $action";