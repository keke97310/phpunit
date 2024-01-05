<?php

declare(stricy_types=1);

namespace App;

final class Greeter
{
    public function greet(string $name): string
    {
        return "Hello " . $name . "!";
    }
}

