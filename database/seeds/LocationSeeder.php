<?php

use Illuminate\Database\Seeder;
use App\Domains\Zerohuis\Models\Location;
use App\Domains\Zerohuis\Models\Contact;
use Melit\Melbase\Traits\DisableForeignKeys;
use Melit\Melbase\Traits\TruncateTable;

class LocationSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        $this->truncate('locations');

        factory(Location::class, 2)->create()->each(function ($location)
        {

            $contacts = $location->contacts()->attach(factory(Contact::class, random_int(5, 50))->create());

            $contacts = $location->contacts->each(function ($contact)
            {

                echo "+-> updating visit for contact $contact->id\n";
                $contact->visit->update([
                                            'end_at'  => \Carbon\Carbon::now(),
                                            'persons' => random_int(1, 5),
                                        ]);

            });

        })
        ;

        $this->enableForeignKeys();

    }
}
