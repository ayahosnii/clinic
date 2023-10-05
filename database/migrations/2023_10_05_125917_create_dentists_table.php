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
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('license_number');
            $table->text('education');
            $table->text('experience');
            $table->boolean('active')->default(true);
            $table->integer('clinic_id');
            $table->decimal('hourly_rate', 10, 2);
            $table->text('bio');
            $table->string('profile_picture')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('specialty_id')->constrained('specialties'); // Foreign key to Specialties table
        });
    }

    public function down()
    {
        Schema::dropIfExists('dentists');
    }
}
