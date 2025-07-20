<?php

namespace App\Post_02_Macros\IO;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register macros here if needed
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Collection::macro('equals', function ($compare) {

            /** @var \Illuminate\Support\Collection $this */
            if (! $compare instanceof Collection) {
                return false;
            }

            return $this->count() === $compare->count() &&
                $this->every(function ($value, $key) use ($compare) {
                    return $compare->has($key) && $compare->get($key) === $value;
                });
        });
    }
}
