<?php

namespace Src\Station13\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $dog = new Dog();
        // $dog->eat();   // publicのため正常に実行される
        // $dog->sleep();  // protectedのためエラーになる
        // $dog->active();  // privateのためエラーになる

        // $dog = new Dog();
        // echo $dog->name;  // publicのため表示される
        // echo $dog->age;  // protectedのためエラーになる
        // echo $dog->color;  // privateのためアクセスできず表示されない
        
        $dog = new Dog();
        $dog->active();  // 走る止まるジャンプが出力されます
    }
}

(new Practice)->main();
