<?php

//  у нас есть массив
$array = ['name' => 'Yegoroot', 'surname' => 'Aliev', 'city' => 'Grozniy'];

// сериализем его в "удобный" вид (массивообразная строка)
$result = serialize($array);

// формируем cookie | cookie будет жить 1 час
setcookie('arrcookie ', $result, time() + 3600);

// присвоили какой то переменной cookie
$str = $_COOKIE['arrcookie'];

// привели нашу массивообразную строку обратно в массив
$arr = unserialize($str);

// вывели дамп
var_dump($arr);

?>
