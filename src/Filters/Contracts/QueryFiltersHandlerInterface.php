<?php

namespace TheDigitalMedium\ApiHelper\Filters\Contracts;

use Closure;
use TheDigitalMedium\ApiHelper\Filters\DTO\QueryFiltersOptionsDTO;

interface QueryFiltersHandlerInterface
{
    public function handle(QueryFiltersOptionsDTO $queryFiltersOptionsDTO, Closure $next): QueryFiltersOptionsDTO;
}
