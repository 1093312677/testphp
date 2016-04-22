<?php


$date = date('2011-12-12 20:10:00');
$hour = date('m',strtotime($date));
$min = date('d',strtotime($date));
echo $hour;
?>