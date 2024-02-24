<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
        $resultArray = [
            ["アザラシ","アライグマ"],
            ["ウサギ","ウシ","ウマ"],
            ["オオカミ","オットセイ"]
        ];
        $resultArray[2] = $resultArray[1];
        $resultArray[1] = ["イヌ","イルカ"];
        // print_r($resultArray);
        return $resultArray;
    }
}
// (new Question())->main();