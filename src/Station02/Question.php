<?php

namespace Src\Station02;

class Question
{
    public function main(mixed $arg): string
    {
        $result = "";
        if($arg === 0){
            $result = "zero";
        }else if($arg === "1"){
            $result = "foo";
        }else if($arg === 1){
            $result = "bar";
        }else if($arg >= 2){
            $result = "baz";
        }else{
            $result = "others";
        }
        // echo $result;
        return $result;
    }
}
// (new Question())->main("1");