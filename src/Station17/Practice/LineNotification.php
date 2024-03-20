<?php

namespace Src\Station17\Practice;

require_once('vendor/autoload.php');

// ここにサンプルコードを記述
class LineNotification implements NotificationInterface
{
    public function setMessage(string $header, string $message): void
    {
        $body = $this->mergeHeaderAndBody($header, $message);
        $this->setBody($body);
    }

    public function sendMessage(): void
    {
        echo "LINEを送信\n";
    }

    private function mergeHeaderAndBody(string $header, string $message): string
    {
        return $header . "\n" . $message;
    }

    private function setBody(string $message): void
    {
        echo $message."を本文にセット\n";
    }
    public function main(): void
    {
        $lineNotifier = new LineNotification();
        $this->sendNotification($lineNotifier);
    }

    public function sendNotification(NotificationInterface $notification): void
    {
        $notification->setMessage('新年のご挨拶', 'あけましておめでとうございます');
        $notification->sendMessage();
    }

}

(new LineNotification)->main();