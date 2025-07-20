<?php

use App\Post_01_Dependency_Injection\UseCases\Services\SmsService;
use App\Post_01_Dependency_Injection\UseCases\Services\SmsServiceInterface;
use Tests\TestCase;

uses(TestCase::class);

test('sms service interface is bound to container', function () {
    $smsService = app(SmsServiceInterface::class);

    expect($smsService)->toBeInstanceOf(SmsService::class);
});

test('default sms service uses config api key', function () {
    // Set a test API key in the config
    config(['sms.api_key' => 'test_api_key_for_unit_test']);

    $smsService = app(SmsServiceInterface::class);
    $result = $smsService->sendSms('1234567890', 'Test message');

    expect($result)->toContain('test_api_key_for_unit_test');
});

test('sms service sends message correctly', function () {
    $apiKey = 'test-api-key';
    $smsService = new SmsService($apiKey);

    $phone = '1234567890';
    $message = 'Hello, this is a test message';

    $result = $smsService->sendSms($phone, $message);

    expect($result)
        ->toContain("SMS sent to $phone")
        ->toContain("with message: $message")
        ->toContain("using API key: $apiKey");
});
