<?php

$newyear = mktime(23,59,59,12,31,2015);
$now = time();

$diff = $newyear - $now;

$days = floor($diff/(60*60*24));
$hours = floor(($diff-($days*60*60*24))/(60*60));
$min = floor(($diff-($days*60*60*24)-($hours*60*60))/(60));

echo "$days dagar och $hours timmar och $min minuter";