<?php

namespace Src\Station05;

class Question
{
    public function main(): int
    {
        $result = 0;
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        foreach ($array as $value) {
            if (($value % 4) > 2) {
                continue;
            }else if($value >= 8){
                break;
            }
            $result = $result + $value;
        }
        // echo $result;
        return $result;
    }
}
