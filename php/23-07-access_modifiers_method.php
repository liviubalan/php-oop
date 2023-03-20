<?php

class Fruit
{
    function getValuePublic()
    {
        echo "public\n";
    }

    public function getValuePublic2()
    {
        echo "public2\n";
    }

    protected function getValueProtected()
    {
        echo "protected\n";
    }

    private function getValuePrivate()
    {
        echo "private\n";
    }
}

$apple = new Fruit();
$apple->getValuePublic();
$apple->getValuePublic2();
//$apple->getValueProtected(); // Error
//$apple->getValuePrivate(); // Error
