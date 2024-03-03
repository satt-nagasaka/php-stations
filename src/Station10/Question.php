<?php

namespace Src\Station10;

class Question
{
    public function main(string $animal): string
    {
        return $this->getAnimalName($animal);
    }

    private function getAnimalName(string $animal): string
    {
        $result = "";
        if ($animal == "猫") {
            $result = "ミケ";
        } elseif ($animal == "犬") {
            $result = "ポチ";
        } else {
            $result = "わかりません";
        }
        // echo $result;
        return $result;
    }
}
// (new Question())->main("猫");