<pre><?php


echo PHP_EOL . PHP_EOL;

$func = function ($a) use (&$func) {
    echo 'Hello ' . $a . PHP_EOL;
    if ($a > 0) {
        return $func($a - 1) + 1;
    }
    return 1;
};

$count = $func(5);

echo 'Count = ', $count;

