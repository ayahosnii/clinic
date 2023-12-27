<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkHoursTable extends Migration
{
    public function up()
    {
        Schema::create('work_hours', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('dentist_id');
                $table->foreign('dentist_id')->references('id')->on('dentists');
                $table->integer('slot_duration');
                $table->time('start_time');
                $table->time('end_time');
                $table->timestamps();

                $table->unique(['dentist_id']);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_hours');
    }
};
