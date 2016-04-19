<?php

spl_autoload_register(function ($className) {
    echo $className;
    exit;
});

new \qwe\asd\Test;

