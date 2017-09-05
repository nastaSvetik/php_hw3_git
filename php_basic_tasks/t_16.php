<?php

$a = 0;
$b = 0;
$text="Max number of ".$a." and ".$b." is " ;

if ($a > $b){
    echo $text, $a;
}
elseif ($b > $a){
    echo $text,$b;
}
else {
    $text = 'Numbers '.$a.' and '.$b.' are equal';
    echo $text;
}

?>