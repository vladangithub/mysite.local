<?php

# задаем кодировку страницы
header("Content-type: text/html; charset=utf-8");

session_start();

print_r($_SESSION);

session_destroy();

echo '<br />';
print_r(S_SESSION);




