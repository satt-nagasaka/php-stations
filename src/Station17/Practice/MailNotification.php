<?php

namespace Src\Station17\Practice;

require_once('vendor/autoload.php');

class MailNotification implements NotificationInterface
{
    public function setMessage(string $header, string $message): void
    {
        $this->setHeader($header);
        $this->setBody($message);
    }

    public function sendMessage(): void
    {
        echo "メールを送信\n";
    }

    private function setHeader(string $header): void
    {
        echo $header."を件名にセット\n";
    }

    private function setBody(string $message): void
    {
        echo $message."を本文にセット\n";
    }

    public function main(): void
    {
        $mailNotifier = new MailNotification();
        $this->sendNotification($mailNotifier);
    }

    public function sendNotification(NotificationInterface $notification): void
    {
        $notification->setMessage('新年のご挨拶', 'あけましておめでとうございます');
        $notification->sendMessage();
    }
}

(new MailNotification)->main();