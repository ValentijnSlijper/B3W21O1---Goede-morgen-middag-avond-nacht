<?php
date_default_timezone_set('Europe/Amsterdam');
$timelive = date("H:i");
$time = date("G");

if( $time >= 6 && $time < 12 ){
$img = 'morning.png';
$message = 'Goede Morgen! <br> Het is nu ';
}
if( $time >= 12 && $time < 18 ){
$img = 'afternoon.png';
$message = 'Goede Middag! <br> Het is nu ';
}
if( $time >= 18 && $time <= 23 ){
$img = 'evening.png';
$message = 'Goede Avond! <br> Het is nu ';
}
if( $time >= 0 && $time < 6 ){
$img = 'night.png';
$message = 'Goede Nacht! <br> Het is nu ';
}
?>
