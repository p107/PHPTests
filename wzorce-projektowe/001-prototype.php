<?php

// klonowanie jest szybsze od tworzenia nowego obiektu

abstract class Prototype {
    
    protected $name;

    public function __contruct($name) {
        $this->name = $name;        
    }
    
    abstract function __clone();
    
    public function getName() {
        return $this->name;
    }
}

class MyPrototype extends Prototype {
    
    public function __construct($name) {
        parent::__contruct($name);
    }
    
    public function __clone() {
    }
}

$test1 = new MyPrototype('test-1');
$test2 = clone $test1;

echo $test1->getName(), PHP_EOL;
echo $test2->getName(), PHP_EOL;
