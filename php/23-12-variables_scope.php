<?php

$type = 'apple'; // global scope
class Fruit
{
    public function getGlobal()
    {
        // echo $type; // Error
        echo $GLOBALS['type'] . "\n";
    }

    public function getLocal()
    {
        $type = 'banana';
        var_dump($type);
    }

    public function getLocal2()
    {
        // var_dump($type); // Error
    }

    public function getStatic()
    {
        static $x = 0; // Preserve previous value
        echo $x . "\n";
        $x++;
    }
}

$fruit = new Fruit();
$fruit->getGlobal();
$fruit->getLocal();
//$fruit->getLocal2(); // Error
$fruit->getStatic();
$fruit->getStatic();
