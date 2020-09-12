<?php

namespace App\Domains\Zerohuis\Models;

use Carbon\Carbon;
use Melit\Melbase\Models\Traits\Encryptable;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /*
 * Enable the features to save and retrieve values encrypted in the database
 *
 * IMPORTANT: de values are encrypted and decrypted with the method that is defined in config/app.php, using the
 * APP.KEY in .env. If you loose or change this key, you can't retrieve the values anymore !!
 *
 */
    use Encryptable;

    protected $table        = "contacts";
    protected $guarded      = [];
    public    $incrementing = true;

    /*
     * Following fields are stored encrypted in the database.
     * This is needed as a measure to realise Privacy By Design
     *
     * IMPORTANT: de values are encrypted and decrypted with the method that is defined in config/app.php, using the
     * APP.KEY in .env. If you loose or change this key, you can't retrieve the values anymore !!
     *
     */
    protected $encryptable = ['name', 'phone', 'email', 'street'];


    /**
     * return the Locations this Contact visited.
     * The visit pivot contains extra attributes:
     * - persons: the number of persons that were together with the contact, including the contact
     * - start_at: the time the visit started
     * - end_at: the time the visit ended (or null if not defined)
     * - timestamps for created_at and updated_at
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function locations()
    {
        return $this->belongsToMany(Location::class, 'visits')
                    ->as('visit')
                    ->withTimestamps()
            ;
    }

    public static function json_decode($json)
    {
        $obj        = json_decode($json);
        $attributes = isset($obj) ? get_object_vars($obj) : [];
        //        return $json;
        return new Contact($attributes);
    }

    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class);
    }

    /**
     * Scope to return only Contacts that have the consent property = 0.
     * Contacts that have not given their consent to be contacted appart from contact tracing (Covid)
     * @param $query
     */
    public function scopeNoConsent($query)
    {
        $query->where('consent', false);
    }

    public function scopeChangedBefore($query,$days)
    {
        $cleandate = new Carbon();
        $query->where('updated_at','<=', $cleandate);
    }

}
