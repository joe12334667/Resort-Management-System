<?php
    session_start();
    include '../../../php/DataBase.php';
    $db = DB();
    $sql ="DELETE \n".
    "FROM\n".
    "	\"顧客資料\"\n".
    "WHERE\n".
    "	顧客編號 =". $_SESSION["dele_id"];

    $db->query($sql);
    $_SESSION["dele_sure"] = true;
    header('Location: ../delete.php');