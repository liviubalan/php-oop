<?php

class Domain
{
    protected static function getWebsiteName()
    {
        return "emag.ro\n";
    }
}

class Emag extends Domain
{
    public $websiteName;

    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
    }
}

$emag = new Emag();
echo $emag->websiteName;
