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

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * get the cover Photo for this location.
     * This is set in the DB Photo table in the field 'cover'.
     * If multiple photos are marked to be the cover photo,
     * only the first will be returned.
     * @return mixed
     */
    public function getCoverPhotoAttribute()
    {
        return $this->photos()->cover()->first();
    }
}
