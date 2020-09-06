<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Domains\Zerohuis\Models\Location;
use App\Domains\Zerohuis\Models\Photo;

class PhotoTableSeeder extends Seeder
{
    use \Melit\Melbase\Traits\TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate('zh_photos');

        // https://picsum.photos/v2/list
        // https://picsum.photos/v2/list?page=2&limit=100
        $response = Http::get('https://picsum.photos/v2/list?page=2&limit=100');

        $photos = collect(json_decode($response->body()));

        foreach (Location::all() as $location)
        {
            $lid = $location->id;

            $nrOfPhotos = random_int(4, 10);
            for ($i = 0; $i < $nrOfPhotos; $i++)
            {
                $picsum = $photos->random();
                var_dump($picsum);
                $photo = new Photo();
                $photo->location_id = $lid;
                $photo->picsum_id = $picsum->id;
                $photo->author = $picsum->author;
                $photo->width = $picsum->width;
                $photo->height = $picsum->height;
                $photo->url = $picsum->url;
                $photo->download_url = $picsum->download_url;
                $photo->save();
            }

        }
    }
}
