<?php

class Fruit
{
    public $name;

    // Call this function when you create an object
    function __construct($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

$apple = new Fruit("Apple");
echo $apple->getName() . "\n";
