<?php //phpinfo(); 
$time1 = '2018-04-20 09:03:37';
$time2 = '2018-04-20 09:02:59';

$datetime1 = new DateTime('2018-04-20 09:03:37');
$datetime2 = new DateTime('2018-04-20 08:02:59');
$interval = $datetime1->diff($datetime2);
//echo $interval->format('%h')." Hours ".$interval->format('%i')." Minutes";

$start_date = new DateTime('2018-04-20 09:03:37');
$since_start = $start_date->diff(new DateTime('2018-04-20 09:02:59'));
echo $since_start->days.' days total<br>';
echo $since_start->y.' years<br>';
echo $since_start->m.' months<br>';
echo $since_start->d.' days<br>';
echo $since_start->h.' hours<br>';
echo $since_start->i.' minutes<br>';
echo $since_start->s.' seconds<br>';
echo $since_start->h.'h' . ' : '. $since_start->i .'m' . ' : '. $since_start->s .'s';
?>