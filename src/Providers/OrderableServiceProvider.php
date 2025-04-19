<?php

namespace Yuges\Orderable\Providers;

use Yuges\Package\Data\Package;

class OrderableServiceProvider extends \Yuges\Package\Providers\PackageServiceProvider
{
    protected string $name = 'laravel-orderable';

    public function configure(Package $package): void
    {
        $package
            ->hasName($this->name)
            ->hasConfig('orderable');
    }
}
