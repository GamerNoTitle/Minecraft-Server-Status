<?php
/*
 * 张文相 Zhang Wenxiang - 个人 Blog
 * https://blog.reh.tw/
 *
 * 范例教学
 * https://blog.reh.tw/webpage-display-minecraft-server-status/
 */
define('MQ_SERVER_ADDR', $host);
define('MQ_SERVER_PORT', $port);
define('MQ_TIMEOUT', 1);

require_once __DIR__.'/data/query.php';
require_once __DIR__.'/data/ping.php';

require_once __DIR__.'/closeTags.php';

if (($Info = $Query->GetInfo()) !== false) { //判断 Query 是否查询的到
    //转换服务器 MOTD 颜色参数为 HTML
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

    $cleanHostName = str_replace(array("§k", "§l", "§m", "§n", "§o", "§r", "§0", "§1", "§2", "§3", "§4", "§5", "§6", "§7", "§8", "§9", "§a", "§b", "§c", "§d", "§e", "§f"), "", $Info['HostName']); //清除服务器 MOTD 颜色参数

    $status = "在线"; //服务器状态
    $platform = $Info['GameName']; //服务器平台 (MINECRAFT or MINECRAFTPE)
    $gametype = $Info['GameType']; //游戏类型

    $motd = $Info['HostName']; //服务器 MOTD
    $clean_motd = $cleanHostName; //清除颜色参数后的服务器 MOTD
    $html_motd = closeTags($hostNameHtml); //颜色参数转为 HTML 的服务器 MOTD

    $host = $host; //服务器 IP 或域名
    $hostip = $Info['HostIp']; //服务器 IP
    $port = $Info['HostPort']; //服务器端口

    $players_max = $Info['MaxPlayers']; //服务器可容纳最大玩家数
    $players_online = $Info['Players']; //服务器在线玩家数

    $version = $Info['Version']; //服务器兼容游戏版本
    $software = $Info['Software']; //服务器使用的软件或核心

    $agreement = "Query"; //使用的查询协议 (这边是用来显示查询方式的)
    $processed = $Timer; //查询耗时

    $Players = $Query->GetPlayers(); //取得在线玩家列表
    $Plugins = $info['Plugins']; //取得插件列表
} else if ($InfoPing !== false) { //判断 Ping 是否查询的到
    //转换服务器 MOTD 颜色参数为 HTML
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

    $cleanHostName = str_replace(array("§k", "§l", "§m", "§n", "§o", "§r", "§0", "§1", "§2", "§3", "§4", "§5", "§6", "§7", "§8", "§9", "§a", "§b", "§c", "§d", "§e", "§f"), "", $InfoPing['description']); //清除服务器 MOTD 颜色参数

    $status = "在线"; //服务器状态
    $platform = "使用 Ping 查询无法取得数据"; //服务器平台 (MINECRAFT or MINECRAFTPE)
    $gametype = "使用 Ping 查询无法取得数据"; //游戏类型

    $motd = $InfoPing['description']; //服务器 MOTD
    $clean_motd = $cleanHostName; //清除颜色参数后的服务器 MOTD
    $html_motd = closeTags($hostNameHtml); //颜色参数转为 HTML 的服务器 MOTD

    $host = $host; //服务器 IP 或域名
    $hostip = "使用 Ping 查询无法取得数据"; //服务器主机 IP
    $port = $port; //服务器端口

    $players_max = $InfoPing['players']['max']; //服务器可容纳最大玩家数
    $players_online = $InfoPing['players']['online']; //服务器在线玩家数

    $version = explode(" ", $InfoPing['version']['name'], 2);
    $version = $version[1]; //服务器兼容游戏版本

    $software = "使用 Ping 查询无法取得数据"; //服务器使用的软件或核心

    $agreement = "Ping"; //使用的查询协议 (这边是用来显示查询方式的)
    $processed = $Timer; //查询耗时
} else { //否则为脱机
    $status = "离线"; //服务器状态
    $host = $host; //服务器 IP 或域名
    $port = $port; //服务器端口
}
?>


