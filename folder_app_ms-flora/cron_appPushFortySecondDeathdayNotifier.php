<?php
require_once 'AndroidPushFortySecondDeathdayPushNotifier.php';
require_once 'iosPushFortySecondDeathdayNotifier.php';


$androidFortySecond = new AndroidPushFortySecondDeathdayPushNotifier();
$androidFortySecond->push();
$iosFortySecond = new iosPushFortySecondDeathdayNotifier();
$iosFortySecond->push();
