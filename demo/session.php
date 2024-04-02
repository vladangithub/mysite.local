<?php

# задаем кодировку страницы
header("Content-type: text/html; charset=utf-8");


session_name('mySession');

session_start();

echo '<h1> Сессии - передача данных между страницами сайта </h1>';

$_SESSION['strVal'] = 'строка';
$_SESSION['intVal'] = 5;

$ar = array(1, 2, 3);
$_SESSION['arrayVal'] = $ar;

print_r($_SESSION);

if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 0;
echo 'Страница обновлена ' . $_SESSION['counter']++ . ' раз. <br /> <a href="/session.php">обновить</a><br />';

echo 'Имя сессии: ' . session_name() . '<br />';
echo 'Идентификатор сессии: ' . session_id() . '<br />';

echo '<br /><a href="session2.php">session2.php</a><br />';;

