<?php

namespace Flooris\Ergonode\Api\Contracts;

use stdClass;
use Flooris\Ergonode\Models\Contracts\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface Listable
{
    public function listUri(): string;

    public function listModelClass(): string;

    public function list(array $columns = [], string $view = 'grid', ?int $perPage = null, int $currentPage = 1, array $filters = [], ?string $sortField = null, string $sortOrder = 'DESC'): LengthAwarePaginator;

    public function listWithColumns(array $columns = [], ?int $perPage = null, int $currentPage = 1, array $filters = [], ?string $sortField = null, string $sortOrder = 'DESC'): stdClass;

    public function firstWhere(string $attribute, mixed $value): ?Model;
}
