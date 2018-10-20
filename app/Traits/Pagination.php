<?php

namespace App\Traits;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
/**
 * Trait Pagination
 * ---------------------------------------------------------------
 * Handles the pagination
 * ---------------------------------------------------------------
 *
 * @package App\Traits
 */
trait Pagination
{
    /**
     * Paginate collection
     * @param $items
     * @param int $perPage
     * @param null $page
     * @param array $options
     * @return LengthAwarePaginator
     */
    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    /**
     * Return number per_page for pagination
     * @return int
     */
    public function limitOfPagination()
    {
        return 10;
    }
}