<?php

namespace App\Domains\Zerohuis\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table        = "zh_photos";
    protected $guarded      = [];
    public    $incrementing = true;


    /**
     * scope to filter only the photos marked as cover photo.
     * @param $query
     * @return mixed
     */
    public function scopeCover($query)
    {
        return $query->where('cover', true);
    }
}
