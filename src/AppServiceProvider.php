<?php

namespace VioletaskyaPhotos;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /**
         * Register local routes.
         */
        include __DIR__ . '/routes.php';

        /**
         * Publish config.
         */
        $this->publishes([
            __DIR__.'/../config/photos.php' => config_path('photos.php'),
        ], 'violetaskya-photos-config');

    }

    public function register()
    {
        $this->commands([
            Console\UpdateCommand::class
        ]);

        $this->app->bind('VioletaskyaPhotos\Repositories\RepositoryInterface', 'VioletaskyaPhotos\Repositories\FlickrRepository');
    }
}