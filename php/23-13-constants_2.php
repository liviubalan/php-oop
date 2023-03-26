<?php

class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for visiting emag.ro!";

    public function byebye()
    {
        echo self::LEAVING_MESSAGE . "\n";
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();
