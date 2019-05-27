<!DOCTYPE HTML>
<!--
        Hielo by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
session_start();
session_unset();
?>
<html>
    <head>
        <title>ROOM</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="assets/css/main.css" rel="stylesheet"/>
        <link href="../images/logo.jpg"  rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300|Noto+Sans+TC:100,300" rel="stylesheet">
        <script src="assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">



    </head>

    <body>
        <?php
        $nameErr = $emailErr = $genderErr = $idErr = $birErr = $phoneErr = $DateErr = "";
        $name = $id = $bir = $num = $phone = $email = $OrderDate = "";
        $sure = true;

        if (isset($_POST["Reg"])) {
            $name = $_POST["name"];
            $id = $_POST["id"];
            $bir = $_POST["bir"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $OrderDate = $_POST["OrderDate"];
            if (empty($_POST["name"])) {

                $nameErr = "姓名是必填的!";
                $sure = false;
            }

            if (empty($_POST["id"])) {
                $idErr = "身分證是必填的!";
                $sure = false;
            } else {
                $idtest = test_input($_POST["id"]);
                if (!preg_match("/^[A-Z]{1}[0-9]{9}$/", $idtest)) {
                    $idErr = "身分證不符合格式!";
                    $sure = false;
                }
            }

            if (empty($_POST["OrderDate"])) {
                $birErr = "訂購日期是必填的!";
                $sure = false;
            } else {
//            $date = (strtotime($bir) - strtotime(date('Y-m-d'))) / (365*3+366);
//            $age = round((time() - strtotime($bir)) / (24 * 60 * 60) / 365.25, 0);
                $err = (strtotime($OrderDate) < strtotime(date('y-m-d')));
                if ($err) {
                    $DateErr = "訂購日期不能是過去!";
                    $sure = false;
                }
            }

            if (empty($_POST["bir"])) {
                $birErr = "生日是必填的!";
                $sure = false;
            } else {
//            $date = (strtotime($bir) - strtotime(date('Y-m-d'))) / (365*3+366);
                $age = round((time() - strtotime($bir)) / (24 * 60 * 60) / 365.25, 0);

                if ($age < 20) {
                    $birErr = "低於20歲無法訂房!";
                    $sure = false;
                }
            }

            if (empty($_POST["phone"])) {
                $phoneErr = "手機是必填的!";
                $sure = false;
            } else {
                $phonetest = test_input($_POST["phone"]);
                if (!preg_match("/^09[0-9]{8}$/", $phonetest)) {
                    $phoneErr = "手機號碼不符合格式!";
                    $sure = false;
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "E-mail是必填的!";
                $sure = false;
            }
            if ($sure) {
                $_SESSION["name"] = $_POST["name"];
                $_SESSION["id"] = $_POST["id"];
                $_SESSION["bir"] = $_POST["bir"];
                $_SESSION["phone"] = $_POST["phone"];
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["gender"] = $_POST["gender"];
                $_SESSION["OrderDate"] = $_POST["OrderDate"];
                header("Location:../room2/room2.php");
            } else {
                $mes = $idErr . $birErr . $phoneErr . $DateErr;
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
        <!--<script> swal("Good job!", "You clicked the button!", "success");</script>-->
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
                    <p>我們反覆琢磨細節裡的韻味，重視每一個需求背後的情感流動</p>
                    <h2>Book a Room</h2>
                </header>
            </div>
        </section>

        <!-- Main -->
        <div id="main" class="container">

            <!-- Form -->
            <div align="left"><span>我要訂房</span><span> I want to book a room</span></div>
            <hr/>

            <form method="post" action="">
                <div class="row uniform">

                    <div class="6u 12u$(xsmall)"> <p>姓名：</p>
                        <input type="text" name="name" id="name" value="<?php echo $name; ?>" placeholder="Name" required/>
                    </div>


                    <div class="6u$ 12u$(xsmall)"> <p>身分證字號：</p>
                        <input type="text" name="id" id="id" value="<?php echo $id; ?>" placeholder="ID" required />
                    </div>

                    <div class="6u$ 12u$(xsmall)"> <p>生日：</p>
                        <input type="date" name="bir" id="bir" value="<?php echo $bir; ?>" placeholder="yyyy-mm-dd" required />
                    </div>


                    <p>性別：</p>
                    <div class="4u 12u$(small)">
                        <input type="radio" id="man" name="gender" value="男" checked>
                        <label for="man">男</label>
                    </div>
                    <div class="4u 12u$(small)">
                        <input type="radio" id="woman" name="gender" value="女">
                        <label for="woman">女</label>
                    </div>

                    <hr/>

                    <div class="6u 12u$(xsmall)" ><p>手機：</p>
                        <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" placeholder="Phone" required/>
                    </div>

                    <div class="6u$ 12u$(xsmall)" ><p>E-mail：</p>
                        <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="email" required/>
                    </div>
                    <div class="6u$ 12u$(xsmall)"> <p>欲訂購日期：</p>
                        <input type="date" name="OrderDate" id="OrderDate" value="<?php echo $OrderDate; ?>" placeholder="yyyy-mm-dd" required />
                    </div>

                    <div class="6u$ 12u$(small)">
                        <input type="checkbox" id="human" name="human" checked>
                        <label for="human">我不是機器人 I am a human and not a robot.</label>
                    </div>

                    <div class ="Err" style="color:red;">
                        <?php
                        echo "<p>" . $nameErr . "</p>";
                        echo "<p>" . $idErr . "</p>";
                        echo "<p>" . $birErr . "</p>";
                        echo "<p>" . $phoneErr . "</p>";
                        echo "<p>" . $emailErr . "</p>";
                        echo "<p>" . $DateErr . "</p>";
                        ?>
                    </div>

                    <div class="12u$">
                        <ul class="actions">
                            <div align="right">

                                <li><input type="submit" name="Reg" value="NEXT"></li>

                            </div>
                        </ul>
                    </div>
                </div>

            </form>		

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