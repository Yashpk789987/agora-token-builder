<?php

require_once "RtcTokenBuilder.php";


$appID = "b1ff97b3e47244eaa4c0177359705c0f";
$appCertificate = "b95de5e4627c438db001427d629803b1";
$channelName = "yashpk212830";
$uid = 2882341273;
$role = RtcTokenBuilder::RolePublisher;
$expireTimeInSeconds = 3600;
$currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
$privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

$token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
echo 'Token with int uid: ' . $token . PHP_EOL;



?>