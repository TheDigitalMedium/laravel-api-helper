<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Generators
    |--------------------------------------------------------------------------
    | Number of items per page when using dynamic pagination.
    */
    'default_pagination_number' => 20,

    /*
    |--------------------------------------------------------------------------
    | Default Datetime Format for API Resources
    |--------------------------------------------------------------------------
    | The default format for displaying date and time values in API resources.
    | Used by the dateTimeFormat function when generating API resource responses,
    | ensuring consistent formatting for datetime values.
    */
    'datetime_format' => 'Y-m-d H:i:s',

    /*
    |--------------------------------------------------------------------------
    | Filters
    |--------------------------------------------------------------------------
    |
    | Specify the list of handler classes for processing query filters.
    | These handlers will be applied in the specified order.
    */
    'filters' => [
        'handlers' => [
            TheDigitalMedium\ApiHelper\Filters\Handlers\FiltersHandler::class,
            TheDigitalMedium\ApiHelper\Filters\Handlers\SortHandler::class,
            TheDigitalMedium\ApiHelper\Filters\Handlers\IncludesHandler::class,
            TheDigitalMedium\ApiHelper\Filters\Handlers\SearchHandler::class,
        ],
    ],

];
