<?php

$timeZone = new DateTimeZone('Europe/Paris'); 
$presentTime = new DateTime('now', $timeZone);
$destinationTime = new DateTime('2050-12-12 12:24:00', $timeZone);
$diff = $presentTime->diff($destinationTime);
$minutes = $diff->days * 24 * 60 + $diff->h * 60 + $diff->i;
$carburant = floor($minutes/10000);
?>