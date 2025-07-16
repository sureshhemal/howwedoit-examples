<?php

namespace App\Sms\Entities;

/**
 * SMS Message entity.
 */
class Message
{
    /**
     * @param string $phone The recipient's phone number
     * @param string $content The message content
     */
    public function __construct(
        private readonly string $phone,
        private readonly string $content
    ) {
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
    public function getContent(): string
    {
        return $this->content;
    }
}
