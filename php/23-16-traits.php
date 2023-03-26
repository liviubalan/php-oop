<?php

trait Message1
{
    public function msg1()
    {
        echo "OOP is fun!\n";
    }
}

trait Message2
{
    public function msg2()
    {
        echo "OOP reduces code duplication!\n";
    }
}

class Welcome
{
    use message1;
}

class Welcome2
{
    use Message1, Message2;
}

$obj = new Welcome();
$obj->msg1();

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
