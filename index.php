<?php
// Установка локали и выбор значений даты
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
/* оптимизация кода

$hour = (int)strftime('%H');
$welcome = ""Доброй ночи""; //Инициализируем переменную

if ($hour >= 6 && $hour < 12) {
    $welcome = "Доброе утро";
} elseif ($hour >= 12 && $hour < 18 ) {
    $welcome = "Добрый день";
} elseif ($hour >= 18 && $hour < 23) {
    $welcome = "Добрый вечер";
}

$hour = (int)strftime('%H');
$welcome = ""Доброй ночи""; //Инициализируем переменную

if ($hour >= 6 && $hour < 12):
    $welcome = "Доброе утро";
elseif ($hour >= 12 && $hour < 18 ):
    $welcome = "Добрый день";
elseif ($hour >= 18 && $hour < 23):
    $welcome = "Добрый вечер";
endif;
*/

// Инициализация массива
$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
];

function drawMenu($menu, $vertical = true) {
    $style = "";
    if(!$vertical)
        $style = " style='display:inline; margin-right:15px;'";
    echo "<ul>";
    foreach ($menu as $item)
    {
        echo "<li$style>";
        echo "<a href='$item[href]'>{$item['link']}</a>";
        echo "</li>";
    }
    echo "</ul>";

};


?>

<!DOCTYPE html>
<html lang="RU">

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />

</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="100" height="100" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
      <h1><?= $welcome ?>, Гость!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <blockquote>
        <?php
echo "Сегодня $day число, $mon месяц, $year год ";
        ?>
    </blockquote>
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал.
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен".
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
  <?php

//  echo "<ul>";
//  foreach ($leftMenu as $item)
//  {
//      echo "<li>";
//      echo "<a href='$item[href]'>{$item['link']}</a>";
//      echo "</li>";
//  }
//  echo "</ul>";

  drawMenu($leftMenu);
 ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
      <?php
      drawMenu($leftMenu, false);
      ?>
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?= $year; ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>