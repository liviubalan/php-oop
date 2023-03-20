<?php

class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }
}

$apple = new Fruit("Apple", "red");
echo $apple->getName() . "\n";
echo $apple->getColor() . "\n";
