<?php
/* Напишіть функцію, яка приймає рядок
і повертає кількість голосних, які в ньому є
countVowels ("Celebration") -> 5
countVowels ("Palm") -> 1 */

function countVowels($str){
    $res = 0;
    $a=array('a','e','o','u','y','i');
    for($i=0; $i < strlen($str); $i++){
        if (in_array($str[$i], $a) ){ //Перувіряє чи є значення у масиві
            $res++;
        }
    }
    return $res;
}

print_r(countVowels('Celebration'));
echo "\n";
print_r(countVowels('Palm'));

echo "\n-----другий варіант-------\n";

function countVowels1($str){

    $patt='~(?<vowels>[aeouyi])~';
    preg_match_all($patt, $str,$a); //Виконує глобальний пошук шаблону у рядку
    return count($a['vowels']); //підраховує кількість елементів масиву
}

print_r(countVowels1('Celebration'));
