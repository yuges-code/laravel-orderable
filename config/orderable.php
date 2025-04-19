<?php

// Config for yuges/orderable

return [
    'order' => [
        'column' => [
            'name' => 'order',
        ],
        'initial' => [
            'number' => 1
        ]
    ],
    'ordering' => [
        'creating' => true,
        'updating' => true,
    ],
    'orderable' => [
        'observer' => Yuges\Orderable\Observers\OrderableObserver::class,
    ],
];
