<?php

class Fruit
{
    // Properties
    public $name;

    // Methods
    function setName($name)
    {
        // $this keyword refers to the current object, and is only available inside methods
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

$apple = new Fruit();
$apple->setName('Apple');

$banana = new Fruit();
$banana->setName('Banana');

echo $apple->getName() . "\n";
echo $banana->getName() . "\n";
