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
        <title>ROOM</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="assets/css/main.css" rel="stylesheet"/>
        <link href="../images/logo.jpg"  rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300|Noto+Sans+TC:100,300" rel="stylesheet">
        <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
    </head>

    <body>
        <?php
        if(isset($_SESSION["OrderDate"])){
            findRoomSpace($_SESSION["OrderDate"]);    
        }else{
            header("Location:../room/room.php");
        }
        $go = true;
        $errMas = "";
        if (isset($_POST["send"])) {
            $a = isset($_POST["a"]) || isset($_POST["b"]) || isset($_POST["c"]) || isset($_POST["d"]) || isset($_POST["e"]) || isset($_POST["f"]) || isset($_POST["g"]) || isset($_POST["h"]) || isset($_POST["i"]) || isset($_POST["j"]);
            if (!$a) {
                echo '<script>  swal({
                text: "請至少訂一間房!",
                icon: "error",
                button: false,
                timer: 3000,
            }); </script>';
                $go = false;
            }

            if (isset($_POST["a"])) {
                if ($_POST["a_house"] != "" && $_POST["a_bed"] != "") {
                    $_SESSION["a"] = $_POST["a"];
                    $_SESSION["a_house"] = $_POST["a_house"];
                    $_SESSION["a_bed"] = $_POST["a_bed"];
                    $go = true;
                } else {
                    $errMas .= "甜蜜雙人房  ";
                    $go = false;
                }
            }
            if (isset($_POST["b"])) {
                if ($_POST["b_house"] != "" && $_POST["b_bed"] != "") {
                    $_SESSION["b"] = $_POST["b"];
                    $_SESSION["b_house"] = $_POST["b_house"];
                    $_SESSION["b_bed"] = $_POST["b_bed"];
                    $go = true;
                } else {
                    $errMas .= "豪華雙人房  ";
                    $go = false;
                }
            }
            if (isset($_POST["c"])) {
                if ($_POST["c_house"] != "" && $_POST["c_bed"] != "") {
                    $_SESSION["c"] = $_POST["c"];
                    $_SESSION["c_house"] = $_POST["c_house"];
                    $_SESSION["c_bed"] = $_POST["c_bed"];
                    $go = true;
                } else {
                    $errMas .= "四人家庭房  ";
                    $go = false;
                }
            }
            if (isset($_POST["d"])) {
                if ($_POST["d_house"] != "" && $_POST["d_bed"] != "") {
                    $_SESSION["d"] = $_POST["d"];
                    $_SESSION["d_house"] = $_POST["d_house"];
                    $_SESSION["d_bed"] = $_POST["d_bed"];
                    $go = true;
                } else {
                    $errMas .= "娛樂四人房  ";
                    $go = false;
                }
            }
            if (isset($_POST["e"])) {
                if ($_POST["e_house"] != "" && $_POST["e_bed"] != "") {
                    $_SESSION["e"] = $_POST["e"];
                    $_SESSION["e_house"] = $_POST["e_house"];
                    $_SESSION["e_bed"] = $_POST["e_bed"];
                    $go = true;
                } else {
                    $errMas .= "海景欣賞房  ";
                    $go = false;
                }
            }
            if (isset($_POST["f"])) {
                if ($_POST["f_house"] != "" && $_POST["f_bed"] != "") {
                    $_SESSION["f"] = $_POST["f"];
                    $_SESSION["f_house"] = $_POST["f_house"];
                    $_SESSION["f_bed"] = $_POST["f_bed"];
                    $go = true;
                } else {
                    $errMas .= "經典大套房  ";
                    $go = false;
                }
            }
            if (isset($_POST["g"])) {
                if ($_POST["g_house"] != "" && $_POST["g_bed"] != "") {
                    $_SESSION["g"] = $_POST["g"];
                    $_SESSION["g_house"] = $_POST["g_house"];
                    $_SESSION["g_bed"] = $_POST["g_bed"];
                    $go = true;
                } else {
                    $errMas .= "溫馨親子套房  ";
                    $go = false;
                }
            }
            if (isset($_POST["h"])) {
                if ($_POST["h_house"] != "" && $_POST["h_bed"] != "") {
                    $_SESSION["h"] = $_POST["h"];
                    $_SESSION["h_house"] = $_POST["h_house"];
                    $_SESSION["h_bed"] = $_POST["h_bed"];
                    $go = true;
                } else {
                    $errMas .= "和洋式套房  ";
                    $go = false;
                }
            }
            if (isset($_POST["i"])) {
                if ($_POST["i_house"] != "" && $_POST["i_bed"] != "") {
                    $_SESSION["i"] = $_POST["i"];
                    $_SESSION["i_house"] = $_POST["i_house"];
                    $_SESSION["i_bed"] = $_POST["i_bed"];
                    $go = true;
                } else {
                    $errMas .= "主題套房  ";
                    $go = false;
                }
            }
            if (isset($_POST["j"])) {
                if ($_POST["j_house"] != "" && $_POST["j_bed"] != "") {
                    $_SESSION["j"] = $_POST["j"];
                    $_SESSION["j_house"] = $_POST["j_house"];
                    $_SESSION["j_bed"] = $_POST["j_bed"];
                    $go = true;
                } else {
                    $errMas .= "樓中樓套房  ";
                    $go = false;
                }
            }

            if ($go) {
                header('Location: ../php/roomData.php');
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

            <form method="post" action="">
                <div class="6u$ 12u$(medium)">

                    <!-- Buttons -->
                    <h3>訂購房間</h3><p>如果以下無您欲訂購之房間，有可能已經額滿，請參考以上之表格</p>
                    

                    <form method="post" action="">

                        <div class="row uniform">
                            
                            <?php if($_SESSION["R001"] >= 1){?>
                            
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="a" name="a"value="R001" <?php
                                if (isset($_POST["a"])) {
                                    echo 'checked';
                                }
                                
                                ?>  >
                                <label for="a">甜蜜雙人房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="a_house" id="a_house" >
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="a_bed" id="a_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            
                            if($_SESSION["R002"] >= 1){
                            ?>
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="b" name="b" value="R002" <?php
                                if (isset($_POST["b"])) {
                                    echo 'checked';
                                }
                                ?> >
                                <label for="b">豪華雙人房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="b_house" id="b_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="b_bed" id="b_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>        
                            <?php }
                            
                            if($_SESSION["R004"] >= 1){
                            ?>
                                
                            
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="c" name="c" value="R004"<?php
                                if (isset($_POST["c"])) {
                                    echo 'checked';
                                }
                                ?>  >
                                <label for="c">四人家庭房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="c_house" id="c_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="c_bed" id="c_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <?php }
                            
                            if($_SESSION["R005"] >= 1){
                            ?>
                            
                            
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="d" name="d" value="R005" <?php
                                if (isset($_POST["d"])) {
                                    echo 'checked';
                                }
                                ?> >
                                <label for="d">娛樂四人房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="d_house" id="d_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="d_bed" id="d_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            
                            <?php }
                            
                            if($_SESSION["R003"] >= 1){
                            ?>
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="e" name="e" value="R003" <?php
                                if (isset($_POST["e"])) {
                                    echo 'checked';
                                }
                                ?> >
                                <label for="e">海景欣賞房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="e_house" id="e_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="e_bed" id="e_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                             <?php }
                            
                            if($_SESSION["R006"] >= 1){
                            ?>
                            
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="f" name="f" value="R006" <?php
                                if (isset($_POST["f"])) {
                                    echo 'checked';
                                }
                                ?>  >
                                <label for="f">經典大套房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="f_house" id="f_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="f_bed" id="f_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            
                            <?php }
                            
                            if($_SESSION["R007"] >= 1){
                            ?>
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="g" name="g" value="R007" <?php
                                if (isset($_POST["g"])) {
                                    echo 'checked';
                                }
                                ?>  >
                                <label for="g">溫馨親子套房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="g_house" id="g_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="g_bed" id="g_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <?php }
                            
                            if($_SESSION["R008"] >= 1){
                            ?>
                            
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="h" name="h" value="R008" <?php
                                if (isset($_POST["h"])) {
                                    echo 'checked';
                                }
                                ?>  >
                                <label for="h">和洋式套房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="h_house" id="h_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="h_bed" id="h_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="1">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            
                            <?php }
                            
                            if($_SESSION["R009"] >= 1){
                            ?>
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="i" name="i" value="R009"<?php
                                if (isset($_POST["i"])) {
                                    echo 'checked';
                                }
                                ?>  >
                                <label for="i">主題套房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="i_house" id="i_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="i_bed" id="i_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <?php }
                            
                            if($_SESSION["R010"] >= 1){
                            ?>
                            
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="j" name="j" value="R010" <?php
                                if (isset($_POST["j"])) {
                                    echo 'checked';
                                }
                                ?>  >
                                <label for="j">樓中樓套房</label>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="j_house" id="j_house">
                                            <option value="">- 間數 -</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <br/>

                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="j_bed" id="j_bed">
                                            <option value="">- 加床 -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>	
                            <?php }
                            ?>
                            
                        </div>


                        <div class ="Err" style="color:red;">
                            <?php
                            if ($errMas != "") {
                                echo '<script>  swal({
                                text: "請輸入 ' . $errMas . '的間數/加床!",
                                icon: "error",
                                button: false,
                                timer: 3000,
                            }); </script>';
                                echo "<p>請輸入" . $errMas . "的間數/加床!</p>";
                            }
                            ?>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" name="send" value="確認訂購" class="button alt icon fa-check special"></li>
                        </ul>	

                    </form>

                    <br/>




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