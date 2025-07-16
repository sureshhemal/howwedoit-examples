<?php

namespace App\Domain\Sms\Models;

use InvalidArgumentException;

/**
 * Value object representing an SMS message.
 */
class SmsMessage
{
    /**
     * @param string $phone The recipient's phone number
     * @param string $message The message content
     */
    public function __construct(
        private readonly string $phone,
        private readonly string $message
    ) {
        $this->validatePhone($phone);
        $this->validateMessage($message);
    }

    /**
     * Get the recipient's phone number.
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Get the message content.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Validate the phone number format.
     *
     * @param string $phone
     * @throws InvalidArgumentException
     */
    private function validatePhone(string $phone): void
    {
        if (empty($phone)) {
            throw new InvalidArgumentException('Phone number cannot be empty');
        }

        // Additional validation could be added here
    }

    /**
     * Validate the message content.
     *
     * @param string $message
     * @throws InvalidArgumentException
     */
    private function validateMessage(string $message): void
    {
        if (empty($message)) {
            throw new InvalidArgumentException('Message cannot be empty');
        }

        // Additional validation could be added here
    }
}
