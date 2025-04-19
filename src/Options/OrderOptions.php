<?php

namespace Yuges\Orderable\Options;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class OrderOptions
{
    /**
     * Order column
     * 
     * @var string|null
     */
    public ?string $column = 'order';

    /**
     * Order query
     * 
     * @var Closure(Builder $builder): Builder
     */
    public Closure $query;

    public function __construct()
    {
        $this->query = fn (Builder $builder) => $builder;
    }
}
