<?php

namespace Src\Station13\Practice;

class Animal
{
    public $name = '名前';
    protected $age = '年';
    private $color = '色';

    public function eat()
    {
        echo '食べる';
    }

    protected function sleep()
    {
        echo '寝る';
    }

    // private function active()
    // {
    //     echo '活動する';
    // }

    public function active()
    {
        $this->run();
        $this->stop();
        $this->jump();
    }

    private function run()
    {
        echo '走る';
    }

    private function stop()
    {
        echo '止まる';
    }

    private function jump()
    {
        echo 'ジャンプ';
    }
}
