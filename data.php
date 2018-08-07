<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/webpage-display-minecraft-server-status/
 */
define('MQ_SERVER_ADDR', $host);
define('MQ_SERVER_PORT', $port);
define('MQ_TIMEOUT', 1);

require_once __DIR__.'/data/query.php';
require_once __DIR__.'/data/ping.php';

require_once __DIR__.'/closeTags.php';

if (($Info = $Query->GetInfo()) !== false) { //判斷 Query 是否查詢的到
    //轉換伺服器 MOTD 顏色參數為 HTML
    $hostNameHtml = str_replace("§k", "", $Info['HostName']);
    $hostNameHtml = str_replace("§l", "", $hostNameHtml);
    $hostNameHtml = str_replace("§m", "", $hostNameHtml);
    $hostNameHtml = str_replace("§n", "", $hostNameHtml);
    $hostNameHtml = str_replace("§o", "", $hostNameHtml);
    $hostNameHtml = str_replace("§r", '<font color="#">', $hostNameHtml);
    $hostNameHtml = str_replace("§0", '<font color="#000000">', $hostNameHtml);
    $hostNameHtml = str_replace("§1", '<font color="#0000AA">', $hostNameHtml);
    $hostNameHtml = str_replace("§2", '<font color="#00AA00">', $hostNameHtml);
    $hostNameHtml = str_replace("§3", '<font color="#00AAAA">', $hostNameHtml);
    $hostNameHtml = str_replace("§4", '<font color="#AA0000">', $hostNameHtml);
    $hostNameHtml = str_replace("§5", '<font color="#AA00AA">', $hostNameHtml);
    $hostNameHtml = str_replace("§6", '<font color="#FFAA00">', $hostNameHtml);
    $hostNameHtml = str_replace("§7", '<font color="#AAAAAA">', $hostNameHtml);
    $hostNameHtml = str_replace("§8", '<font color="#555555">', $hostNameHtml);
    $hostNameHtml = str_replace("§9", '<font color="#5555FF">', $hostNameHtml);
    $hostNameHtml = str_replace("§a", '<font color="#55FF55">', $hostNameHtml);
    $hostNameHtml = str_replace("§b", '<font color="#55FFFF">', $hostNameHtml);
    $hostNameHtml = str_replace("§c", '<font color="#FF5555">', $hostNameHtml);
    $hostNameHtml = str_replace("§d", '<font color="#FF55FF">', $hostNameHtml);
    $hostNameHtml = str_replace("§e", '<font color="#FFFF55">', $hostNameHtml);
    $hostNameHtml = str_replace("§f", '<font color="#FFFFFF">', $hostNameHtml);

    $cleanHostName = str_replace(array("§k", "§l", "§m", "§n", "§o", "§r", "§0", "§1", "§2", "§3", "§4", "§5", "§6", "§7", "§8", "§9", "§a", "§b", "§c", "§d", "§e", "§f"), "", $Info['HostName']); //清除伺服器 MOTD 顏色參數

    $status = "在線"; //伺服器狀態
    $platform = $Info['GameName']; //伺服器平台 (MINECRAFT or MINECRAFTPE)
    $gametype = $Info['GameType']; //遊戲類型

    $motd = $Info['HostName']; //伺服器 MOTD
    $clean_motd = $cleanHostName; //清除顏色參數後的伺服器 MOTD
    $html_motd = closeTags($hostNameHtml); //顏色參數轉為 HTML 的伺服器 MOTD

    $host = $host; //伺服器 IP 或網域
    $hostip = $Info['HostIp']; //伺服器 IP
    $port = $Info['HostPort']; //伺服器端口

    $players_max = $Info['MaxPlayers']; //伺服器可容納最大玩家數
    $players_online = $Info['Players']; //伺服器線上玩家數

    $version = $Info['Version']; //伺服器兼容遊戲版本
    $software = $Info['Software']; //伺服器使用的軟體或核心

    $agreement = "Query"; //使用的查詢協定 (這邊是用來顯示查詢方式的)
    $processed = $Timer; //查詢耗時

    $Players = $Query->GetPlayers(); //取得在線玩家列表
    $Plugins = $info['Plugins']; //取得插件列表
} else if ($InfoPing !== false) { //判斷 Ping 是否查詢的到
    //轉換伺服器 MOTD 顏色參數為 HTML
    $hostNameHtml = str_replace("§k", "", $InfoPing['description']);
    $hostNameHtml = str_replace("§l", "", $hostNameHtml);
    $hostNameHtml = str_replace("§m", "", $hostNameHtml);
    $hostNameHtml = str_replace("§n", "", $hostNameHtml);
    $hostNameHtml = str_replace("§o", "", $hostNameHtml);
    $hostNameHtml = str_replace("§r", '<font color="#">', $hostNameHtml);
    $hostNameHtml = str_replace("§0", '<font color="#000000">', $hostNameHtml);
    $hostNameHtml = str_replace("§1", '<font color="#0000AA">', $hostNameHtml);
    $hostNameHtml = str_replace("§2", '<font color="#00AA00">', $hostNameHtml);
    $hostNameHtml = str_replace("§3", '<font color="#00AAAA">', $hostNameHtml);
    $hostNameHtml = str_replace("§4", '<font color="#AA0000">', $hostNameHtml);
    $hostNameHtml = str_replace("§5", '<font color="#AA00AA">', $hostNameHtml);
    $hostNameHtml = str_replace("§6", '<font color="#FFAA00">', $hostNameHtml);
    $hostNameHtml = str_replace("§7", '<font color="#AAAAAA">', $hostNameHtml);
    $hostNameHtml = str_replace("§8", '<font color="#555555">', $hostNameHtml);
    $hostNameHtml = str_replace("§9", '<font color="#5555FF">', $hostNameHtml);
    $hostNameHtml = str_replace("§a", '<font color="#55FF55">', $hostNameHtml);
    $hostNameHtml = str_replace("§b", '<font color="#55FFFF">', $hostNameHtml);
    $hostNameHtml = str_replace("§c", '<font color="#FF5555">', $hostNameHtml);
    $hostNameHtml = str_replace("§d", '<font color="#FF55FF">', $hostNameHtml);
    $hostNameHtml = str_replace("§e", '<font color="#FFFF55">', $hostNameHtml);
    $hostNameHtml = str_replace("§f", '<font color="#FFFFFF">', $hostNameHtml);

    $cleanHostName = str_replace(array("§k", "§l", "§m", "§n", "§o", "§r", "§0", "§1", "§2", "§3", "§4", "§5", "§6", "§7", "§8", "§9", "§a", "§b", "§c", "§d", "§e", "§f"), "", $InfoPing['description']); //清除伺服器 MOTD 顏色參數

    $status = "在線"; //伺服器狀態
    $platform = "使用 Ping 查詢無法取得資料"; //伺服器平台 (MINECRAFT or MINECRAFTPE)
    $gametype = "使用 Ping 查詢無法取得資料"; //遊戲類型

    $motd = $InfoPing['description']; //伺服器 MOTD
    $clean_motd = $cleanHostName; //清除顏色參數後的伺服器 MOTD
    $html_motd = closeTags($hostNameHtml); //顏色參數轉為 HTML 的伺服器 MOTD

    $host = $host; //伺服器 IP 或網域
    $hostip = "使用 Ping 查詢無法取得資料"; //伺服器主機 IP
    $port = $port; //伺服器端口

    $players_max = $InfoPing['players']['max']; //伺服器可容納最大玩家數
    $players_online = $InfoPing['players']['online']; //伺服器線上玩家數

    $version = explode(" ", $InfoPing['version']['name'], 2);
    $version = $version[1]; //伺服器兼容遊戲版本

    $software = "使用 Ping 查詢無法取得資料"; //伺服器使用的軟體或核心

    $agreement = "Ping"; //使用的查詢協定 (這邊是用來顯示查詢方式的)
    $processed = $Timer; //查詢耗時
} else { //否則為離線
    $status = "離線"; //伺服器狀態
    $host = $host; //伺服器 IP 或網域
    $port = $port; //伺服器端口
}
?>
