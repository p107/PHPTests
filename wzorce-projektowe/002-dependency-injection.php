<?php

class SomeTool {
    
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
}

class SomeWorker {
    
    protected $tool;
    
    public function __construct(SomeTool $tool) {
        $this->tool = $tool;
    }
    
    public function useTool() {
        echo $this->tool->getName(), PHP_EOL;
    }
}


$tool = new SomeTool('szpadel');

$worker = new SomeWorker($tool);
$worker->useTool();

$tool->setName('grabie');
$worker->useTool();

