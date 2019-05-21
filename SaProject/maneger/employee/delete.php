<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>刪除員工</title>
<!-- 連結思源中文及css -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
<link href="../images/user.jpg" rel="icon">
<link href="css/main.css" rel="stylesheet">
<link href="css/menu.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!------------------------->
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
            <li><a href="#" style="color:#000; ">主頁</a></li>            
            
            <li class="sub">         
                <a href="#" style="color:#000; ">客戶</a>          
                <ul style="z-index: 2; ">          
                    <li><a href="../customer/add.html">新增</a></li>
                    <li><a href="../customer/delete.html">刪除</a></li>
                    <li><a href="../customer/change.html">更新</a></li>   
                    <li><a href="../customer/search.html">查詢</a></li>                     
                </ul>
            </li>              
              
            <li class="sub">         
                <a href="#" style="color:#000; ">員工</a>          
                <ul style="z-index: 2">          
                    <li><a href="../employee/add.html">新增</a></li>
                    <li><a href="../employee/delete.html">刪除</a></li>
                    <li><a href="../employee/change.html">更新</a></li>   
                    <li><a href="../employee/search.html">查詢</a></li>                   
                </ul>
            </li>     
		
			 <li class="sub">         
                <a href="#" style="color:#000; ">訂單</a>          
                <ul style="z-index: 2">          
                    <li><a href="../order/add.html">新增</a></li>
                    <li><a href="../order/delete.html">刪除</a></li>
                    <li><a href="../order/change.html">更新</a></li>   
                    <li><a href="../order/search.html">查詢</a></li>                  
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
            <h2>刪除員工</h2>
			
				<hr/>
			
				<form method="post" action="../room2/room2.html">
															
										<div class="6u 12u$(small)"> <p>員工編號：</p>
											<input type="text" name="name" id="name" value="" placeholder="Number" required>
										</div>
					

					<div class="12u$">
						<ul class="actions">
							<div align="right"  style="margin-right: 5%">

								<li><input type="submit" name="next" value="刪除"></li>

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
