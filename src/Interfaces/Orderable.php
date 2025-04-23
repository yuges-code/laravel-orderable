<?php

namespace Yuges\Orderable\Interfaces;

use Yuges\Orderable\Options\OrderOptions;
use Illuminate\Database\Eloquent\Builder;

interface Orderable
{
    public function orderable(): OrderOptions;

    public static function ordered(string $direction = 'asc'): Builder;

    public function getMaxOrder(): int;
}
