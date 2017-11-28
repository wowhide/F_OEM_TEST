<?php
require_once 'AndroidPushFortyNinthDeathdayPushNotifier.php';
require_once 'iosPushFortyNinthDeathdayNotifier.php';


$androidFortyNinth = new AndroidPushFortyNinthDeathdayPushNotifier();
$androidFortyNinth->push();
$iosFortyNinth = new iosPushFortyNinthDeathdayNotifier();
$iosFortyNinth->push();
