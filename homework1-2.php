<?php
$userValue = $_GET['x'];
$one = 1;
$two = 1;

while ($one <= $userValue) {
    if ($one != $userValue) {        
        $three = $one;
        $one = $one + $two;
        $two = $three; 
    }
    if ($one == $userValue) {
    echo "Задуманное число входит в числовой ряд";
    break;
    }
    if ($one > $userValue) {
    echo "Задуманное число не входит в числовой ряд";
    break;
    }
}
?>