<?php
session_start();
include 'DataBase.php';
$db = DB();


$sql = "INSERT INTO \"顧客資料\" ( \"顧客名稱\", \"生日\", \"身分證字號\", \"連絡電話\","
        . " \"電子郵件\", \"性別\" )VALUES( '".$_SESSION["name"] ."', '".$_SESSION["bir"] ."', '".$_SESSION["id"] ."', "
        . "'".$_SESSION["phone"] ."', '".$_SESSION["email"] ."' , '".$_SESSION["gender"] ."' );";
echo $sql;
$db->query($sql);


$sql = "SELECT \"顧客編號\" FROM \"顧客資料\" WHERE 身分證字號 = '". $_SESSION["id"] ."'";
$result = $db->query($sql);
$row = $result->fetch(PDO::FETCH_OBJ);
$cusNo = $row->顧客編號;

if(isset($_SESSION["a"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["a"]
            ."' , '". $_SESSION["OrderDate"] ."' , '".$_SESSION["a_house"]."' , '".$_SESSION["a_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["b"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["b"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["b_house"]."' , '".$_SESSION["b_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["c"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["c"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["c_house"]."' , '".$_SESSION["c_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["d"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["d"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["d_house"]."' , '".$_SESSION["d_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["e"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["e"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["e_house"]."' , '".$_SESSION["e_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["f"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["f"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["f_house"]."' , '".$_SESSION["f_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["g"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["g"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["g_house"]."' , '".$_SESSION["g_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["h"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["h"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["h_house"]."' , '".$_SESSION["h_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["i"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["i"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["i_house"]."' , '".$_SESSION["i_bed"]."' )";
    echo $sql;
    $db->query($sql);
}
if(isset($_SESSION["j"])){  
    $sql = "INSERT INTO \"顧客訂房\" (\"顧客編號\" , \"房型編號\" , \"訂房日期\" ,"
            . " \"訂購間數\" , \"加床\") VALUES ('".$cusNo."' , '".$_SESSION["j"]
            ."' , '". $_SESSION["OrderDate"]."' , '".$_SESSION["j_house"]."' , '".$_SESSION["j_bed"]."' )";
    echo $sql;
    $db->query($sql);
}

$db = NULL;
header("Location:../room-success/room-success.php");    

//$result = $db->query($sql);

//$sql = "select *  from \"Cus\" ";
//$result = $db->query($sql);

//echo '<table  border="1">';
//while ($row = $result->fetch(PDO::FETCH_OBJ)) {
////PDO::FETCH_OBJ 指定取出資料的型態
//    echo '<tr>';
//    echo '<td>' .$row->顧客編號 . "</td><td>" . $row->顧客名稱 . "</td>";
//    echo '</tr>';
//}
//echo '</table>';
    
