<?php
error_reporting(1);

# задаем кодировку страницы
header("Content-type: text/html; charset=utf-8");
?>
<?php
if (isset($_GET['name']))
{

echo "<h2> глобальный массив ARRAY - содержит переменные отравленные методом GET</h2>";
    echo "Имя = {$_GET['name']} <br />";
    echo "Email = {$_GET['email']} <br />";

    echo "Пол = ";

    switch ($_GET['sex']) {
        case 1:
            echo 'женский';
            break;
        case 2:
            echo 'мужской';
            break;
    }
    echo '<br />';
    echo "Запомнить = {$_GET['save']} <br /><br /><br />";
}

if (isset($_POST['name']))
{

    echo "<h2> глобальный массив ARRAY - содержит переменные отравленные методом POST</h2>";
    echo "Имя = {$_POST['name']} <br />";
    echo "Email = {$_POST['email']} <br />";

    echo "Пол = ";

    switch ($_POST['sex']) {
        case 1:
            echo 'женский';
            break;
        case 2:
            echo 'мужской';
            break;
    }
    echo '<br />';
    echo "Запомнить = {$_POST['save']} <br /><br /><br />";
}