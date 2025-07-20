<?php

namespace App\Post_01_Dependency_Injection\Entities;

/**
 * SMS Message entity.
 */
class Message
{
    /**
     * @param  string  $phone  The recipient's phone number
     * @param  string  $content  The message content
     */
    public function __construct(
        private readonly string $phone,
        private readonly string $content
    ) {}

    /**
     * Get the recipient's phone number.
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Get the message content.
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
