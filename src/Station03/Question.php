<?php

namespace Src\Station03;

class Question
{
    public function main(mixed $arg): string
    {
        $result = "";
        switch($arg){
            case $arg===1:
                $result = "りんご";
                break;
            case $arg===2:
            case $arg===3:
                $result = "みかん";
                break;
            default:
                $result = "さくらんぼ";
                break;
        }
        return $result;
    }
}
