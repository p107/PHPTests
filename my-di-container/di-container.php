<?php

interface Qwe {

}

class Xyz implements Qwe {

  public function __construct() {
    echo PHP_EOL . 'Nowy obiekt Xyz.' . PHP_EOL;
  }

  public function hello() {
    echo PHP_EOL . 'HELLO WORLD!' . PHP_EOL;
  }

}

class Zyx implements Qwe {

  public function __construct() {
    echo PHP_EOL . 'Nowy obiekt Zyx.' . PHP_EOL;
  }

  public function hello() {
    echo PHP_EOL . 'EHLO LORD!' . PHP_EOL;
  }

}

class Abc {

  private $myXyz;

  function __construct(Qwe $xyz) {

    $this->myXyz = $xyz;

    echo PHP_EOL . 'Nowy obiekt Abc.' . PHP_EOL;

  }

  public function hello() {
    $this->myXyz->hello();
  }
}

class MyContainer {

  private $map = array();

  public function __construct() {

  }

  public function get($className) {
    if (isset($this->map[$className])) {
      $className = $this->map[$className];
    }
    echo PHP_EOL . 'Bede robic ' . $className . PHP_EOL;

    $class = new ReflectionClass($className);
    $constructor = $class->getConstructor();
    if ($constructor) {
      $params = $constructor->getParameters();
      foreach ($params as $k => $param) {
        $paramClassName = $param->getClass();
        $paramObject = $this->get($paramClassName->getName());
        $params[$k] = $paramObject;
      }
      return $class->newInstanceArgs($params);
    }

    return new $className();
  }

  public function set($interfaceName, $classNamespace) {
    $this->map[$interfaceName] = $classNamespace;
  }

}

$c = new MyContainer();
//$c->set('Qwe', 'Xyz');
$c->set('Qwe', 'Zyx');

$a = $c->get('Abc');
$a->hello();
