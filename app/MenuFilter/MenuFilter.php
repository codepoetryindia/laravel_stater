<?php

namespace App\MenuFilter;

use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Laratrust\Laratrust;

class MeniFilter implements FilterInterface
{
    public function transform($item, Builder $builder)
    {
        if (isset($item['permission']) && !Laratrust::isAbleTo($item['permission'])) {
            return false;
        }

        return $item;
    }
}
