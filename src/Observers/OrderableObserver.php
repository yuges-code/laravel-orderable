<?php

namespace Yuges\Orderable\Observers;

use Yuges\Orderable\Config\Config;
use Yuges\Orderable\Interfaces\Orderable;

class OrderableObserver
{
    public function creating(Orderable $model): void
    {
        if (! Config::getOrderingCreating(true)) {
            return;
        }

        $column = $model->orderable()->column;
        $initial = $model->orderable()->initial;

        if (is_null($model->{$column})) {
            $model->{$column} = $model->getMaxOrder() + 1;
        }

        if ($initial > $model->{$column}) {
            $model->{$column} = $initial;
        }
    }

    public function updating(Orderable $model): void
    {
        if (! Config::getOrderingUpdating(true)) {
            return;
        }

        $column = $model->orderable()->column;
        $initial = $model->orderable()->initial;

        if (! is_null($model->{$column})) {
            return;
        }

        $model->{$column} = $model->getMaxOrder() + 1;

        if ($initial > $model->{$column}) {
            $model->{$column} = $initial;
        }
    }
}
