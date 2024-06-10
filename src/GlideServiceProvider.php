<?php

declare(strict_types=1);

namespace Krok\Glide;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Glide\ServerFactory;

class GlideServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/glide.php' => config_path('glide.php'),
        ], 'glide-config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/glide.php', 'glide');

        $this->app->singleton('glide', static function () {
            $config = config('glide');

            $config['source'] = Storage::disk($config['source'])->getDriver();
            $config['cache'] = Storage::disk($config['cache'])->getDriver();

            return ServerFactory::create($config);
        });
    }
}
