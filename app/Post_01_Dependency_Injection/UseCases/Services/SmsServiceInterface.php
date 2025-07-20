<?php

namespace App\Post_01_Dependency_Injection\UseCases\Services;

/**
 * Interface for SMS service implementations.
 */
interface SmsServiceInterface
{
    /**
     * Send an SMS message to the specified phone number.
     *
     * @param  string  $phone  The recipient's phone number
     * @param  string  $message  The message content
     * @return string The result of the operation
     */
    public function sendSms(string $phone, string $message): string;
}
