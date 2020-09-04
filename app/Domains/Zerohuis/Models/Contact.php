<?php

namespace App\Domains\Zerohuis\Models;

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
    protected $encryptable = ['name', 'phone','email','street'];


//    public function realization()
//    {
//        return $this->belongsTo(Realization::class);
//    }

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

}
