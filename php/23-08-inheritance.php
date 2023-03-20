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
    public function message()
    {
        echo "Am I a fruit or a berry?\n";
    }
}

$strawberry = new Strawberry("strawberry");
$strawberry->message();
$strawberry->intro();
