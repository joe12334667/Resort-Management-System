<?php

include 'DataBase.php';

function FindbyId($id) {
    $db = DB();
    $sql = "SELECT A\n" .
            "	.顧客名稱,\n" .
            "	A.\"連絡電話\",\n" .
            "	A.\"電子郵件\",\n" .
            "	a1.\"房型編號\",\n" .
            "	a1.\"訂購間數\",\n" .
            "	a1.\"加床\",\n" .
            "	a1.\"訂單編號\",\n" .
            "	a1.\"訂房日期\" \n" .
            "FROM\n" .
            "	\"顧客資料\" A,\n" .
            "	\"顧客訂房\" a1 \n" .
            "WHERE\n" .
            "	A.\"身分證字號\" = '" . $id . "' \n" .
            "	AND A.\"顧客編號\" = a1.\"顧客編號\" \n" .
            "ORDER BY\n" .
            "	a1.\"房型編號\";";
    $result = $db->query($sql);
    $out = false;
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
//PDO::FETCH_OBJ 指定取出資料的型態
//        echo '<tr>';
//        echo '<td>' . $row->顧客編號 . "</td><td>" . $row->顧客名稱 . "</td>";
//        echo '</tr>';
        $house = $row->房型編號;
        echo '
        <hr/>
        <p>	姓名：' . $row->顧客名稱 . '</p>
        <p>     電話：' . $row->連絡電話 . '</p>
        <p>     E-mail：' . $row->電子郵件 . '</p>
        <p>     訂購房型：' . $row->房型編號 . '</p>
        <P>     訂購數量:' . $row->訂購間數 . '    </p>
        <p>     加床數量：' . $row->加床 . '    </p>
        <p>     訂單編號：' . $row->訂單編號 . '</p>
        <p>     訂房日期：' . $row->訂房日期 . '</p>';
        $out = true;
    }
    if (!$out) {
        echo '<div class ="Err" style="color:red;">
        查不到資料！  請檢查輸入資料是否正確！</div>';
        echo '<script>  swal({
            text: "查不到資料！  請檢查輸入資料是否正確！",
            icon: "error",
            button: false,
            timer: 3000,
        }); </script>';
    }
}

function FindbyName($name) {
    $db = DB();
    $sql = "SELECT A\n" .
            "	.顧客名稱,\n" .
            "	A.\"連絡電話\",\n" .
            "	A.\"電子郵件\",\n" .
            "	a1.\"房型編號\",\n" .
            "	a1.\"訂購間數\",\n" .
            "	a1.\"加床\",\n" .
            "	a1.\"訂單編號\",\n" .
            "	a1.\"訂房日期\" \n" .
            "FROM\n" .
            "	\"顧客資料\" A,\n" .
            "	\"顧客訂房\" a1 \n" .
            "WHERE\n" .
            "	A.\"顧客名稱\" = '" . $name . "' \n" .
            "	AND A.\"顧客編號\" = a1.\"顧客編號\" \n" .
            "ORDER BY\n" .
            "	a1.\"房型編號\";";
    $result = $db->query($sql);
    $out = false;
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
//PDO::FETCH_OBJ 指定取出資料的型態
//        echo '<tr>';
//        echo '<td>' . $row->顧客編號 . "</td><td>" . $row->顧客名稱 . "</td>";
//        echo '</tr>';

        echo '
        <hr/>
        <p>	姓名：' . $row->顧客名稱 . '</p>
        <p>     電話：' . $row->連絡電話 . '</p>
        <p>     E-mail：' . $row->電子郵件 . '</p>
    <p>     訂購房型：' . $row->房型編號 . '</p>
        <P>     訂購數量:' . $row->訂購間數 . '    </p>
        <p>     加床數量：' . $row->加床 . '    </p>
        <p>     訂單編號：' . $row->訂單編號 . '</p>
        <p>     訂單時間：' . $row->訂房日期 . '</p>';
        $out = true;
    }
    if (!$out) {
        echo '<div class ="Err" style="color:red;">
        查不到資料！  請檢查輸入資料是否正確！</div>';
        echo '<script>  swal({
            text: "查不到資料！  請檢查輸入資料是否正確！",
            icon: "error",
            button: false,
            timer: 3000,
        }); </script>';
    }
}

