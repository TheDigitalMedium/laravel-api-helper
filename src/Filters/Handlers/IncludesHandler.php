<?php

namespace TheDigitalMedium\ApiHelper\Filters\Handlers;

use Closure;
use TheDigitalMedium\ApiHelper\Filters\Contracts\QueryFiltersHandlerInterface;
use TheDigitalMedium\ApiHelper\Filters\DTO\QueryFiltersOptionsDTO;

class IncludesHandler implements QueryFiltersHandlerInterface
{
    public function handle(QueryFiltersOptionsDTO $queryFiltersOptionsDTO, Closure $next): QueryFiltersOptionsDTO
    {
        $includes = array_intersect(
            $queryFiltersOptionsDTO->getFiltersDTO()->getIncludes(),
            $queryFiltersOptionsDTO->getAllowedIncludes()
        );

        $queryFiltersOptionsDTO->getBuilder()->with($includes);

        return $next($queryFiltersOptionsDTO);
    }
}
