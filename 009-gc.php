<?php

$mem_limit = 100000000;
$i = 0;
$max = 100000;
$gc_force_count = 0;

//gc_disable();

while ($i < $max) {
    $a = new stdClass();
    $a->x = new SplFixedArray(10000);
    //$a->x = new SplFixedArray(1000);
    $a->x[0] = rand(0, $max);
    $a->y = new stdClass();
    
    $a->y->a = &$a; // tutaj gubi sie pamiec
    
    //unset($a->y); // a to zalatwia sprawe ale nie o to tu chodzi
    
    unset($a);
    
    $mem = memory_get_usage();
    
    if ($mem > $mem_limit) {
        $gc_force_count++;
        gc_collect_cycles();
    }
    
    $progress = (int)(($i / $max) * 100);
    
    echo $progress, '% ', sprintf("%.2f MB [GCF = %d]  ", $mem / 1024 / 1024, $gc_force_count), "\r";
    
    $i += 1;
}

echo PHP_EOL, 'done', PHP_EOL;
