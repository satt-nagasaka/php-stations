<?php

namespace Src\Station14\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $dog = new Dog();
        $dog->barking();
        // echo $dog::LEGS;
        echo $dog::$LEGS;
        // Dog::barking();
    }
}

(new Practice)->main();
