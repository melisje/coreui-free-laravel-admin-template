<?php

namespace App\Domains\Zerohuis\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table        = "campaigns";
    protected $guarded      = [];
    public    $incrementing = false;

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }

    /**
     * Scope to return all Campaigns that have default=true
     * @param $query
     * @return mixed
     */
    public function scopeAllDefaults($query)
    {
        return $query->where('default', true);
    }

    /**
     * return the first Campaign in the collection with default=true
     * @return mixed
     */
    public static function default()
    {
        return Campaign::allDefaults()->first();
    }
}
