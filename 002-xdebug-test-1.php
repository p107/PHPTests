<?php
// http://hengrui-li.blogspot.de/2011/08/php-copy-on-write-how-php-manages.html

$name = 'piotr';
$fname = $name;
//unset($name);

xdebug_debug_zval('fname');

//xdebug_debug_zval('test');


