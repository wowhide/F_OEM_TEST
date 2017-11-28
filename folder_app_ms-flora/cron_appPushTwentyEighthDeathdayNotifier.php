<?php
require_once 'AndroidPushTwentyEighthDeathdayPushNotifier.php';
require_once 'iosPushTwentyEighthDeathdayNotifier.php';


$androidTwentyEighth = new AndroidPushTwentyEighthDeathdayPushNotifier();
$androidTwentyEighth->push();
$iosTwentyEighth = new iosPushTwentyEighthDeathdayNotifier();
$iosTwentyEighth->push();
