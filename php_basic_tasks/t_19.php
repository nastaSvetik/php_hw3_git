<?php

$a = '15';
$b = 15;
$equal = "'".$a."' and ".$b." are equal" ;
$not_equal= "'".$a."' and ".$b." are not equal";

echo 'If you see <b>true</b>, it means that numbers are equal <br> else,
 if you see <b>false</b> - then numbers are not equal,<br><br> 
 So, you see: <b>',var_dump($a===$b),'</b>';


?>