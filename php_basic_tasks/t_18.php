<?php

$a = '78';
$b = 78;
$equal = "'".$a."' and ".$b." are equal" ;
$not_equal= "'".$a."' and ".$b." are not equal";

if ($a === $b){
    echo $equal;
}
else {
    echo $not_equal;
}

?>