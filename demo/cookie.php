<?php
function getCookie($cookieName)
{
    if (isset($_COOKIE[$cookieName]))
    {
        return$_COOKIE[$cookieName];
    } else {
        return false;
    }

};

# Установка cookie

$intValue = 1;
setcookie('my_cookie1', $intValue);

# Чтение куки

# echo getCookie('my_cookie1');

# установка куки со сроком действия в один час

$strValue = 'строковое значение куки';
setcookie('my_cookie2', $strValue, time()+3600);

# echo getCookie('my_cookie2');

# Установка куки с указанием пути("области видимости")
setcookie('my_cookie', $strValue, time()+3600, '/');

# удаление куки

setcookie('my_cookie1', '', time() - 1);
setcookie('my_cookie2', '', time() - 1);

















