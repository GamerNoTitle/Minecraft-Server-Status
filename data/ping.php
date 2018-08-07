<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/webpage-display-minecraft-server-status/
 */
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

require_once dirname(dirname(__FILE__)).'/src/MinecraftPing.php';
require_once dirname(dirname(__FILE__)).'/src/MinecraftPingException.php';

$Timer = MicroTime(true);

$InfoPing = false;
$QueryPing = null;

try {
    $QueryPing = new MinecraftPing(MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT);

    $InfoPing = $QueryPing->Query();

    if ($InfoPing === false) {
        $QueryPing->Close();
        $QueryPing->Connect();

        $InfoPing = $QueryPing->QueryOldPre17();
    }
} catch(MinecraftPingException $e) {
    $Exception = $e;
}

if ($QueryPing !== null) {
    $QueryPing->Close();
}

$Timer = Number_Format(MicroTime(true) - $Timer, 4, '.', '');
?>
