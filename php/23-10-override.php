<?php

class Fruit
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function intro()
    {
        echo "The fruit is {$this->name}.\n";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and {$this->color}.\n";
    }
}

$strawberry = new Strawberry("strawberry", "red");
$strawberry->intro();
