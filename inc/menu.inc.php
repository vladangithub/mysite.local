<!-- Навигация -->
<h2>Навигация по сайту</h2>
<!-- Меню -->
<?php

$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
];

function drawMenu($menu, $vertical = true) {
    if (!is_array($menu))
        return false;
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
    return true;

};

if (!drawMenu($leftMenu))
    trigger_error("Что-то случилось", E_USER_ERROR);


//  echo "<ul>";
//  foreach ($leftMenu as $item)
//  {
//      echo "<li>";
//      echo "<a href='$item[href]'>{$item['link']}</a>";
//      echo "</li>";
//  }
//  echo "</ul>";
# Лабораторная 5
//  drawMenu($leftMenu);
?>
<!-- Меню -->
<!-- Навигация -->
