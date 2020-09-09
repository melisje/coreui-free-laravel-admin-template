<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zh_photos', function (Blueprint $table) {
            $table->id();
            $table->string('location_id');

            $table->string('picsum_id');
            $table->string('author');
            $table->string('url');
            $table->string('download_url');
            $table->integer('width');
            $table->integer('height');


            $table->timestamps();

            $table->foreign('location_id')->references('id')->on("locations")->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zh_photos');
    }
}
