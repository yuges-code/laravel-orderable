<?php

// Config for yuges/orderable

return [
    /*
     * FQCN (Fully Qualified Class Name) of the models to use for orders
     */
    'models' => [
        'orderable' => [
            'order' => [
                'column' => [
                    'name' => 'order',
                ],
                'initial' => [
                    'number' => 1
                ],
            ],
            'observer' => Yuges\Orderable\Observers\OrderableObserver::class,
        ],
    ],

    'ordering' => [
        'creating' => true,
        'updating' => true,
    ],
];
