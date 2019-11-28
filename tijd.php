  
<?php
$input = explode(" ", $argv[1]);
foreach ($input as $unit) {
$character = substr($unit, -1);
switch ($character) {
 case 'd':
$day = (int) $unit * 60 * 60 * 24;
break;
case 'h':
$hour = (int) $unit * 60 * 60;            
break;
case 'm':
$minute = (int) $unit * 60;
break;
case 's':
$seconds = (int) $unit;
break;
}
}
$output = $day + $hour + $minute + $seconds;
echo $output . " seconds";
