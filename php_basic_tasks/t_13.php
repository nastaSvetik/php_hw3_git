<?php

$distance = 120;
$hours = 4;
$speed = $distance/$hours;

echo 'Расстояние: ', $distance, ' km <br> Время: ', $hours,
      ' h <br> Скорость: ', $speed, ' km/h = ',
       round($speed*1000/3600, 2), ' m/s';

?>