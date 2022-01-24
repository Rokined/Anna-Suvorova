<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

$localhost = "127.0.0.1";
$my_user = "root";
$my_password = "rokined";
$world = "anna-suvorova";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($localhost, $my_user, $my_password, $world);

?>