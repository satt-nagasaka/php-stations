<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $array = ['red', 'blue', 'yellow'] ;
        array_splice($array,2,1);
        array_unshift($array,"white","black");
        array_splice($array,3,0,"green");

        // print_r($array);
        return $array;
    }
}
// (new Question())->main();
