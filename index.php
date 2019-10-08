<?php
include_once 'StopWatch.php';
$stopWatch = new StopWatch();
$stopWatch->start();
echo $stopWatch->getStartTime();
echo "<br>";
sleep(6);
echo "<br>";
$stopWatch->stop();
echo $stopWatch->getEndTime();
echo "<br>";
echo $stopWatch->getElapsedTime();
