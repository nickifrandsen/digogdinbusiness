<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_attendees', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('workshop_id')->unsigned()->nullable()->default(null);
            $table->foreign('workshop_id')->references('id')->on('workshops');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->boolean('has_business')->nullable()->default(null);
            $table->boolean('has_payed')->default(0);
            $table->json('questions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop_attendees');
    }
}
