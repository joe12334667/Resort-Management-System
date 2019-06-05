<!doctype html>
<?php
session_start();
include '../../php/FindOrder.php';
include_once '../../php/DataBase.php';
@logInSure();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>更新訂單</title>
        <!-- 連結思源中文及css -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
        <link href="../../images/user.jpg" rel="icon">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/menu.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!------------------------->
    </head>

    <body>
        <?php
        $idNumErr = $cusidErr = $roomidErr = $resDateErr = $numErr = $bedErr = "";
        $idNum = $cusid = $roomid = $num = $resDate = $bed = "";
        $sure = true;
        if (isset($_POST["Reg"])) {
            $cusid = $_POST["cusid"];
            $roomid = $_POST["roomid"];
            $resDate = $_POST["resDate"];
            $num = $_POST["num"];
            $bed = $_POST["bed"];
            if (empty($_POST["cusid"])) {
                $nameErr = "顧客編號是必填的!";
                $sure = false;
            }
            if (empty($_POST["roomid"])) {
                $roomidErr = "房型編號是必填的!";
                $sure = false;
            
            }
            if (empty($_POST["resDate"])) {
                $resDateErr = "訂房日期是必填的!";
                $sure = false;
            } else {
//            $date = (strtotime($bir) - strtotime(date('Y-m-d'))) / (365*3+366);
                $age = round((time() - strtotime($resDate)));
                if ($age > 0) {
                    $resDateErr = "訂房日期不能是過去!";
                    $sure = false;
                }
            }
            if (empty($_POST["num"])) {
                $numErr = "訂購間數是必填的!";
                $sure = false;
            
            }
            if (empty($_POST["bed"])) {
                $bedErr = "加床是必填的!";
                $sure = false;
            }else{
                if($_POST["bed"]>2 || $_POST["bed"] <0){
                    $bedErr = "加床不可超過限制!";
                $sure = false;
                }
                
            }
            if ($sure) {
                $db = DB();
                $sql = "UPDATE \"顧客訂房\" \n" .
                        "SET \"訂單編號\" = ".$_SESSION["idNum"].",\n" .
                        "\"顧客編號\" = ".$_POST["cusid"].",\n" .
                        "\"房型編號\" = '".$_POST["roomid"]."',\n" .
                        "\"訂房日期\" = '".$_POST["resDate"]."',\n" .
                        "\"訂購間數\" = ".$_POST["num"].",\n" .
                        "\"加床\" = ".$_POST["bed"]."\n" .
                        "WHERE\n" .
                        "	\"訂單編號\" =" . $_SESSION["idNum"];
                $db->query($sql);
//                echo 'swal("新增成功！", "回到訂單總覽 或是 訂單新增?", "success").then(function (result) {
//                    
//                    window.location.href = "http://tw.yahoo.com";
//                }); ';
                echo '        <script>
            swal({
                title: "更改成功！",
                text: "回到訂單總覽 或是 更新訂單?",
                icon: "success",
                buttons: {
                    1: {
                        text: "訂單總覽",
                        value: "訂單總覽",
                    },
                    2: {
                        text: "更新訂單",
                        value: "更新訂單",
                    },
                },
            }).then(function (value) {
                switch (value) {
                    case"訂單總覽":
                        window.location.href = "all.php";
                        break;
                    case"更新訂單":
                        window.location.href = "change.php";
                        break;
                        
                }
            })
        </script>  ';
//                header("Location:all.php");
            } else {
                $mes = $nameErr . $roomidErr . $resDateErr .$numErr . $bedErr;
                echo '<script>  swal({
                text: "' . $mes . '",
                icon: "error",
                button: false,
                timer: 3000,
            }); </script>';
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <!-- Header -->
        <header id="header" class="alt">
            <div class="logo"><a href="../../index/index.html">渡假村 <span>RESORT</span></a></div>
            <a href="#menu">Menu</a>
        </header>

        <!-- Nav -->
        <nav id="menu">
            <ul class="links">
                <li><a href="../../news/news.html">最新消息</a></li>
                <li><a href="../../room/room.php">訂房服務</a></li>
                <li><a href="../../room/roomSpace.php">查詢空房</a></li>
                <li><a href="../../search/search.php">查詢訂房</a></li>
                <li><a href="../../about/about.html">關於我們</a></li>
                <li><a href="../../information/information.php">聯絡資訊</a></li>

                <li style="margin-top: 200%"><a href="../maneger/maneger.php">管理者介面</a></li>
                <li style="margin-top: 0%"><a href="../php/logOut.php">登出</a></li>
            </ul>
        </nav>

        <section id="One" class="wrapper style3">
            <div class="inner" style="z-index: 1">
                <header class="align-center">
                    <h2>Maneger Page</h2>
                </header>
            </div>
        </section>

        <!--**************************-->
        <div class ="nav">
            <ul id="navigation" style="z-index: 2; background:#F1EEC2;">        
                <li><a href="../userIndex.php" style="color:#000; ">主頁</a></li>            

                <li class="sub">         
                    <a href="#" style="color:#000; ">客戶</a>          
                    <ul style="z-index: 2; ">          
                        <li><a href="../customer/all.php">客戶總覽</a></li>
                        <li><a href="../customer/add.php">新增</a></li>                 
                        <li><a href="../customer/delete.php">刪除</a></li>
                        <li><a href="../customer/change.php">更新</a></li>                       
                    </ul>
                </li>              

                <li class="sub">         
                    <a href="#" style="color:#000; ">員工</a>          
                    <ul style="z-index: 2">          
                        <li><a href="../employee/all.php">員工總覽</a></li>
                        <li><a href="../employee/add.php">新增</a></li>
                        <li><a href="../employee/delete.php">刪除</a></li>
                        <li><a href="../employee/change.php">更新</a></li>                   
                    </ul>
                </li>     

                <li class="sub">         
                    <a href="#" style="color:#000; ">訂單</a>          
                    <ul style="z-index: 2">          
                        <li><a href="../order/all.php">訂單總覽</a></li>
                        <li><a href="../order/delete.php">刪除</a></li>
                        <li><a href="../order/change.php">更新</a></li>                   
                    </ul>
                </li>   

                         

            </ul>
        </div>




        <div class="container">          


            <!--~~~~~~~~~~~~~~~~~--> 
            <div class="content">
                <h2>更新訂單</h2>
                <hr/>
                
                <p>訂單編號:<?php echo $_SESSION["idNum"]; ?></p>
                <br>
                <br>
                
                <form method="post" action="">

                    <div class="6u 12u$(small)"> <p>顧客編號：</p>
                        <input type="number" name="cusid" id="cusid" value="<?php echo $_SESSION["cusid"]; ?>" placeholder="Name" required>
                    </div>

                    <br/>
                    <div class="6u 12u$(small)"> <p>房型編號：</p>
                        <input type="text" name="roomid" id="roomid" value="<?php echo $_SESSION["roomid"]; ?>" placeholder="R001-R010" required>
                    </div>

                    <br/>
                    <div class="6u$ 12u$(small)"> 
                        <p>訂房日期：</p>
                        <input type="date" name="resDate" id="resDate" value="<?php echo $_SESSION["resDate"]; ?>" placeholder="yyyy-mm-dd" required>
                    </div>
                    <br/>
                    <p>間數：</p>

					<div class="12u$">
                        <div class="select-wrapper">
                            <input type="number" name="num" id="num" value="<?php echo $_SESSION["num"]; ?>" placeholder="1-4" required>
                        </div>
                    </div>

                    <br/>
                    <p>加床(張數)：</p>
                    <div class="12u$">
                        <div class="select-wrapper">
                            <input type="number" name="bed" id="bed" value="<?php echo $_SESSION["bed"]; ?>" placeholder="0-2" required>
                        </div>
                    </div>
                    </div>
                    	


                    <div class ="Err" style="color:red;">
                        <?php
                        echo "<p>" . $cusidErr . "</p>";
                        echo "<p>" . $roomidErr . "</p>";
                        echo "<p>" . $resDateErr . "</p>";
                        echo "<p>" . $numErr . "</p>";
                        echo "<p>" . $bedErr . "</p>";
                        ?>
                    </div>

                    <div class="12u$">
                        <ul class="actions">
                            <div align="right"  style="margin-right: 5%">

                                <li><input type="submit" name="Reg" value="ADD"></li>

                            </div>
                        </ul>
                    </div>

                </form>


            </div>       

            <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

        </div>


        <!--~~~~~~~~~~~~~~~~~--> 
        <div class="footer">
            &copy; NTUB GROUP 10     
        </div>  
        <!--**************************-->    
    </body>

</html>