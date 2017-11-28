<?php
require_once 'AndroidPushSeventhDeathdayNotifier.php';
require_once 'iosPushSeventhDeathdayNotifier.php';


$androidSeventh = new AndroidPushSeventhDeathdayNotifier();
$androidSeventh->push();
$iosSeventh = new iosPushSeventhDeathdayNotifier();
$iosSeventh->push();
