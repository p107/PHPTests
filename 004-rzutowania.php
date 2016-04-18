<pre><?php

$a = ('0' == false); 

var_dump($a);

$b = (bool) '0';

var_dump($b);

$c = (bool) '00';

var_dump($c);

