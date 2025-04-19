<?php

namespace Yuges\Orderable\Traits;

use Illuminate\Database\Eloquent\Model;
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

    protected static function bootHasOrder(): void
    {
        static::observe(OrderableObserver::class);
    }

    public function getMaxOrder(): int
    {
        $model = new static;

        $query = $model->orderable()->query;
        $column = $model->orderable()->column;

        if (! $model instanceof Model) {
            throw InvalidModel::doesNotImplementModel(static::class);
        }

        $builder = $model->query();

        return (int) $query($builder)->getQuery()->max($column);
    }
}
