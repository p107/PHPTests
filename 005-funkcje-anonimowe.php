<pre><?php

$zmienna1 = 'abc123';

$func = function ($param1) use ($zmienna1) {
    echo 'TEST [' . $param1 . ']: ' . $zmienna1;
    return strlen($zmienna1);
};

$zmienna1 = 5;

$func(555);

echo PHP_EOL . gettype($func) . ' / ' . get_class($func);

echo PHP_EOL . PHP_EOL;

$func2 = function () {
    echo 'test2';
};

$func2();

echo PHP_EOL . gettype($func2) . ' / ' . get_class($func2);

$func3 = create_function('', 'echo "\n\ntest3";');

$func3();

echo PHP_EOL . gettype($func3) . ' ' . var_export(is_callable($func3), true);

echo PHP_EOL . PHP_EOL;

function &func4($a) {
    $arr = [123, 'qwe', $a];
    return $arr;
}

$ret1 = func4('zzz');
$ret2 = func4('qqq');
//echo gettype($ret);

xdebug_debug_zval('ret1');
xdebug_debug_zval('ret2');

echo PHP_EOL . PHP_EOL;

$var1 = 'Hello World';
$var2 = '';

$var2 =& $var1;
$var3 = &$var2;
debug_zval_dump($var1);

//http://php.net/manual/en/function.debug-zval-dump.php

//http://php.net/manual/en/features.gc.refcounting-basics.php

