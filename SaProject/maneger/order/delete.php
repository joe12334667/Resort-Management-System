<!doctype html>
<?php
session_start();
include '../../php/FindOrder.php';

LogInSure();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>刪除訂單</title>
        <!-- 連結思源中文及css -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
        <link href="../images/user.jpg" rel="icon">
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
            if(isset($_SESSION["dele_sure"])){
                if($_SESSION["dele_sure"]){
                echo '<script>  swal({
                    text: "刪除成功！",
                    icon: "success",
                    button: false,
                    timer: 3000,
                }); </script>';
                $_SESSION["dele_sure"] = false;
                }
            }
            $sure = true;
            if(isset($_POST["Reg"])){
                if (empty($_POST["id"])) {
                    $nameErr = "姓名是必填的!";
                    $sure = false;
                }
                if($sure){
                    $_SESSION["dele_id"] = $_POST["id"];
                    echo '        <script>
                    swal({
                        title: "確定刪除？",
                        text: "你將無法刪除恢復此資料！",
                        icon: "warning",
                        buttons: {
                            1: {
                                text: "取消",
                                value: "取消",
                            },
                            2: {
                                text: "確定刪除！",
                                value: "確定刪除",
                            },
                        },
        
                    }).then(function (value) {
                        switch (value) {
                            case"取消":
                                window.location.href = "delete.php";
                                break;
                            case"確定刪除":
                                window.location.href = "php/deleteFile.php";
                                break;
                                
        
                        }
                    })
                </script>  ';
                }
            }
			
            ?>

        <!-- Header -->
        <header id="header" class="alt">
            <div class="logo"><a href="../index/index.html">渡假村 <span>RESORT</span></a></div>
            <a href="#menu">Menu</a>
        </header>

        <!-- Nav -->
        <nav id="menu">
            <ul class="links">
                <li><a href="../../news/news.html">最新消息</a></li>
                <li><a href="../../room/room.php">訂房服務</a></li>
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
                <h2>刪除訂單</h2>

                <hr/>

                <form method="post" action="">

                    <div class="6u 12u$(small)"> <p>訂單編號：</p>
                        <input type="text" name="id" id="id" value="" placeholder="Number" required>
                    </div>


                    <div class="12u$">
                        <ul class="actions">
                            <div align="right"  style="margin-right: 5%">

                                <li><input type="submit" name="Reg" value="刪除"></li>

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
