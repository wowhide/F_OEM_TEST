<?php
require_once 'AndroidPushTwentyFirstDeathdayPushNotifier.php';
require_once 'iosPushTwentyFirstDeathdayNotifier.php';


$androidTwentyFirst = new AndroidPushTwentyFirstDeathdayPushNotifier();
$androidTwentyFirst->push();
$iosTwentyFirst = new iosPushTwentyFirstDeathdayNotifier();
$iosTwentyFirst->push();
