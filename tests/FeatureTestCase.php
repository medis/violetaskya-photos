<?php

namespace VioletaskyaPhotos\Tests;

use Orchestra\Testbench\TestCase;
use VioletaskyaPhotos\AppServiceProvider;

class FeatureTestCase extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            AppServiceProvider::class
        ];
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $config = $app->get('config');
        $config->set('logging.default', 'errorlog');
    }
}