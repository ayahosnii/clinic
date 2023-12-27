<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('dentist_schedule', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('dentist_id'); // Use dentist_id as the foreign key
        $table->date('date');
        $table->time('start_time');
        $table->time('end_time');
        // Add any additional fields you need here
        $table->timestamps();

        // Define the foreign key constraint
        $table->foreign('dentist_id')->references('id')->on('dentists');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentist_schedule');
    }
};
