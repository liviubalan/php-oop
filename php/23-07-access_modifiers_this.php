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

    public function getValueAll()
    {
        $this->getValuePublic();
        $this->getValuePublic2();
        $this->getValueProtected();
        $this->getValuePrivate();
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
$apple->getValueAll();
