<pre><?php

$a = 0b1;
$b = 5;
$a <<= $b;

echo PHP_EOL . decbin($a); // 100000
echo PHP_EOL . decbin(~$a); // 11111111111111111111111111011111

/*
$a & $b
$a | $b
$a ^ $b // xor
~ $a // not
$a << $b
$a >> $b
*/

$c = 0b1100;
$d = 0b1001;

$e = $c AND $d;
echo PHP_EOL . decbin($e); // 1100
echo PHP_EOL; var_dump($e); // int(12)

$e = $c & $d;
echo PHP_EOL . decbin($e); // 1000
echo PHP_EOL; var_dump($e); // int(8)

// Only the last parameter can be variadic
function qwe($a, ...$b) {
    echo "\n...\n";
    print_r($a); echo PHP_EOL;
    print_r($b); echo PHP_EOL;
    
}

qwe(1, 2, 3, 4);

$arr = [6, 7, 8, 9, 1];

qwe(...$arr);
