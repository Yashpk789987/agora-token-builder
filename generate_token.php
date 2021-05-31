<?php

require_once "RtcTokenBuilder.php";


$appID = "b1ff97b3e47244eaa4c0177359705c0f";
$appCertificate = "b95de5e4627c438db001427d629803b1";
$channelName = "+919630884259";
$uid = 0;
$role = RtcTokenBuilder::RolePublisher;
$expireTimeInSeconds = 3600;
$currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
$privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

$token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
$data = array("token" => $token , "channel" => $channelName);
echo json_encode($data);



?>