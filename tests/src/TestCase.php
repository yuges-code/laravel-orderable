<?php

namespace Yuges\Orderable\Tests;

use Illuminate\Contracts\Config\Repository;
use Orchestra\Testbench\Attributes\WithMigration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Yuges\Orderable\Providers\OrderableServiceProvider;

#[WithMigration]
class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        # code...

        parent::setUp();
    }

    protected function defineEnvironment($app)
    {
        tap($app['config'], function (Repository $config) {
            $config->set('orderable', require __DIR__ . '/../../config/orderable.php');
        });
    }

    protected function getPackageProviders($app)
    {
        return [
            OrderableServiceProvider::class,
        ];
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadMigrationsFrom([
                __DIR__ . '/../../database/migrations/',
                __DIR__ . '/Stubs/Migrations',
            ]
        );
    }
}
