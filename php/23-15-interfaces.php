<?php

interface Animal
{
    public function makeSound();
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow\n";
    }
}

$animal = new Cat();
$animal->makeSound();
