<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('street');
            $table->string('zipcode');
            $table->string('location');
            $table->longText('extra')->nullable();
            $table->boolean('consent')->default(false);
            $table->string('campaign_id')->nullable();
            $table->timestamps();

            $table->foreign('campaign_id')->references('id')->on('campaigns')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
