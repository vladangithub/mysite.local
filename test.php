<?php
//declare(strict_types=1); - Включение строгой типизации
error_reporting(E_ALL);



/*
$name = "John";
$GLOBALS ["name"] = "John";

$var = "HELLO";
$s = "hello";
function vstring($var)
{
    $i = 0;
    $len = strlen($var);
    while ($i < $len)
        echo $var{$i ++} . "</br>";
};

vstring("HGOIKHPKJHHOHOFUFUFLHLO");


// Обращение к глобальным переменным: вариант 3
function sayHello(&$name)
{
    echo "<h1>Hello, $name!</h1>";
    $name = "Вася";
}

$name = "Mike";
sayHello($name);
echo $name; // Вася

sayHello("John"); // ERROR!!!



// Обращение к глобальным переменным: вариант 2
function sayHello($name)
{
    echo "<h1>Hello, $name!</h1>";
    $GLOBALS["name"] = "Вася";
}

$name = "Mike";
sayHello($name);
echo $name; // Вася



$name = "John";
$GLOBALS ["name"] = "John";

$var = "HELLO";

function vstring($var)
{
    $i = 0;
    $len = strlen($var);
    while ($i < $len)
        echo $var{$i ++} . "</br>";
};

vstring("HGOIKHPKJHHOHOFUFUFLHLO");


function sayHello($name)
{
    echo "<h1>Hello, $name!</h1>";
    global $name, $x;
    $name = "Вася";
    $x = "AAA";
}

$name = "Mike";

sayHello($name);

echo $name . "</br>"; // Вася
echo $x; // AAA


function sayHello($name)
{
    echo "<h1>Hello, $name!</h1>";
    $name = "Вася";
}


$name = "Mike";

sayHello($name);

echo $name; // Mike




function say_hello($name = "Guest", $h = 3) {
    echo "<h$h>Hello, $name!</h$h>\n";
};

say_hello("John", 1);
$n = "Mike";
say_hello($n);
$str = "say_hello";
$str();



echo strftime("%d-%b-%y, %A");



$name = 10;
$x =10;
$x = $x + 15;
$x += $x;
$y = $x;

unset($x);

echo $x, $y;


$age = 25;

<h1>Вам <?php echo "$age" ?> лет</h1>


echo 1;
echo 2;
strftime();
echo 3;

$q = true;
$w = false;

$e = null;

unset($q);

echo gettype($q);


echo gettype($x);
$y = 1;
echo gettype($y);



//if ($shop)
//
//    echo "Go to shop";
//    echo "Pay a bread";
//echo "\nWent to home";

$shop = "open";
$money = true;

if ($shop == "open" and $money)
{
    echo "Go to shop";
    echo "Pay a bread";
}
echo "\nWent to home";

$shop = true;
$money = false;

if ($shop && $money)
{
    echo "Go to shop";
    echo "\nPay a bread";
} else{
    echo "Go to Home";
    echo "\nSee TV ";
}

$shop = true;
$money = false;

if ($shop)
{
    echo "Go to shop";
} else{
    echo "Go to Home";
}

echo ($shop) ? "Go to shop" : "Go to Home";

echo isset($name) ? $name : "Unknown";
echo $name ?? "Unknown";

$a = 2;
$b = 10;

if ($a > $b) {
    echo "а больше, чем б";
} elseif ($a == $b) {
    echo "а равно б";
} else {
    echo "а меньше, чем б";
}


$day = 2;
if ($day == 1)
    echo "Понедельник";
elseif ($day == 2)
    echo "Вторник";
elseif ($day == 3)
    echo "Среда";
elseif ($day == 4)
    echo "Четверг";
elseif ($day == 5)
    echo "Пятница";
elseif ($day == 6)
    echo "Суббота";
elseif ($day == 7)
    echo "Воскресенье";
else
    echo "Неизвестный день";

$i = 1;
switch ($i) {
    case 0:
        echo "Результат: 0";
    case 1:
        echo "Результат: 1";
    case 2:
        echo "Результат: 2";
    case 3:
        echo "Результат: 3";
    case 4:
        echo "Результат: 4";
}


$i = 20;

switch ($i) {
    case 0:
        echo "Результат: 0"; break;
    case 1:
        echo "Результат: 1"; break;
    case 2:
        echo "Результат: 2"; break;
    case 3:
        echo "Результат: 3"; break;
    case 4:
        echo "Результат: 4"; break;
    default:
        echo "Результат: много";
}

$arr = array();
$arr = [];
$user = [
    "name" => "John",
    "login" => "root",
    "password" => "1234"
        ];
//echo $user[0];
$user["age"] = 25;
$user[] = true;
//unset($user[27]);
//echo count($user);
//print_r($user);
var_dump($user);


$users[0] = [
    "login" => "john",
    "pass" => "1234"
];
$users[1] = [
    "login" => "mike",
    "pass" => "5678"
];
echo $users[1]["login"]; // mike

$q = 1;
$q++;
//++$q;
echo $q;


for ($i = 1; $i<=5; $i++){
    echo $i;
}

//$i = 1;
//while ($i<=5) {
//    echo $i . "</br>";
//    $i++;
//} 12345

//$i = 1;
//while ($i<=5) {
//    echo $i++;
//}  12345

//$i = 1;
//while ($i<=5) {
//    echo ++$i;
//}   23456

for ($i = 1; $i<=5; $i++){
    echo $i;
};


$i = 100;
do {
    echo $i++ . "</br>";
} while ($i <= 110);


$i = 1;
while ($i <= 10) {
    echo $i++ . "</br>";
    if ($i == 5)
        break;
}

 $q = 0;
while ($q < 9) {
    $q++;
    if($q == 5)
        continue;
    echo $q . "</br>";
}



$i = 1; $j = 1;
while ($j <= 10) {
    while ($i <= 10) {
        echo $i++;
        if ($i == 5)
            break 2;
    }
    $j++;
}

$user = [
    "name" => "John",
    "login" => "root",
    "password" => "1234"
];

$user["age"] = 25;
$user[] = true;

//foreach ( $user as $v ) {
//    echo $v . "</br>";
//}
//John
//root
//1234
//25
//1

foreach ( $user as $k => $v ) {
    echo "$k : $v </br>";
}
//name : John
//login : root
//password : 1234
//age : 25
//0 : 1


$nums = [1,2,3,4,5];
print_r($nums);

foreach ($nums as &$val)
    $val *= 10;

print_r($nums);


function test() {
    $a = 0;
    echo $a++;
};

test();
test();
test();

function test() {
    static $q = 0;
    echo $q++;
};

test();
test();
test();



function hello() {
    static $cnt = 0;
    echo "Функция исполняется: " . ++$cnt;
    echo "Hello!\n";
};

hello();
hello();
hello();



function area_of_disk($r) {
    return 3.14 * $r * $r;

};
function area_of_ring($big, $small) {
    $b = area_of_disk($big);
    $s = area_of_disk($small);
    return $b - $s;

};

echo area_of_ring(5, 3);


foo(1, 2, 3);

function foo() {
    $numargs = func_num_args();
    echo "Всего аргументов: $numargs\n";

    echo "Второй 
          аргумент: " . func_get_arg(1) . "\n";

    $args = func_get_args();
    foreach ($args as $key => $value) {
        echo "Аргумент $key : $value\n";
    }
};


function foo(...$nums) {
    foreach ($nums as $key => $value) {
        echo "Аргумент $key : $value\n";
    }
}


function foo(array $var) {
    // Ожидается только массив!
}

function mult($num) {
    return  $num * $num;
}
// PHP 5.4
function bar(callable $var, $arg) {
    return $var($arg);
}
bar("mult", 4);


// PHP 7

function foo(int $i, string $s, bool $b, int ...$nums):bool {
    return $b;

}

// Включение строгой типизации
declare(strict_types=1);


function area_of_disk(int $r) {
    return 3.14 * $r * $r;

};
function area_of_ring($big, $small) {
    $b = area_of_disk($big);
    $s = area_of_disk($small);
    return $b - $s;

};

echo area_of_ring(5, 4);
*/

<div id="content">
    <!-- Заголовок -->
    <h1>Калькулятор школьника</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->
  </div>























































































































































