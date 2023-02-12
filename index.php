<?php
// 原作者为MCNewsTools，由GamerNoTitle二次修改，模板套用的HTML5UP的HTML模板，请在使用该程序的时候不要删除版权信息，Thanks♪(･ω･)ﾉ！
$host = "example.com"; //设置服务器域名或 IP
$port = "25565"; //设置服务器端口，可以直接用服务器的链接端口，也可以使用query端口（UDP协议）
$name = 'EMUnion'; // 服务器名字，会显示在标签页的标题和网站打头的大标题处
$iconlink = 'https://cdn.bilicdn.tk/gh/Vikutorika/newassets@master/img/Miscellaneous/EMUnion.jpg'; // 网站图标链接，可以使图片格式（.png/.jpg/etc.）或者是ico图标，用绝对路径或相对路径均可
$description = 'Server Status by <a href="https://bili33.top">GamerNoTitle</a> | Tamplate by <a href="https://html5up.net">HTML5UP</a><br>Open Source Project <a href="https://github.com/GamerNoTitle/Minecraft-Server-Status">Minecraft-Server-Status</a> is now avaliable on <a href="https://github.com/GamerNoTitle/Minecraft-Server-Status">Github</a>'; // 描述，会显示在大标题的下方，用html语法写就可以了，换行请用<br>
$imagelink = 'https://cdn.bilicdn.tk/gh/Vikutorika/newassets@master/img/Miscellaneous/EMUnion.jpg'; // 图片链接，会显示在服务器信息右边的圈圈里
$display_connect_info = false; // 是否显示服务器连接信息
/*
$host = $_GET["host"];
$port = $_GET["port"];
以下html的内容请自己酌情更改，请不要删除版权信息
*/

use MinecraftServerStatus\MinecraftServerStatus;

require './vendor/autoload.php';

$response = MinecraftServerStatus::query($host, $port);
error_reporting(0);
?>
<html>
	<head>
		<title><?php echo $name; ?></title>
		<link rel="shortcut icon" href=<?php echo $iconlink; ?>>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1><?php echo $name; ?></h1>
						<p><?php echo $description; ?></p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Minecraft服务器状态</h2>
										</header>
										<hr>
										<p>状态：<font color="#2a6c0f"><?php if ($response['ping']){echo '在线';} else {echo '离线';} ?></font></p>
										<p>IP 或域名：<font color="#2a6c0f"><?php if ($display_connect_info){echo $host;} else {echo '已隐藏';} ?></font>
											<br>主机 IP：<font color="#2a6c0f"><?php if ($display_connect_info) {echo $hostip;} else {echo '已隐藏';} ?></font>
											<br>端口：<font color="#2a6c0f"><?php if ($display_connect_info) {echo $port;} else {echo '已隐藏';} ?></font></p>
											<br>MOTD：<font color="#2a6c0f"><?php echo $response['description']; ?></font>
										<p>平台：<font color="#2a6c0f"><?php echo $response['version']; ?></font>
										<p>兼容游戏版本：<font color="#2a6c0f"><?php echo $response['version']; ?></font>
										<p>可容纳最大玩家数：<font color="#2a6c0f"><?php echo $response['players_max']; ?></font>
											<br>在线玩家数：<font color="#2a6c0f"><?php echo $response['players']; ?></font></p>
											<br>查询用时：<font color="#2a6c0f"><?php echo $response['ping']; ?> ms</font></p>
										<!-- <hr> -->
										<hr>
										<ul class="actions">
											<li><a href="https://bili33.top" class="button">About GamerNoTitle</a></li>
											<li><a href="https://github.com/GamerNoTitle/Minecraft-Server-Status" class="button">View on Github</a></li>
											<li><a href="https://html5up.net" class="button">HTML5UP</a></li>
										</ul>
									</div>
									<span class="image"><img src=<?php echo $imagelink; ?> alt="" /></span>
								</div>
							</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
