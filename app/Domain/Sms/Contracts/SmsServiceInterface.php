<?php

namespace App\Domain\Sms\Contracts;

interface SmsServiceInterface
{
    /**
     * Send an SMS message to the specified phone number.
     *
     * @param string $phone The recipient's phone number
     * @param string $message The message to send
     * @return string The result of the operation
     */
    public function sendSms(string $phone, string $message): string;
}
