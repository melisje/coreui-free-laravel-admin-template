<?php


namespace App\Domains\Zerohuis;


use Melit\Melbase\Models\Setting;

class Maps
{
    public static function zoomFactor($default = 13)
    {
        $zoomfactor = config('zerohuis.maps.zoomfactor');
        return $zoomfactor;
    }
}
