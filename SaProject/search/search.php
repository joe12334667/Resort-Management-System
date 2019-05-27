<!DOCTYPE HTML>
<!--
        Hielo by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
include '../php/FindOrder.php';
?>
<html>
    <head>
        <title>SEARCH</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="assets/css/main.css" rel="stylesheet"/>
        <link href="../images/logo.jpg"  rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300|Noto+Sans+TC:100,300" rel="stylesheet">
        <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
    </head>
    <body>

        <!-- Header -->
        <header id="header" class="alt">
            <div class="logo"><a href="../index/index.html">渡假村 <span>RESORT</span></a></div>
            <a href="#menu">Menu</a>
        </header>

        <!-- Nav -->
        <nav id="menu">
            <ul class="links">
                <li><a href="../news/news.html">最新消息</a></li>
                <li><a href="../room/room.php">訂房服務</a></li>
                <li><a href="../room/roomSpace.php">查詢空房</a></li>
                <li><a href="../search/search.php">查詢訂房</a></li>
                <li><a href="../about/about.html">關於我們</a></li>
                <li><a href="../information/information.php">聯絡資訊</a></li>

                <li style="margin-top: 200%"><a href="../maneger/maneger.php">管理者介面</a></li>
            </ul>
        </nav>

        <!-- One -->
        <section id="One" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                    <p>想要入住更好的飯店，阿蛇就是您的選擇。</p>
                    <h2>Book a Room</h2>
                </header>
            </div>
        </section>

        <!-- Main -->
        <div id="main" class="container">

            <!-- Elements -->

            <div align="center"><span>查詢訂房紀錄</span><span> Search your booking record.</span></div>

            <hr/>

            <form method="post" action="">
                <div class="row uniform">

                    <div class="6u 12u$(xsmall)"> <p>姓名：</p>
                        <input type="text" name="name" id="name" value="" placeholder="Name" >
                    </div>


                    <div class="6u$ 12u$(xsmall)"> <p>身分證字號：</p>
                        <input type="text" name="id" id="id" value="" placeholder="ID" >
                    </div>								

                    <!-- Break -->

                    <div class="12u$">
                        <ul class="actions">
                            <div align="right">

                                <li><input type="submit" name="next" value="NEXT"></li>

                            </div>
                        </ul>
                    </div>
                </div>

            </form>		
            <?php
            if (isset($_POST["next"])) {
                if ($_POST["name"] != "" && $_POST["id"] != "") {
                    FindOrder($_POST["id"],$_POST["name"]);
                } else {
                    echo '<div class ="Err" style="color:red;">';
                    echo '兩個搜尋選項皆需要輸入!</div>';
                }
            }
            echo '<hr/>';
            ?>






        </div>
        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
            </div>
            <div class="copyright">
                &copy; NTUB GROUP 10
            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>



    </body>
</html>