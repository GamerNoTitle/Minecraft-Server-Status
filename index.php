<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/webpage-display-minecraft-server-status/
 */
$host = "meow.mcpe.tw"; //設定伺服器網域或 IP
$port = "19132"; //設定伺服器端口
/*
$host = $_GET["host"];
$port = $_GET["port"];
*/

require_once __DIR__.'/data.php';
?>
<html>
    <head>
        <title>網頁顯示 Minecraft 伺服器狀態示範</title>
    </head>
    <body>
        <h1>網頁顯示 Minecraft 伺服器狀態示範</h1>
        <h2>教學文章：<a href="https://blog.reh.tw/webpage-display-minecraft-server-status/" target="_blank">https://blog.reh.tw/webpage-display-minecraft-server-status/</a></h2>
        <hr>
        <p>狀態：<font color="#2a6c0f"><?php echo $status; ?></font></p>
        <p>IP 或網域：<font color="#2a6c0f"><?php echo $host; ?></font>
            <br>主機 IP：<font color="#2a6c0f"><?php echo $hostip; ?></font>
            <br>端口：<font color="#2a6c0f"><?php echo $port; ?></font></p>
        <p>MOTD：<font color="#2a6c0f"><?php echo $motd; ?></font>
            <br>清除顏色參數後的 MOTD：<font color="#2a6c0f"><?php echo $clean_motd; ?></font>
            <br>顏色參數轉為 HTML 的 MOTD：<font color="#2a6c0f"><?php echo $html_motd; ?></font></p>
        <p>平台：<font color="#2a6c0f"><?php echo $platform; ?></font>
            <br>遊戲類型：<font color="#2a6c0f"><?php echo $gametype; ?></font></p>
        <p>兼容遊戲版本：<font color="#2a6c0f"><?php echo $version; ?></font>
            <br>伺服器使用的軟體或核心：<font color="#2a6c0f"><?php echo $software; ?></font></p>
        <p>可容納最大玩家數：<font color="#2a6c0f"><?php echo $players_max; ?></font>
            <br>線上玩家數：<font color="#2a6c0f"><?php echo $players_online; ?></font></p>
        <p>使用的查詢協定：<font color="#2a6c0f"><?php echo $agreement; ?></font>
            <br>查詢耗時：<font color="#2a6c0f"><?php echo $processed; ?></font></p>
        <hr>
        <h3>目前在線玩家 <font color="#2a6c0f"><?php echo $players_online; ?></font>/<font color="#2a6c0f"><?php echo $players_max; ?></font></h3>
        <?php if (is_array($Players)) : ?>
        <?php foreach($Players as $Player) : ?>
        <font color="#2a6c0f"><?php echo htmlspecialchars($Player); ?></font><br>
        <?php endforeach; ?>
        <?php else: ?>
        無玩家在線。
        <?php endif; ?>
    </body>
</html>
