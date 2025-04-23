<?php

namespace Yuges\Orderable\Config;

use Yuges\Orderable\Observers\OrderableObserver;

class Config extends \Yuges\Package\Config\Config
{
    const string NAME = 'orderable';

    /** @return class-string<OrderableObserver> */
    public static function getOrderableObserverClass(mixed $default = null): string
    {
        return self::get('models.orderable.observer', $default);
    }

    public static function getOrderableOrderColumnName(mixed $default = null): string
    {
        return self::get('models.orderable.order.column.name', $default);
    }

    public static function getOrderableOrderInitialNumber(mixed $default = null): string
    {
        return self::get('models.orderable.order.initial.number', $default);
    }

    public static function getOrderingCreating(mixed $default = null): bool
    {
        return self::get('ordering.creating', $default);
    }

    public static function getOrderingUpdating(mixed $default = null): bool
    {
        return self::get('ordering.updating', $default);
    }
}
