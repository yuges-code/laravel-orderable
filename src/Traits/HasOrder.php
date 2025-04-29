<?php

namespace Yuges\Orderable\Traits;

use Yuges\Orderable\Config\Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Yuges\Orderable\Options\OrderOptions;
use Yuges\Package\Exceptions\InvalidModel;
use Yuges\Orderable\Observers\OrderableObserver;

/**
 * @property integer $order
 */
trait HasOrder
{
    public function orderable(): OrderOptions
    {
        return new OrderOptions;
    }

    public static function ordered(string $direction = 'asc'): Builder
    {
        $model = new static;
        $column = $model->orderable()->column;

        if (! $model instanceof Model) {
            throw InvalidModel::doesNotImplementModel(static::class);
        }

        $builder = $model->query();

        $builder->getQuery()->orderBy($column, $direction);

        return $builder;
    }

    protected static function bootHasOrder(): void
    {
        static::observe(Config::getOrderableObserverClass(OrderableObserver::class));
    }

    public function getMaxOrder(): int
    {
        $query = $this->orderable()->query;
        $column = $this->orderable()->column;

        if (! $this instanceof Model) {
            throw InvalidModel::doesNotImplementModel(static::class);
        }

        /** @var Model $this */
        $builder = $this->query();

        return (int) $query($builder)->getQuery()->max($column);
    }
}
