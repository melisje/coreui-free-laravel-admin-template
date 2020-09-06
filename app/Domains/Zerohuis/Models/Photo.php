<?php

namespace App\Domains\Zerohuis\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table        = "zh_photos";
    protected $guarded      = [];
    public    $incrementing = true;
}
