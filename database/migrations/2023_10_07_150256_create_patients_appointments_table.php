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
        Schema::create('patients_appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('dentist_id');
            $table->datetime('appointment_datetime');
            $table->text('description')->nullable();
            $table->boolean('confirmed')->default(false);
            $table->enum('status', ['scheduled', 'completed', 'canceled'])->default('scheduled');
            $table->decimal('fee', 8, 2)->nullable();
            $table->string('payment_status')->nullable();
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('dentist_id')->references('id')->on('dentists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients_appointments');
    }
};
