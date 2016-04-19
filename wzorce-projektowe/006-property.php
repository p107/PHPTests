<?php
class Property{
    private static $array = array();
 
    public static function set($name, $value) {
        self::$array[$name]=$value;
    }
    public static function get($name) {
        return self::$array[$name];
    }
    public static function exist($name) {
        return isset(self::$array[$name]);
    }
}
 


Property::set("nazwa1", 1);
Property::set("nazwa2", "wartosc");

echo Property::get("nazwa2"), PHP_EOL;
echo var_export(Property::exist("nazwa1"), true), PHP_EOL;
echo var_export(Property::exist("nazwa3"), true), PHP_EOL;

