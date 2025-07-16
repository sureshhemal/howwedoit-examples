<?php

namespace App\Sms\UseCases\Services;

readonly class SmsService implements SmsServiceInterface
{
    /**
     * @param string $apiKey The API key for the SMS provider
     */
    public function __construct(
        private string $apiKey
    ) {
    }

    /**
     * Send an SMS message to the specified phone number.
     *
     * @param string $phone The recipient's phone number
     * @param string $message The message content
     * @return string The result of the operation
     */
    public function sendSms(string $phone, string $message): string
    {
        // Here you would typically use an SMS gateway API to send the SMS.
        // For demonstration purposes, we'll just return a success message.
        return "SMS sent to $phone with message: $message using API key: ". $this->apiKey;
    }
}
