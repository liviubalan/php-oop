<?php

declare(strict_types=1); // strict requirement

// Default Argument Value
function setHeight(int $minheight = 50)
{
    echo "The height is : $minheight\n";
}

setHeight(350);
setHeight(); // will use the default value of 50
