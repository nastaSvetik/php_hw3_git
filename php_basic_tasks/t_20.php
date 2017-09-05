<?php

$a = 20;

echo 'Operation (bool) can give us 2 different <br>results - true or false. If we echo boolean , <br>
we get <b>1</b> in case when boolean is <b>true</b><br> and <b>nothing</b> wnen boolean is <b>false</b>  ';
echo "<br><br>If you see <b>1</b> below, that means 
 that instance <b>a</b> is  <br> number(but not 0)
  or string (but not void) or array (but not void)
   or true  <br>";
echo "<br>If you see nothing below,
 that means  that instance <b>a</b> is <br> null or 0, 
 or void string, or void array, or false, or not exist <br>";

echo '<br>Is there something below? 	<b>&dArr;</b><br><br><br>';

echo (bool)$a;



?>

