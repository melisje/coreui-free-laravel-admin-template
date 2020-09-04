<?php

use Illuminate\Database\Seeder;
use App\Domains\Zerohuis\Models\Campaign;
use Melit\Melbase\Traits\DisableForeignKeys;
use Melit\Melbase\Traits\TruncateTable;

class CampaignSeeder extends Seeder
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

        $this->truncate('campaigns');

        Campaign::create(['id' => 'openhuis', 'name' => 'Open huis campagne']);
        Campaign::create(['id' => 'facebook', 'name' => 'Facebook campagne']);
        Campaign::create(['id' => 'newspaper', 'name' => 'Kranten campagne']);

        $this->enableForeignKeys();
    }
}
