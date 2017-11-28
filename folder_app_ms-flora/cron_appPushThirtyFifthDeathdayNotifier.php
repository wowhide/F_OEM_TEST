<?php
require_once 'AndroidPushThirtyFifthDeathdayPushNotifier.php';
require_once 'iosPushThirtyFifthDeathdayNotifier.php';


$androidThirtyFifth = new AndroidPushThirtyFifthDeathdayPushNotifier();
$androidThirtyFifth->push();
$iosThirtyFifth = new iosPushThirtyFifthDeathdayNotifier();
$iosThirtyFifth->push();
