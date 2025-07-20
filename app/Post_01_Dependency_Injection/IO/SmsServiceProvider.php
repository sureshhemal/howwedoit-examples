<?php

namespace App\Post_01_Dependency_Injection\IO;

use App\Post_01_Dependency_Injection\UseCases\Services\SmsService;
use App\Post_01_Dependency_Injection\UseCases\Services\SmsServiceInterface;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(SmsServiceInterface::class, function ($app) {
            return new SmsService(
                config('sms.api_key')
            );
        });
    }
}
