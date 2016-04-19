<?php

interface Product {
    public function getName();
}

class MyProduct1 implements Product {
    
    public function getName() {
        return 'prod-1';
    }

}

class MyProduct2 implements Product {
    
    public function getName() {
        return 'prod-2';
    }

}

interface Creator {
    public function create($type);
}

class MyCreator implements Creator {
    const TYPE1 = 'type-1';
    const TYPE2 = 'type-2';
    
    public function create($type) {
        switch ($type) {
            case self::TYPE1:
                return new MyProduct1();
                
            case self::TYPE2:
                return new MyProduct2();
        }        
    }

}

$creator = new MyCreator();

$prod1 = $creator->create(MyCreator::TYPE1);
$prod2 = $creator->create(MyCreator::TYPE2);

echo $prod1->getName(), PHP_EOL;
echo $prod2->getName(), PHP_EOL;

