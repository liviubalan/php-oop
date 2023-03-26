<?php

// Parent class
abstract class Car
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro(): string;
}

// Child classe
class Dacia extends Car
{
    public function intro(): string
    {
        return "Choose Romanian quality! I'm a $this->name!\n";
    }
}

// Create objects from the child classes
//$car = new Car('car'); // Error
$audi = new Dacia('Sandero');
echo $audi->intro();
