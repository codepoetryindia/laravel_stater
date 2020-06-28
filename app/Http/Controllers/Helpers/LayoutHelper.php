<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Support\Facades\View;

class LayoutHelper
{
    /**
     * Set of tokens related to screen sizes.
     *
     * @var array
     */
    protected static $screenSizes = ['xs', 'sm', 'md', 'lg', 'xl'];

    /**
     * Check if layout topnav is enabled.
     *
     * @return bool
     */
    public static function isLayoutTopnavEnabled()
    {
        return config('adminlte.frontend.layout_topnav') || View::getSection('layout_topnav');
    }
}
