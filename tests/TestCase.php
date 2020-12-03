<?php

namespace Ztj\Laravel\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return ['Ztj\Laravel\ServiceProvider'];
    }

    protected function getEnvironmentSetUp($app)
    {
        $config = $app['config'];

        $config->set('app.debug', true);
    }
}
