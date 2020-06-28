<?php

namespace App\Http\Controllers\Helpers;

use Exception;

class MenuBuilderHelper
{
    function __construct()
    {
    }

    public static function menu()
    {
        return $items = config('adminlte.frontend.menu', []);
        // if (count($items) == 0) {
        //     throw new Exception("Please check config, front->menu is empty", 1);
        // }
        $response_item = [];
        foreach ($items as $key => $value) {
            $item = [];

            $item['text'] = @$value['text'];
            $item['lavel'] = @$value['lavel'];
            $item['icon'] = @$value['icon'];
            $item['url'] = @$value['url'];
            $item['target'] = @$value['target'];
            $item['top_nav_class'] = @$value['top_nav_class'];
        }
    }
}
