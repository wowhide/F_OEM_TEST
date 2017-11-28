<?php
require_once 'AndroidPushFourteenthDeathdayPushNotifier.php';
require_once 'iosPushFourteenthDeathdayNotifier.php';


$androidFourteenth = new AndroidPushFourteenthDeathdayPushNotifier();
$androidFourteenth->push();
$iosFourteenth = new iosPushFourteenthDeathdayNotifier();
$iosFourteenth->push();
