<?php
/* Напишіть функцію, яка приймає будь-яке невід'ємне число, а повертає
максимально можливе значення з цифр цього числа.
Приклад:
function(123456789) => 987654321
function(42145) => 54421 */

function fun($n) {
    $a = str_split($n); // перетворює змінну у масив
    rsort($a); // cортує масив у порядку спадання
    return implode(" ", $a); // об`єдную елементи масиву у строку
}
echo fun (123456789). "\n";
echo fun ("ABCDIFJ") . "\n";

echo "--------другий варіант--------" . "\n";

function func($q){
    $arr = str_split($q);
    rsort($arr);
    return $arr;
}

$q = "42145";

$arr = func($q);

for ($i=0; $i < count($arr); $i++){
    echo $arr[$i];
}
