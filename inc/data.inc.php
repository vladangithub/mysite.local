<?php
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$mon = mb_strtolower(iconv("windows-1251", "UTF-8", $mon));
$year = strftime('%Y');

//Получаем текущий час в виде строки от 00 до  23 и приводим строку к целому числу от 00 до 23

$hour = (int)strftime('%H');
$welcome = ""; //Инициализируем переменную

if ($hour >= 6 && $hour < 12) {
    $welcome = "Доброе утро";
} elseif ($hour >= 12 && $hour < 18 ) {
    $welcome = "Добрый день";
} elseif ($hour >= 18 && $hour < 23) {
    $welcome = "Добрый вечер";
} else {
    $welcome = "Доброй ночи";
}
?>
