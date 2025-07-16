<?php

namespace App\Domain\Sms\Services;

use App\Domain\Sms\Contracts\SmsServiceInterface;
use App\Domain\Sms\Models\SmsMessage;

class DefaultSmsService implements SmsServiceInterface
{
    /**
     * @param string $apiKey The API key for the SMS provider
     */
    public function __construct(
        private readonly string $apiKey
    ) {
    }

    /**
     * Send an SMS message to the specified phone number.
     *
     * @param string $phone The recipient's phone number
     * @param string $message The message to send
     * @return string The result of the operation
     */
    public function sendSms(string $phone, string $message): string
    {
        $smsMessage = new SmsMessage($phone, $message);

        return $this->sendSmsMessage($smsMessage);
    }

    /**
     * Send the SMS message using the underlying provider.
     *
     * @param SmsMessage $message The message to send
     * @return string The result of the operation
     */
    private function sendSmsMessage(SmsMessage $message): string
    {
        // Here you would typically use an SMS gateway API to send the SMS.
        // For demonstration purposes, we'll just return a success message.
        return "SMS sent to {$message->getPhone()} with message: {$message->getMessage()} using API key: {$this->apiKey}";
    }
}
