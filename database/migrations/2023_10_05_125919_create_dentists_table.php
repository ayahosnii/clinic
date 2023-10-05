<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDentistsTable extends Migration
{
    public function up()
    {
        Schema::create('dentists', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->boolean('active')->default(true);
            $table->decimal('hourly_rate', 10, 2);
            $table->text('bio');
            $table->string('profile_picture')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('specialty_id')->constrained('specialties');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dentists');
    }
}
