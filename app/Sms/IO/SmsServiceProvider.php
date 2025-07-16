<?php

namespace App\Sms\IO;

use App\Sms\UseCases\Services\SmsService;
use App\Sms\UseCases\Services\SmsServiceInterface;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
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
