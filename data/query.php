<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/webpage-display-minecraft-server-status/
 */
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

require dirname(dirname(__FILE__)).'/src/MinecraftQuery.php';
require dirname(dirname(__FILE__)).'/src/MinecraftQueryException.php';

$Timer = MicroTime(true);

$Query = new MinecraftQuery();

try {
    $Query->Connect(MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT);
} catch(MinecraftQueryException $e) {
    $Exception = $e;
}

$Timer = Number_Format(MicroTime(true) - $Timer, 4, '.', '');
?>
