<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    define("NUMB", 231);
    echo "<h1>Hello World</h1>";
    echo "<h1>Hello World</h1>";
    $rooter = 45;
    $num = 5;
    $gg = "3.2";
    echo floatval($gg) + 12;
    echo "<br>{$rooter} . {$num}<br>";
    echo $gg + $rooter;
    echo mt_rand(123, 12312).'<br>';
    if ($num == 5) {
        strlen('sf');
        strtolower('FSF');

    }
    $list = ['age' => 18];
    // for import other php file:  require(will throw an error if dont find file) | include(will work if file get error)
    // include_once | require_once

    $arr = [1, 2, 3, 4, 6, 5];
    sort($arr); // сортирует список
    rsort($arr); // сортирует в обратном порядке
    shuffle($arr); // рандомно разбрасывает значение в списке по индексам
    echo in_array(5, $arr).'<br>'; // возвращает 1 если нащел, '' если нет
    print_r($arr); // выводит список
    unset($arr[2]); // Удаляет значение из списка
    $arr1 = array_slice($arr, 0, count($arr));  // делает обрезанные список 1=> array , 2=> start pos. 3=> how many values
    $arr = array_values($arr); // упорядочивает индексы(восстанавливает)
    $arr3 = array_merge($arr, $arr1);
    print_r($arr);
    echo '<br>';
    var_dump($arr1); // выводит список
    echo '<br>'.gettype($arr1);
    $gg = "john,Sina,Bart";
    echo '<br>'.is_numeric(NUMB);
    echo '<br>'.is_integer(NUMB);
    echo '<br>'.is_string($gg);
    echo '<br>'.strpos($gg, "2");
    echo '<br>';
    $arr_words = explode(",", $gg);
    print_r($arr_words);
    echo '<br>'.implode(' | ', $arr_words);
?>
</body>
</html>