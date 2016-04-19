<?php

class MySingleton {
    
    private static $instance = null;
    private $data = 'test-123';
    
    private function __construct() {
    }
    
    private function __clone() {
    }
    
    /**
     * 
     * @return MySingleton
     */
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new MySingleton();
            return self::$instance;
        }
    }
    
    public function getData() {
        return $this->data;
    }
}

$singleton = MySingleton::getInstance();
echo $singleton->getData(), PHP_EOL;
