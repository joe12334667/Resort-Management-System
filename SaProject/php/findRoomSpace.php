<?php

session_start();
include 'DataBase.php';

function findRoomSpace($date) {
    $db = DB();
    $sql = "SELECT\n" .
            "	* \n" .
            "FROM\n" .
            "	房型資料 ";

    $result = $db->query($sql);
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
        //PDO::FETCH_OBJ 指定取出資料的型態`
      
        switch ($row->房型編號) {
                
            case "R001" :
                    $_SESSION["R001"] = $row->總間數;
                break;
            case "R002" :
                    $_SESSION["R002"] = $row->總間數;
                break;
            case "R003" :
                    $_SESSION["R003"] = $row->總間數;
                break;
            case "R004" :
                    $_SESSION["R004"] = $row->總間數;
                break;
            case "R005" :
                    $_SESSION["R005"] = $row->總間數;
                break;
            case "R006" :
                    $_SESSION["R006"] = $row->總間數;
                break;
            case "R007" :
                    $_SESSION["R007"] = $row->總間數;
                break;
            case "R008" :
                    $_SESSION["R008"] = $row->總間數;
                break;
            case "R009" :
                    $_SESSION["R009"] = $row->總間數;
                break;
            case "R010" :
                    $_SESSION["R010"] = $row->總間數;
                break;
            
        }
    }
    
//----------------------------------------------------------------
    $sql = "SELECT\n" .
            "	* \n" .
            "FROM\n" .
            "	顧客訂房 \n" .
            "WHERE\n" .
            "	訂房日期 = '" . $date . "'";

    $result = $db->query($sql);

    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
        
        //PDO::FETCH_OBJ 指定取出資料的型態
        switch ($row->房型編號) {
            case "R001" :
                
                    $_SESSION["R001"] -= (int)$row->訂購間數;
                break;
            case "R002" :
                    $_SESSION["R002"] -= (int)$row->訂購間數;
                break;
            case "R003" :
                    $_SESSION["R003"] -= (int)$row->訂購間數;
                break;
            case "R004" :
                    $_SESSION["R004"] -=(int)$row->訂購間數;
                break;
            case "R005" :
                    $_SESSION["R005"] -= (int)$row->訂購間數;
                break;
            case "R006" :
                    $_SESSION["R006"] -= (int)$row->訂購間數;
                break;
            case "R007" :
                    $_SESSION["R007"] -= (int)$row->訂購間數;
                break;
            case "R008" :
                    $_SESSION["R008"] -= (int)$row->訂購間數;
                break;
            case "R009" :
                    $_SESSION["R009"] -= (int)$row->訂購間數;
                break;
            case "R010" :
                    $_SESSION["R010"] -= (int)$row->訂購間數;
                break;
            
        }
    }
}
