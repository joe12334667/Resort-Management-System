<?php
    session_start();
    include '../../../php/DataBase.php';
    $db = DB();
    $sql ="DELETE \n".
    "FROM\n".
    "	\"顧客訂房\"\n".
    "WHERE\n".
    "	訂單編號 =". $_SESSION["dele_id"];

    $db->query($sql);
    $_SESSION["dele_sure"] = true;
    header('Location: ../delete.php');
	