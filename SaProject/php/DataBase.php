<?php
function DB(){
$hostname = 'ec2-54-227-245-146.compute-1.amazonaws.com';
$username = 'mvhmxrcocxjlju';
$password = '4fdbbc476b6e487e7c9ef73fc0ed3b2b156d7b7dec0f76483a0874530c921366';
$db_name = "deiv7nvlt8gv07";

try {
    $db = new PDO("pgsql:host=" . $hostname . ";dbname=" . $db_name, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //PDO::MYSQL_ATTR_INIT_COMMAND 設定編碼
    //echo '連線成功';
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //錯誤訊息提醒
    return $db;
//    $db = null; //結束與資料庫連線
} catch (PDOException $e) {
    //error message
    echo $e->getMessage();
}
}
?>



