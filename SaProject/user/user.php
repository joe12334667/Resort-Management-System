<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>使用者介面</title>
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
					<li><a href="../news/news.html">最新消息</a></li>
					<li><a href="../room/room.php">訂房服務</a></li>
					<li><a href="../search/search.php">查詢訂房</a></li>
					<li><a href="../about/about.html">關於我們</a></li>
					<li><a href="../information/information.php">聯絡資訊</a></li>

					<li style="margin-top: 200%"><a href="../maneger/maneger.php">管理者介面</a></li>
				</ul>
			</nav>
	
	<section id="One" class="wrapper style3">
				<div class="inner" style="z-index: 1">
					<header class="align-center">
						<h2>User Page</h2>
					</header>
				</div>
			</section>
	
    <!--**************************-->
    <div class="container">    

        <!--~~~~~~~~~~~~~~~~~-->        
        <ul id="navigation" style="z-index: 2; background:#F1EEC2;">        
            <li><a href="/" style="color:#000; margin-left: 70px;">主頁</a></li>            
            
            <li class="sub">         
                <a href="#" style="color:#000; margin-left: 30px;">客戶</a>          
                <ul style="z-index: 2; ">          
                    <li><a href="/customer/add/form">新增</a></li>
                    <li><a href="/customer/remove/form">刪除</a></li>
                    <li><a href="/customer/update/getOldData">更新</a></li>   
                    <li><a href="/customer/query/form">查詢</a></li>     
                    <li><a href="/customer/list">清單</a></li>   
                    <li><a href="/customer/page/1">分頁</a></li>                    
                </ul>
            </li>
            
            <li class="sub">         
                <a href="#" style="color:#000; margin-left: 30px;">房型</a>          
                <ul style="z-index: 2">           
                    <li><a href="/product/add/form">新增</a></li>
                    <li><a href="/product/remove/form">刪除</a></li>
                    <li><a href="/product/update/getOldData">更新</a></li>   
                    <li><a href="/product/query/form">查詢</a></li>  
                    <li><a href="/product/list">清單</a></li>  
                    <li><a href="/product/page/1">分頁</a></li>                    
                </ul>
            </li>   
            
            <li class="sub">         
                <a href="#" style="color:#000; margin-left: 30px;">供應商</a>          
                <ul style="z-index: 2">          
                    <li><a href="/supplier/add/form">新增</a></li>
                    <li><a href="/supplier/remove/form">刪除</a></li>
                    <li><a href="/supplier/update/getOldData">更新</a></li>   
                    <li><a href="/supplier/query/form">查詢</a></li>
                    <li><a href="/supplier/list">清單</a></li> 
                    <li><a href="/supplier/page/1">分頁</a></li>                    
                </ul>
            </li>                     
         
         
            <li class="sub">         
                <a href="#" style="color:#000; margin-left: 30px;">員工</a>          
                <ul style="z-index: 2">          
                    <li><a href="/employee/add/form">新增</a></li>
                    <li><a href="/employee/remove/form">刪除</a></li>
                    <li><a href="/employee/update/getOldData">更新</a></li>   
                    <li><a href="/employee/query/form">查詢</a></li> 
                    <li><a href="/employee/list">清單</a></li>  
                    <li><a href="/employee/page/1">分頁</a></li>                    
                </ul>
            </li>  
            
            <li class="sub" >         
                <a href="#" style="color:#000; margin-left: 30px;">日常作業</a>          
                <ul style="z-index: 2">          
                    <li><a href="/import/form">進貨</a></li>
                    <li><a href="/export/form">銷貨</a></li>
                    <li><a href="/inventory/form">盤點</a></li>          
                </ul>
            </li>             
                    
            <li class="sub">         
                <a href="#" style="color:#000; margin-left: 50px;">報表</a>          
                <ul style="z-index: 2">          
                    <li><a href="/reports/import">進貨報表</a></li>
                    <li><a href="/reports/export">銷貨報表</a></li>
                    <li><a href="/reports/inventory">庫存報表</a></li>          
                </ul>
            </li>          
        
        </ul>
        
        <!--~~~~~~~~~~~~~~~~~--> 
        <div class="content">
            <h2>使用者登入</h2>
			
				<form method="post" action="../room2/room2.html">

					<div class="6u 12u$(small)" style="margin-left: 20%"> 
						<p>帳號：</p>
						<input type="text" name="id" id="id" value="" placeholder="" required>
					</div>
						<br/>
					<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
						<p>密碼：</p>											
						<input type="password" name="password" id="password" value="" placeholder="" required>
					</div>  

					<div class="12u$">
						<ul class="actions">
							<div align="right"  style="margin-right: 5%">

								<li><input type="submit" name="next" value="ENTER"></li>

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

		
		
        <!--~~~~~~~~~~~~~~~~~--> 
        <div class="footer">
            &copy; NTUB GROUP 10     
        </div>  
    </div>
    <!--**************************-->    
</body>
   
</html>
