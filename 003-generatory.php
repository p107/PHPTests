<pre><?php

function gen1() {
    yield 5;
    yield 10;
    yield 'test';
    yield 100;
}

foreach (gen1() as $k => $v) {
    echo $k . ' - ' . $v . PHP_EOL;
}

echo PHP_EOL . PHP_EOL;

function gen2($start, $stop) {
    while ($start <= $stop) {
        yield (string) sprintf("%04d", $start++);
    }
}

foreach (gen2(5, 12) as $k => $v) {
    echo $k . ' - ' . $v . PHP_EOL;
}

