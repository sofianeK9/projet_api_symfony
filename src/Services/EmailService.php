<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail(string $recepteurEmail, string $subject, string $content): void
    {
        $email = (new Email())
            ->from('support@pop.eu.com')
            ->to($recepteurEmail)
            ->subject($subject)
            ->html('<p>' . htmlspecialchars($content) . '</p>');

        $this->mailer->send($email);
    }
}
