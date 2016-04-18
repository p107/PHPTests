<pre><?php

echo PHP_EOL;

foreach (glob('*.php') as $filename) {
    $fp = fopen($filename, 'r');
    echo print_r(stream_get_meta_data($fp), true) . PHP_EOL . PHP_EOL;
    fclose($fp);
}

echo PHP_EOL . PHP_EOL;

//$iterator = new DirectoryIterator(dirname(__FILE__));
$dir = new RecursiveDirectoryIterator(dirname(__FILE__), RecursiveDirectoryIterator::SKIP_DOTS);
$iterator = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::SELF_FIRST);

foreach ($iterator as $file) {
    echo $file->getFilename() . PHP_EOL;
    echo $file->getSize() . PHP_EOL;
    echo $file->getType() . PHP_EOL;
    echo $file->getExtension() . PHP_EOL;
    echo PHP_EOL;
}



