<?php

namespace Src\Station14\Practice;

class Dog extends Animal
{
    private static $VOICE = 'wan';
    public static $LEGS = 4;

    public function barking()
    {
        echo self::$VOICE;
    }
}
