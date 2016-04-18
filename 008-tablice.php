<?php 

$arr = new ArrayObject();
$arr->append(555);

$arr['wqe'] = 'asd';

print_r($arr);

echo PHP_EOL;

$fixedArr = new SplFixedArray(5);

print_r($fixedArr);

$fixedArr[2] = 555;

//$fixedArr->fromArray(array_values([123, 'qwe' => 'asd', 789]), false);

print_r($fixedArr);
// jeśli nieprawidłowy index: RuntimeExeption

//---

echo PHP_EOL;
echo PHP_EOL;
echo "-- STERTA --\n";


$heap = new SplMaxHeap();
$heap->insert(123);
$heap->insert(25);
$heap->insert(456);
$heap->insert(1024);
$heap->insert(789);

foreach ($heap as $v) {
    echo $v, ' ['.$heap->count().'] ';
}




echo PHP_EOL;
echo PHP_EOL;



