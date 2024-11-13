<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (app()->environment('production')) {
            config([
                'view.compiled' => realpath('/tmp') . '/storage/framework/views',
                'cache.stores.file.path' => realpath('/tmp') . '/storage/framework/cache',
                'session.files' => realpath('/tmp') . '/storage/framework/sessions',
            ]);
        }
    }
}
