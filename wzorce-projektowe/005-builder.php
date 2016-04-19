<?php

class Product {
    private $name;
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
}

interface Builder {
    public function buildSomething();
    public function getSomething();
}

class MyBuilder1 implements Builder {
    private $product;
    
    public function __construct() {
        $this->product = new Product();
    }
    
    public function buildSomething() {
        $this->product->setName('prod-1');
    }

    /**
     * 
     * @return Product
     */
    public function getSomething() {
        return $this->product;
    }

}

class MyBuilder2 implements Builder {
    private $product;
    
    public function __construct() {
        $this->product = new Product();
    }
    
    public function buildSomething() {
        $this->product->setName('prod-2');
    }

    /**
     * 
     * @return Product
     */
    public function getSomething() {
        return $this->product;
    }

}

class Director {
    private $builder;
    
    public function __construct(Builder $builder) {
        $this->builder = $builder;
    }
    
    public function work() {
        $this->builder->buildSomething();
    }
    
    public function getResults() {
        return $this->builder->getSomething();
    }
}


$builder1 = new MyBuilder1();
$builder2 = new MyBuilder2();

$director1 = new Director($builder1);
$director1->work();
$product1 = $director1->getResults();
echo $product1->getName(), PHP_EOL;

$director2 = new Director($builder2);
$director2->work();
$product2 = $director2->getResults();
echo $product2->getName(), PHP_EOL;

