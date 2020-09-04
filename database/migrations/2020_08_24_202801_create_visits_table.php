<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table)
        {
            $table->string('location_id');
            $table->unsignedBigInteger('contact_id');
            $table->timestamp('start_at');
            $table->timestamp('end_at')->nullable();
            $table->unsignedInteger('persons')->default(0);
            $table->timestamps();

            $table->primary(['location_id', 'contact_id']);

            $table->foreign('location_id')->references('id')->on('locations')->onUpdate('cascade');
            $table->foreign('contact_id')->references('id')->on('contacts')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
