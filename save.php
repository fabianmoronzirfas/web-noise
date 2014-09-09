<?php
$val = $_POST['value'];
setlocale(LC_TIME, "fi_FI");
date_default_timezone_set("Europe/Berlin");
$date = strftime("%Y-%m-%d-%A");
$timesaved = strftime("%H:%M:%S");
$thetime = $_POST['current_time'];
$file = "saved/" . $date . ".txt";
$cont = $thetime . ', ' . $val . '' . "\n";

$f = fopen($file, 'a+');
fwrite($f, $cont);
fclose($f);
?>