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
    define(NUMB, 231);
    echo "<h1>Hello World</h1>";
    echo "<h1>Hello World</h1>";
    $rooter = 45;
    $num = 5;
    $gg = "3.2";
    echo floatval($gg) + 12;
    echo "<br>{$rooter} . {$num}<br>";
    echo $gg + $rooter;
    echo mt_rand(123, 12312);
    if ($num == 5) {
        strlen('sf');
        strtolower('FSF');

    }
    $list = ['age' => 18];
    // for import other php file:  require(will throw an error if dont find file) | include(will work if file get error)
    // include_once | require_once
?>
</body>
</html>