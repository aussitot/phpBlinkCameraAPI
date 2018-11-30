<?php

require("phpBlinkCameraAPI.php"); //php class API of the Blink Camera
$blink_username = "blink email";
$blink_password = "blink password";

$blink = new BlinkCamera($blink_username, $blink_password);
$blink->Arm();
//
?>
