<?php

namespace Ztj\Laravel\Template\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return ['Ztj\Laravel\Template\Provider'];
    }
}
