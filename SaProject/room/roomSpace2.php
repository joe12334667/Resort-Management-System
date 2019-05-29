<!DOCTYPE HTML>
<!--
        Hielo by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
include '../php/findRoomSpace.php';
?>
<html>
    <head>
        <title>roomSpace2</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="assets/css/main.css" rel="stylesheet"/>
        <link href="../images/logo.jpg"  rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300|Noto+Sans+TC:100,300" rel="stylesheet">
        <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
    </head>

    <body>  
        <?php
        if(isset($_SESSION["wantDate"])){
            findRoomSpace($_SESSION["wantDate"]);    
        }else{
            header("Location:roomSpace.php");
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

            <div align="left"><span>請選擇您想入住的房型</span><span> Choose the type of room you want to stay in</span></div>


            <!-- Table -->
            <hr/>
            <h2>欲入住日期: <?php echo $_SESSION["wantDate"]; ?></h2>
            <h3>特別</h3>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>可訂購房間</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>甜蜜雙人房</td>
                            <td>$2,000</td>
                            <td><?php echo $_SESSION["R001"]; ?></td>

                        </tr>
                        <tr>
                            <td>豪華雙人房</td>
                            <td>$3,000</td>
                            <td><?php echo $_SESSION["R002"]; ?></td>
                        </tr>  
                        <tr>
                            <td>海景欣賞房</td>
                            <td>$10,000</td>
                            <td><?php echo $_SESSION["R003"]; ?></td>
                        </tr> 
                        <tr>
                            <td>四人家庭房</td>
                            <td>$5,000</td>
                            <td><?php echo $_SESSION["R004"]; ?></td>
                        </tr> 
                        <tr>
                            <td>娛樂四人房</td>
                            <td>$6,000</td>
                            <td><?php echo $_SESSION["R005"]; ?></td>
                        </tr> 


                    </tbody>
                </table>
            </div>

            <h3>套房</h3>
            <div class="table-wrapper">
                <table class="alt">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>可訂購房間</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>經典大套房</td>
                            <td>$5,000</td>
                            <td><?php echo $_SESSION["R006"]; ?></td>
                        </tr>
                        <tr>
                            <td>和洋式套房</td>
                            <td>$6,000</td>
                            <td><?php echo $_SESSION["R007"]; ?></td>
                        </tr>
                        <tr>
                            <td>溫馨親子套房</td>
                            <td>$5,500</td>
                            <td><?php echo $_SESSION["R008"]; ?></td>
                        </tr>

                        <tr>
                            <td>主題套房</td>
                            <td>$6,500</td>
                            <td><?php echo $_SESSION["R009"]; ?></td>
                        </tr>
                        <tr>
                            <td>樓中樓套房</td>
                            <td>$8,000</td>
                            <td><?php echo $_SESSION["R010"]; ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="6u$ 12u$(medium)">

                <!-- Buttons -->



                <br/>

                
                    <ul class="actions">
                        <li><a href="../room/room.php" class="button special">我想訂房</a></li>
                        <li><a href="roomSpace.php" class="button special">查詢空房</a></li>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </body>
</html>