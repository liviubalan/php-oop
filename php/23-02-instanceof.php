<?php

class Fruit
{
}

class Vegetable
{
}

$apple = new Fruit();
$tomato = new Vegetable();
var_dump($apple instanceof Fruit);
var_dump($apple instanceof Vegetable);
