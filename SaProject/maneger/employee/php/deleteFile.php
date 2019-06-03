<?php
    session_start();
    include '../../../php/DataBase.php';
    $db = DB();
    $sql ="DELETE \n".
    "FROM\n".
    "	\"員工\"\n".
    "WHERE\n".
    "	員工編號 ='". $_SESSION["dele_id"]."'";

    $db->query($sql);
    $_SESSION["dele_sure"] = true;
    header('Location: ../delete.php');