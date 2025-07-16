<?php

return [
    /*
    |--------------------------------------------------------------------------
    | SMS Service Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for the SMS service.
    | The API key is retrieved from the environment variables.
    |
    */

    'api_key' => env('SMS_API_KEY', 'your_default_api_key'),

    /*
    |--------------------------------------------------------------------------
    | SMS Service Provider
    |--------------------------------------------------------------------------
    |
    | This value determines which SMS service provider to use.
    | Supported: "default", "twilio", "nexmo" (if implemented)
    |
    */

    'provider' => env('SMS_PROVIDER', 'default'),
];
