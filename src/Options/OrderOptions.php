<?php

namespace Yuges\Orderable\Options;

use Closure;
use Yuges\Orderable\Config\Config;
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
     * Order initial number
     * 
     * @var integer|null
     */
    public ?int $initial = 1;

    /**
     * Order query
     * 
     * @var Closure(Builder $builder): Builder
     */
    public Closure $query;

    public function __construct()
    {
        $this->column = Config::getOrderableOrderColumnName($this->column);
        $this->initial = Config::getOrderableOrderInitialNumber($this->initial);

        $this->query = fn (Builder $builder) => $builder;
    }
}
