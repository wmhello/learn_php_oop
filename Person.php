<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/26 0026
 * Time: 16:13
 */
class Person{
    public  $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}

$p = new Person('wmhello');
var_dump($p);