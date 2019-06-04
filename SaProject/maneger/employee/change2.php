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
        <title>更新員工</title>
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
        $nameErr = $titleErr = $accErr = $passwordErr = "";
        $name = $title = $acc = $password = "";
        $sure = true;

        if (isset($_POST["Reg"])) {
            $name = $_POST["name"];
            $id = $_POST["title"];
            $bir = $_POST["acc"];
            $phone = $_POST["password"];

            if (empty($_POST["name"])) {

                $nameErr = "姓名是必填的!";
                $sure = false;
            }
			if (empty($_POST["title"])) {

                $titleErr = "職稱是必填的!";
                $sure = false;
            }
			if (empty($_POST["acc"])) {

                $accErr = "帳號是必填的!";
                $sure = false;
            }
			if (empty($_POST["password"])) {

                $passwordErr = "密碼是必填的!";
                $sure = false;
            }
			

            
            if ($sure) {

                $db = DB();
                $sql = "UPDATE \"員工\" \n" .
                        "SET \"員工編號\" = ".$_SESSION["empnum"].",\n" .
                        "\"員工姓名\" = '".$_POST["name"]."',\n" .
                        "\"職稱\" = '".$_POST["title"]."',\n" .
                        "\"帳號\" = '".$_POST["acc"]."',\n" .
                        "\"密碼\" = '".$_POST["password"]."' \n" .
                        "WHERE\n" .
                        "	\"員工編號\" =" . $_SESSION["empum"];

                $db->query($sql);
//                echo 'swal("新增成功！", "回到員工總覽 或是 員工新增?", "success").then(function (result) {
//                    
//                    window.location.href = "http://tw.yahoo.com";
//                }); ';

                echo '        <script>
            swal({
                title: "更改成功！",
                text: "回到員工總覽 或是 更新員工?",
                icon: "success",
                buttons: {
                    1: {
                        text: "員工總覽",
                        value: "員工總覽",
                    },
                    2: {
                        text: "更新員工",
                        value: "更新員工",
                    },
                },

            }).then(function (value) {
                switch (value) {
                    case"員工總覽":
                        window.location.href = "all.php";
                        break;
                    case"更新員工":
                        window.location.href = "change.php";
                        break;
                        

                }
            })
        </script>  ';


//                header("Location:all.php");
            } else {
                $mes = $titleErr . $nameErr . $accErr . $passwordErr;
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
                    <a href="#" style="color:#000; ">員工</a>          
                    <ul style="z-index: 2; ">          
                        <li><a href="../customer/all.php">員工總覽</a></li>
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
                        <li><a href="../order/add.php">新增</a></li>
                        <li><a href="../order/delete.php">刪除</a></li>
                        <li><a href="../order/change.php">更新</a></li>                   
                    </ul>
                </li>   

                <li class="sub">         
                    <a href="#" style="color:#000; ">報表</a>          
                    <ul style="z-index: 2">          
                        <li><a href="/reports/import">進貨報表</a></li>
                        <li><a href="/reports/export">銷貨報表</a></li>
                        <li><a href="/reports/inventory">庫存報表</a></li>          
                    </ul>
                </li>          

            </ul>
        </div>




        <div class="container">          


            <!--~~~~~~~~~~~~~~~~~--> 
            <div class="content">
                <h2>更新員工</h2>
                <hr/>
                
                <p>員工編號:<?php echo $_SESSION["idNum"]; ?></p>
                <br>
                <br>
                
                <form method="post" action="">

                    <div class="6u 12u$(small)"> <p>員工姓名：</p>
                        <input type="text" name="name" id="name" value="<?php echo $_SESSION["name"]; ?>" placeholder="Name" required>
                    </div>

                    <br/>
                    <div class="6u 12u$(small)"> <p>職稱：</p>
                        <input type="text" name="title" id="title" value="<?php echo $_SESSION["title"]; ?>" placeholder="Ex.協理" required>
                    </div>

                    <br/>
                    <div class="6u 12u$(small)"> <p>帳號：</p>
                        <input type="text" name="acc" id="acc" value="<?php echo $_SESSION["acc"]; ?>" placeholder="Ex.協理" required>
                    </div>                    

                    <br/>
                    <div class="6u 12u$(small)"> <p>密碼：</p>
                        <input type="text" name="password" id="password" value="<?php echo $_SESSION["password"]; ?>" placeholder="Ex.協理" required>
                    </div>
                    


                    <div class ="Err" style="color:red;">
                        <?php
                        echo "<p>" . $nameErr . "</p>";
                        echo "<p>" . $titleErr . "</p>";
                        echo "<p>" . $accErr . "</p>";
                        echo "<p>" . $passwordErr . "</p>";
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
