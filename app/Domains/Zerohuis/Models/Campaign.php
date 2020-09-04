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
}
