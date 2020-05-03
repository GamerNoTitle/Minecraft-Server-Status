<?php
// 原作者为MCNewsTools，由GamerNoTitle二次修改，模板套用的HTML5UP的HTML模板，请在使用该程序的时候不要删除版权信息，Thanks♪(･ω･)ﾉ！
$host = "mc.bili33.top"; //设置服务器域名或 IP
$port = "43978"; //设置服务器端口，可以直接用服务器的链接端口，也可以使用query端口（UDP协议）
/*
$host = $_GET["host"];
$port = $_GET["port"];
以下html的内容请自己酌情更改，请不要删除版权信息
*/

require_once __DIR__.'/data.php';
?>
<html>
	<head>
		<title>MTS Multiple Technology Server</title>
		<link rel="shortcut icon" href="https://cdn.jsdelivr.net/gh/GamerNoTitle/Picture-repo@1.0/AboutMe/logo-mini.png">
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
						<h1>MTS Multiple Technology Server</h1>
						<p>Minecraft Techonology Server by <a href="https://bili33.top">GamerNoTitle</a> & UBIthepotato<br />
						Server Status by <a href="https://bili33.top">GamerNoTitle</a> | Tamplate by <a href="https://html5up.net">HTML5UP</a><br />
						Open Source Project <a href="https://github.com/GamerNoTitle/Minecraft-Server-Status">Minecraft-Server-Status</a> is now avaliable on <a href="https://github.com/GamerNoTitle/Minecraft-Server-Status">Github</a></p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Minecraft服务器状态</h2>
											<h3>服务器地址：<font color="#2a6c0f">mc.bili33.top:28574</font></h3>
											<h4><font color='#fb7299'>服务器已开启白名单！</font></h4>
										</header>
										<hr>
										<p>状态：<font color="#2a6c0f"><?php echo $status; ?></font></p>
										<p>IP 或域名：<font color="#2a6c0f"><?php echo $host; ?></font>
											<br>主机 IP：<font color="#2a6c0f"><?php echo $hostip; ?></font>
											<br>端口：<font color="#2a6c0f"><?php echo $port; ?></font></p>
										<p>MOTD：<font color="#2a6c0f"><?php echo $motd; ?></font>
											<br>清除颜色参数后的 MOTD：<font color="#2a6c0f"><?php echo $clean_motd; ?></font>
											<br>颜色参数转为 HTML 的 MOTD：<font color="#2a6c0f"><?php echo $html_motd; ?></font></p>
										<p>平台：<font color="#2a6c0f"><?php echo $platform; ?></font>
											<br>游戏类型：<font color="#2a6c0f"><?php echo $gametype; ?></font></p>
										<p>兼容游戏版本：<font color="#2a6c0f"><?php echo $version; ?></font>
											<br>服务器使用的软件或核心：<font color="#2a6c0f"><?php echo $software; ?></font></p>
										<p>可容纳最大玩家数：<font color="#2a6c0f"><?php echo $players_max; ?></font>
											<br>在线玩家数：<font color="#2a6c0f"><?php echo $players_online; ?></font></p>
										<p>使用的查询方式：<font color="#2a6c0f"><?php echo $agreement; ?></font>
											<br>查询用时：<font color="#2a6c0f"><?php echo $processed; ?></font></p>
										<!-- <hr> -->
										<h3>目前在线玩家 <font color="#2a6c0f"><?php echo $players_online; ?></font>/<font color="#2a6c0f"><?php echo $players_max; ?></font></h3>
										<?php if (is_array($Players)) : ?>
										<?php foreach($Players as $Player) : ?>
											<?php if ($platform == "MINECRAFT") : ?>
												<?php echo '<img src="https://cravatar.eu/helmhead/'.htmlspecialchars($Player).'/15.png"> '.htmlspecialchars($Player); ?><br>
											<?php else: ?>
												<?php echo '<img src="https://cravatar.eu/helmhead/steve/15.png"> '.htmlspecialchars($Player); ?><br>
											<?php endif; ?>
										<?php endforeach; ?>
										<?php else: ?>
											无玩家在线。
										<?php endif; ?>										<hr>
										<ul class="actions">
											<li><a href="https://bili33.top" class="button">About GamerNoTitle</a></li>
											<li><a href="https://github.com/GamerNoTitle/Minecraft-Server-Status" class="button">View on Github</a></li>
											<li><a href="https://html5up.net" class="button">HTML5UP</a></li>
										</ul>
									</div>
									<span class="image"><img src="https://cdn.jsdelivr.net/gh/GamerNoTitle/Picture-repo@1.0/AboutMe/logo-mini.png" alt="" /></span>
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