function FindOrder($id, $name) {
    $db = DB();
    $sql = "SELECT A\n" .
            "	.顧客名稱,\n" .
            "	A.\"連絡電話\",\n" .
            "	A.\"電子郵件\",\n" .
            "	a1.\"房型編號\",\n" .
            "	a1.\"訂購間數\",\n" .
            "	a1.\"加床\",\n" .
            "	a1.\"訂單編號\",\n" .
            "	a1.\"訂房日期\" \n" .
            "FROM\n" .
            "	\"顧客資料\" A,\n" .
            "	\"顧客訂房\" a1 \n" .
            "WHERE\n" .
            "	A.\"身分證字號\" = '" . $id . "' \n" .
            "	AND A.\"顧客名稱\" = '" . $name . "' \n" .
            "	AND A.\"顧客編號\" = a1.\"顧客編號\" \n" .
            "ORDER BY\n" .
            "	a1.\"房型編號\";";
    $result = $db->query($sql);
    $out = false;
    
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
//PDO::FETCH_OBJ 指定取出資料的型態
//        echo '<tr>';
//        echo '<td>' . $row->顧客編號 . "</td><td>" . $row->顧客名稱 . "</td>";
//        echo '</tr>';
        $house = $row->房型編號;
        echo '
        <hr/>
        <p>	姓名：' . $row->顧客名稱 . '</p>
        <p>     電話：' . $row->連絡電話 . '</p>
        <p>     E-mail：' . $row->電子郵件 . '</p>
        <p>     訂購房型：' . house($row->房型編號) . '</p>
        <P>     訂購數量:' . $row->訂購間數 . '    </p>
        <p>     加床數量：' . $row->加床 . '    </p>
        <p>     訂單編號：' . $row->訂單編號 . '</p>
        <p>     訂房日期：' . $row->訂房日期 . '</p>';
        $out = true;
    }
    if (!$out) {
        echo '<div class ="Err" style="color:red;">
        查不到資料！  請檢查輸入資料是否正確！</div>';
        echo '<script>  swal({
            text: "查不到資料！  請檢查輸入資料是否正確！",
            icon: "error",
            button: false,
            timer: 3000,
        }); </script>';
    }
    $db = NULL;
}

function FindUser ($acc , $password){
    $db = DB();
    $sql = "SELECT * FROM \"員工\" WHERE \"帳號\"='".$acc."' and \"密碼\"='".$password."'";
    $result = $db->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if($row>1){
        $_SESSION["acc"] = $acc;
        $_SESSION["password"] = $password;
        
        
        header('Location: ../maneger/userIndex.php');
    }else{
        echo '<script>  swal({
            text: "查不到資料！  請檢查輸入資料是否正確！",
            icon: "error",
            button: false,
            timer: 3000,
        }); </script>';
    }

}

function logInSure(){
    if($_SESSION["acc"] == ""){
        // echo '<script>  swal({
        //     text: "未登入或登入逾時！  兩秒後跳轉至登入畫面!",
        //     icon: "error",
        //     button: false,
        //     timer: 2000,
        // }); </script>';
        
        header('Location: ../maneger.php');
        $_SESSION["unLog"] = true;
        // echo '<meta http-equiv="refresh" content="2;url=../maneger.php" />';
    }

}



function house($houseId) {
    switch ($houseId) {
        case "R001":
            return "甜蜜雙人房";
            break;
        case "R002":
            return "豪華雙人房";
            break;
        case 'R003':
            return"四人家庭房";
            break;
        case "R004":
            return"娛樂四人房";
            break;
        case "R005":
            return"海景欣賞房";
            break;
        case "R006":
            return"經典大套房";
            break;
        case "R007":
            return"溫馨親子套房";
            break;
        case "R008":
            return"和洋式套房";
            break;
        case "R009":
            return"主題套房";
            break;
        case "R010":
            return"樓中樓套房";
            break;
        default :
            return "QQ";
    }
}
