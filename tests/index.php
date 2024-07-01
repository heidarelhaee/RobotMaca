<?php
use MacaRobot\MacaRobot;

$macarobot = new MacaRobot();

$keyrobot = "";//key robot

$user = "";//The username of the person you want to send a message to...

$text = "";//Message

echo $macarobot->sendMessageText($keyrobot,$user,$text);

?>