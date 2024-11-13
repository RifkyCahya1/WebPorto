<?php

namespace App\Providers;
use Illuminate\Support\Facades\File;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
{
    if (app()->environment('production')) {
        $viewPath = '/tmp/storage/framework/views';
        if (!File::exists($viewPath)) {
            File::makeDirectory($viewPath, 0755, true);
        }

        config([
            'view.compiled' => $viewPath,
            'cache.stores.file.path' => '/tmp/storage/framework/cache',
            'session.files' => '/tmp/storage/framework/sessions',
        ]);
    }
}
}
