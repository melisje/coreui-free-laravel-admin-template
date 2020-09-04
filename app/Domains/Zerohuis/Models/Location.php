<?php

namespace App\Domains\Zerohuis\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table        = "locations";
    protected $guarded      = [];
    public    $incrementing = false;

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'visits')
                    ->using(Visit::class)
                    ->withPivot('start_at', 'end_at')
                    ->withTimestamps()
                    ->as('visit')
            ;
    }
}
