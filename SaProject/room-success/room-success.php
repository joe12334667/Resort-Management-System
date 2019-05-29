<!DOCTYPE HTML>
<!--
        Hielo by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
session_start();
include '../php/FindOrder.php';
?>
<html>
    <head>
        <title>ROOM SUCCESS</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="assets/css/main.css" rel="stylesheet"/>
        <link href="../images/logo.jpg"  rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300|Noto+Sans+TC:100,300" rel="stylesheet">
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

            <div align="center"><span>訂房成功！</span><span> The reservation was Successful.</span></div>

            

            <div class="record">

                <h3>您的訂單記錄</h3>
                <?php
                FindOrder($_SESSION["id"] , $_SESSION["name"]);
                ?>



            </div>

            <hr/>

            <div class="row">

                <h3>注意事項</h3>
                <ul>
                    <li>若需要取消務必在一個禮拜前告知</li>
                    <li>入住時間：下午 3 點後 / 退房時間：上午 11 點前</li>
                    <li>請勿攜帶寵物入宿(導盲犬除外)，飯店內全面禁菸。</li>
                    <li>早餐服務-6:30至10:00</li>
                    <li>客房服務-7:00-10:00 / 11:30-14:00 / 17:30-21:00</li>
                </ul>


            </div>

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