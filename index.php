<?php

# Функция Преобразование склонений
function plural_type($n) {
	return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2));
}
$_plural_replay = ['последовательную пару', 'последовательные пары', 'последовательных пар'];

// Фромируем случайный массив из 100 элементов. Заполнчем слуйными цифрами от 0 до 5
$arr = [];
for($i=0; $i<100; $i++) {
    $arr[] = rand(0,5);
}

// Выводим массив на экран
echo 'Массив:<br /><code>';
print_r($arr);
echo '</code>';

// Считаем количество последовательных пар одинаковых элементов
$replay = 0;
for($i=1; $i<count($arr); $i++) {
    if ($arr[$i] == $arr[$i-1]) $replay++;
}

echo '<br /><br />Массив содержит '.$replay.' '.$_plural_replay[plural_type($replay)].' одинаковых элементов.';
