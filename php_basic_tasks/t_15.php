<?php

$a=7;
$b=8;
$operator='+';
$result=0;

switch ($operator){
    case ('+'):
        $result=($a+$b);
        break;
    case ('-'):
        $result=($a-$b);
        break;
    case ('*'):
        $result=($a*$b);
        break;
    case ('/'):
        if ($b==0){
            $result='!На ноль делить нельзя!';
        }
        else{
            $result=($a/$b);
        }
        break;
    case ('%'):
        if ($b==0) {
            $result = '!На ноль делить нельзя!';
        }
        else {
            $result = ($a % $b);
        }
        break;
    default: $result='Неизвестный оператор';
}

echo 'Для <br> a = ',$a;
echo '<br> b = ',$b ;
echo '<br> и оператора "', $operator,'"';
echo '<br><br>Результат вычисления: <br>',$a,$operator,$b, '=', $result;


?>